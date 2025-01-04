<?php
class DaoCommentaire
{
    private $dbh;

    public function __construct()
    {
        try {
            $this->dbh = new PDO('mysql:host=localhost;dbname=electroshop_db',"root","");
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function ListeCommentaires($idp)
    {
        $stm=$this->dbh->prepare("SELECT * FROM commentaire WHERE idProduit=?");
        $stm->bindParam(1,$idp);
        $stm->execute();
        $resultat = $stm->fetchAll(PDO::FETCH_ASSOC);

        return $resultat;
    }



    public function PublierCommentaire($m,$n,$cpte,$code)
    {
        $stn = $this->dbh->prepare("SELECT idProduit FROM produit WHERE codeBare = ?");
        $stn->bindParam(1, $code);
        $stn->execute();

        $idp = $stn->fetch(PDO::FETCH_ASSOC);
        
        foreach ($idp as $row)
        {
            $stm = $this->dbh->prepare("INSERT INTO commentaire (idCompte, idProduit, Message, Note) VALUES(?, ?, ?, ?)");
            $stm->bindValue(1, $cpte);
            $stm->bindValue(2, $row);
            $stm->bindValue(3, $m);
            $stm->bindValue(4, $n);
            $stm->execute();
        }
        
    }


    public function SupprimerCommentaire($id)
    {
        $stm = $this->dbh->prepare("DELETE FROM commentaire WHERE idCommentaire = ?");
        $stm->bindParam(1, $id);

        $stm->execute();
    }
}

?>