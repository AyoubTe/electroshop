<?php
    include "../model/commande.php";
    include "../dao/dao-panier.php";
    class DaoCommande
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
        

        public function findAll($id)
        {
            $stm=$this->dbh->prepare("SELECT * FROM commande WHERE idClient=? ORDER BY dateCommande DESC");
            $stm->bindParam(1,$id);
            $stm->execute();
            $resultat = $stm->fetchAll(PDO::FETCH_ASSOC);

            return $resultat;
        }

        public function findNotTraited()
        {
            $status = "En attente";
            $stm=$this->dbh->prepare("SELECT * FROM commande WHERE statusCommande=? ORDER BY dateCommande DESC");
            $stm->bindParam(1,$status);
            $stm->execute();
            $resultat = $stm->fetchAll(PDO::FETCH_ASSOC);

            return $resultat;
        }
        function getAllCommandesWithClientInfo() {
            $host = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'electroshop_db';
    
            try {
                $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
                $stmt = $conn->prepare("
                    SELECT c.idClient, c.total, c.statusCommande, c.datePaiement, co.nom, co.prenom , c.idCommande
                    FROM commande c
                    JOIN compte co ON c.idClient = co.idCompte
                ");
                
                $stmt->execute();
    
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
                return $result;
            } catch (PDOException $e) {
                echo "Erreur: " . $e->getMessage();
            }
    
            $conn = null;
            return array();
        }
        
        public function updateStatus($commandeId, $newStatus) {
            $host = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'electroshop_db';
            try {
                $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $stmt = $conn->prepare("
                     UPDATE commande
                     SET statusCommande = :newStatus
                    WHERE idCommande = :commandeId
                ");
        
                $stmt->bindParam(':newStatus', $newStatus);
                $stmt->bindParam(':commandeId', $commandeId);
        
             $stmt->execute();

    } catch (PDOException $e) {
        echo "Erreur: " . $e->getMessage();
    }

    $conn = null;
}

        public function passer()
        {
            $stm=$this->dbh->prepare("  SELECT * FROM commande
                                        ORDER BY idCommande DESC
                                        LIMIT 1;");
            $stm->execute();
            $commande = $stm->fetch(PDO::FETCH_ASSOC);
            
            $daop = new DaoPanier();
            $articles = $daop->getAll();
            foreach($articles as $article){
                $stm=$this->dbh->prepare("INSERT INTO produit_commande VALUES(?, ?, ?)");
                $stm->bindParam(1, $commande['idCommande']);
                $stm->bindParam(2, $article['idProduit']);
                $stm->bindParam(3, $article['quantite']);
                $stm->execute();
            }

            $daop->deleteAll();
        }

        public function ajouter($id, $total)
        {
            $d = date("Y-m-d");
            $dp = Null;
            $m =  "A la livraison";
            $s = "En attente";
    
            $stm=$this->dbh->prepare("INSERT INTO commande(idClient, dateCommande, datePaiement, modePaiement,	statusCommande,	total) VALUES(?, ?, ?, ?, ?, ?)");
            $stm->bindParam(1, $id);
            $stm->bindParam(2, $d);
            $stm->bindParam(3, $dp);
            $stm->bindParam(4, $m);
            $stm->bindParam(5, $s);
            $stm->bindParam(6, $total);

            $stm->execute();
        }
        	

        public function estAnnulerCommande($idCom){
            $stm = $this->dbh->prepare("SELECT * From commande WHERE idCommande = ?");
            $stm->bindParam(1, $idCom);
            $stm->execute();

            $result = $stm->fetch();

            $tempsCourant = new DateTime();
            $orderDateTime = new DateTime($result['dateCommande']);
            $diff = $tempsCourant->diff($orderDateTime);
            
            return $diff->days < 1;
        }

        public function annulerCommande($idCom){
            $stm = $this->dbh->prepare("UPDATE commande SET statusCommande = 'Annulée' WHERE idCommande = $idCom");
            //$stm->bindParam(1, $idCom);
            $stm->execute();
        }
    }
?>