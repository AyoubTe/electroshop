<?php
//include '../model/categorie.php';
class DaoCategorie
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

    public function getCategorie($i)
    {
        $produit = null;
        $stm = $this->dbh->prepare("SELECT * FROM categorie WHERE idCategorie = ? ");
        // On insère l'id de la catégorie en question de manière sécurisée
        $stm->bindParam(1, $i);
        // On éxécute la requête SQL
        $stm->execute();
        // On récupère les données 
        $resultat = $stm->fetch(PDO::FETCH_ASSOC);
        if (!empty($resultat)) {
            $categorie = new Categorie(
                $resultat['idCategorie'],
                $resultat['nom']
            );
        }
        return $categorie;
    }

    public function ListeCategories()
    {
        $sql = "SELECT * FROM categorie";
        $requete = $this->dbh->query($sql);

        $categories = $requete->fetchAll();

        return $categories;
    }

    public function NomCategorie($id)
    {

        $requete = $this->dbh->prepare("SELECT * FROM categorie WHERE idCategorie=?");
        $requete->bindParam(1, $id);

        $requete->execute();


        $result = $requete->fetch(PDO::FETCH_ASSOC);

        return $result['nom'];
    }

    public function findCategorie($id)
    {
        $stm = $this->dbh->prepare("SELECT * FROM categorie WHERE idCategorie=?");
        $stm->bindParam(1, $id);
        $stm->execute();
        $result = $stm->fetch(PDO::FETCH_ASSOC);

        return new Categorie($result['idCategorie'], $result['nom']);
    }
}
