<?php

class DaoPanier
{
    private $dbh;

    public function __construct()
    {
        try {
            $this->dbh = new PDO('mysql:host=localhost;dbname=electroshop_db', "root", "");
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function ProduitsPanier()
    {
        session_start();
        if (isset($_SESSION['compte'])) {
            $compte = $_SESSION['compte'];

            $idCompte = intval($compte->getId());
            $stm = $this->dbh->prepare("SELECT idProduit FROM panier WHERE idCompte = :idCompte");
            $stm->bindParam(':idCompte', $idCompte);
            $stm->execute();

            if ($stm->rowCount() == 0) {
                return $stm->fetchAll();
            }

            $result = $stm->fetchAll();

            $idProduits = array();
            foreach ($result as $row) {
                $idProduits[] = $row['idProduit'];
            }
        }


        $placeholders = implode(',', array_fill(0, count($idProduits), '?'));

        $sql = "SELECT * FROM produit WHERE idProduit IN ($placeholders)";

        $stmt = $this->dbh->prepare($sql);

        foreach ($idProduits as $key => $value) {
            $stmt->bindValue(($key + 1), $value, PDO::PARAM_INT);
        }

        $stmt->execute();

        $resultats = $stmt->fetchAll();

        return $resultats;
    }

    public function ProduitQuantite($id)
    {
        if (isset($_SESSION['compte'])) {
            $compte = $_SESSION['compte'];

            $idCompte = intval($compte->getId());

            $stmt = $this->dbh->prepare("SELECT * FROM panier WHERE idProduit = ? AND idCompte = ?");

            $stmt->bindParam(1, $id);
            $stmt->bindParam(2, $idCompte);

            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        return $result;
    }

    public function ajouter($id, $code)
    {
        $daop = new DaoProduit();

        $produit = $daop->findProduit($code);

        $stm = $this->dbh->prepare("INSERT INTO panier (idCompte, idProduit, quantite) VALUES(?, ?, ?)");
        $stm->bindValue(1, $id);
        $stm->bindValue(2, $produit->getId());
        $stm->bindValue(3, 1);

        $stm->execute();
    }

    public function getAll()
    {
        $stm = $this->dbh->prepare("SELECT * FROM panier");
        $stm->execute();

        $items = $stm->fetchAll(PDO::FETCH_ASSOC);

        return $items;
    }

    public function deleteAll()
    {
        $stm = $this->dbh->prepare("TRUNCATE TABLE panier");
        $stm->execute();
    }

    public function deleteProduitPanier($id)
    {
        if (isset($_SESSION['compte'])) {
            $compte = $_SESSION['compte'];

            $idCompte = intval($compte->getId());

            $stm = $this->dbh->prepare("DELETE FROM panier WHERE idCompte = ? AND idProduit = ?");
            $stm->bindParam(1, $idCompte);
            $stm->bindParam(2, $id);

            $stm->execute();
        }
    }

    public function modifyProduitPanier($id, $qte)
    {
        if (isset($_SESSION['compte'])) {
            $compte = $_SESSION['compte'];

            $idCompte = intval($compte->getId());

            $stm = $this->dbh->prepare("UPDATE panier SET quantite = ? WHERE idProduit=? AND idCompte=?");
            $stm->bindParam(1, $qte);
            $stm->bindParam(2, $id);
            $stm->bindValue(3, $idCompte);

            $stm->execute();
        }
    }
}
