<?php
include 'C:/xampp/htdocs/electroshop/model/produit.php';
class DaoProduit
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

    public function TrouverProduit($i)
    {
        $produit = null;
        $stm = $this->dbh->prepare("SELECT * FROM produit WHERE idProduit = ? ");
        // On insère l'id du produit en question de manière sécurisée
        $stm->bindParam(1, $i);
        // On éxécute la requête SQL
        $stm->execute();
        // On récupère les données 
        $resultat = $stm->fetch(PDO::FETCH_ASSOC);
        if (!empty($resultat)) {
            $produit = new Produit(
                $resultat['idProduit'],
                $resultat['nom'],
                $resultat['description'],
                $resultat['prix'],
                $resultat['stock'],
                $resultat['idCategorie_Categorie'],
                ""
            );
        }
        return $produit;
    }

    public function Ajouter($n, $d, $p, $s, $ca, $co)
    {
        $stn = $this->dbh->prepare("SELECT * FROM categorie WHERE nom = ?");
        $stn->bindParam(1, $ca);
        $stn->execute();

        $categorie = $stn->fetch(PDO::FETCH_ASSOC);


        $stm = $this->dbh->prepare("INSERT INTO produit (nom, description, prix, stock, idCategorie, codeBare) VALUES(?, ?, ?, ?, ?, ?)");
        $stm->bindValue(1, $n);
        $stm->bindValue(2, $d);
        $stm->bindValue(3, $p);
        $stm->bindValue(4, $s);
        $stm->bindValue(5, $categorie['idCategorie']);
        $stm->bindValue(6, $co);
        $stm->execute();
    }

    public function ListeProduits()
    {
        $sql = "SELECT * FROM produit";
        $requete = $this->dbh->prepare($sql);
        $requete->execute();
        $produits = $requete->fetchAll();

        return $produits;
    }

    public function findProduit($code)
    {
        $stm = $this->dbh->prepare("SELECT * FROM produit WHERE codeBare =?");
        $stm->bindParam(1, $code);
        $stm->execute();

        $resultat = $stm->fetch(PDO::FETCH_ASSOC);

        return new Produit($resultat['idProduit'], $resultat['nom'], $resultat['description'], $resultat['prix'], $resultat['stock'], $resultat['idCategorie'], $resultat['codeBare']);
    }

    public function getNouveauxProduits(){
        $stm = $this->dbh->prepare("SELECT * FROM produit ORDER BY idProduit desc LIMIT 30");
        $stm->execute();
        $result = $stm->fetchAll();

        return $result;
    }

    public function recherche($motCherche) // cette version est sensibele a la case 
    {
        $motsCles = explode(' ', $motCherche); // ⴰⴼ ⵜⵉⵡⴰⵍⵉⵡⵉⵏ
        $array_length = sizeof($motsCles);
        $req = "";
        foreach ($motsCles as $index => $mot) {
            $mot = strtolower($mot); 
            $req .= " (LOWER(nom) LIKE '%{$mot}%' OR LOWER(description) LIKE '%{$mot}%')";

            if ($index < $array_length - 1) {
                $req .= " AND";
            }
        }

        $stm = $this->dbh->prepare("SELECT * FROM produit WHERE $req ORDER BY idProduit DESC LIMIT 10");
        $stm->execute();
        $result = $stm->fetchAll();

        return $result;
    }

    public function supprimerProduit($id)
    {
        $stm = $this->dbh->prepare("DELETE FROM produit WHERE idProduit =?");
        $stm->bindParam(1, $id);
        $stm->execute();
    }


    public function produit($id)
    {
        $produit = null;
        $stm = $this->dbh->prepare("SELECT * FROM produit WHERE idProduit = ? ");
        $stm->bindParam(1, $id);
        $stm->execute();
        $resultat = $stm->fetch(PDO::FETCH_ASSOC);
        return $resultat;
    }


    public function update($n, $d, $p, $s, $ca, $co, $id)
    {
        $stn = $this->dbh->prepare("SELECT * FROM categorie WHERE nom = ?");
        $stn->bindParam(1, $ca);
        $stn->execute();
        $categorie = $stn->fetch(PDO::FETCH_ASSOC);

        $stm = $this->dbh->prepare("UPDATE produit SET nom = ?, description = ?, prix = ?, stock = ?, idCategorie = ?, codeBare = ? WHERE idProduit=?");
        $stm->bindParam(1, $n);
        $stm->bindParam(2, $d);
        $stm->bindParam(3, $p);
        $stm->bindParam(4, $s);
        $stm->bindParam(5, $categorie['idCategorie']);
        $stm->bindParam(6, $co);
        $stm->bindParam(7, $id);
        $stm->execute();
    }
    
}
