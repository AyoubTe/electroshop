<?php
class DaoCompte
{
    private $dbh;

        public function __construct()
        {
            try {
                $this->dbh = new PDO('mysql:host=localhost;dbname=electroshop_db', "root", "");
            } 
            catch (PDOException $e) {
                print "Erreur !: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function __destruct()
        {
            $this->dbh = null;
        }
    public function Connexion($l,$p)
    {
        $stm=$this->dbh->prepare("SELECT * FROM compte WHERE email=? AND motDepasse=?");
        $stm->bindParam(1,$l);
        $stm->bindParam(2,$p);
        $stm->execute();
        $result = $stm->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function ConnexionBD()
    {
        try {
            $this->dbh = new PDO('mysql:host=localhost;dbname=electroshop_db',"root","");
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function supprimerCompte($id){
        $stm=$this->dbh->prepare("UPDATE compte SET cin = NULL, nom = NULL, prenom = NULL, email = NULL, motDepasse = NULL, adresse = NULL, telephone = NULL WHERE idCompte=? ");
        $stm->bindParam(1,$id);
        $stm->execute();
        
        $stm=$this->dbh->prepare("DELETE FROM panier idCompte=? ");
        $stm->bindParam(1,$id);
        $stm->execute();
    }

    public function TrouverCompte($id){
        
        $stm=$this->dbh->prepare("SELECT * FROM compte WHERE idCompte=? ");
        $stm->bindParam(1,$id);
        $stm->execute();
        $resultat = $stm->fetch(PDO::FETCH_ASSOC);

        if(!empty($resultat)){
            $compte = new Compte( 
                $resultat['idCompte'],
                $resultat['cin'],
                $resultat['nom'],
                $resultat['prenom'],
                $resultat['email'],
                $resultat['motDepasse'],
                $resultat['adresse'],
                $resultat['telephone']
            );    

            return $compte;
        }
    }

    public function trouveCompte($mail)
    {
        $stm=$this->dbh->prepare("SELECT * FROM compte WHERE email=? ");
        $stm->bindParam(1,$mail);
        $stm->execute();
        $resultat = $stm->fetch(PDO::FETCH_ASSOC);

        if(!empty($resultat)){
            $compte = new Compte( 
                $resultat['idCompte'],
                $resultat['cin'],
                $resultat['nom'],
                $resultat['prenom'],
                $resultat['email'],
                $resultat['motDepasse'],
                $resultat['adresse'],
                $resultat['telephone']
            );    

            return $compte;
        }
    }

    public function createCompte($cin,$nom, $prenom,$email, $mdp, $adresse,$tel){
        $stm=$this->dbh->prepare("INSERT INTO compte(cin, nom, prenom, email, motDepasse, adresse, telephone) VALUES(?, ?, ?, ?, ?, ?, ?) ");
        $stm->bindParam(1,$cin);
        $stm->bindParam(2,$nom);
        $stm->bindParam(3,$prenom);
        $stm->bindParam(4,$email);
        $stm->bindParam(5,$mdp);
        $stm->bindParam(6,$adresse);
        $stm->bindParam(7,$tel);
        $stm->execute();
    }
    
    public function findAccount($id){

        $stm=$this->dbh->prepare("SELECT * FROM compte WHERE idCompte=? ");
        $stm->bindParam(1,$id);
        $stm->execute();
        $result = $stm->fetch();

        return $result;
    }

    public function changerCompte($cin,$nom, $prenom,$email, $mdp, $adresse,$tel, $id){
        $stm=$this->dbh->prepare("UPDATE compte SET cin = ?, nom = ?, prenom = ?, email = ?, motDepasse = ?, adresse = ?, telephone = ? WHERE idCompte = ?");
        $stm->bindParam(1,$cin);
        $stm->bindParam(2,$nom);
        $stm->bindParam(3,$prenom);
        $stm->bindParam(4,$email);
        $stm->bindParam(5,$mdp);
        $stm->bindParam(6,$adresse);
        $stm->bindParam(7,$tel);
        $stm->bindParam(8,$id);
        $stm->execute();
    }
}

?>