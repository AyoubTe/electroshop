<?php
    class Commande{
        private $id, $client, $dateCommande, $datePaiement, $modePaiment, $statutCommande, $total;

        public function __construct($c, $dc, $dp, $mp, $s, $t)
        {
            $client = $c;
            $dateCommande = $dc;
            $datePaiement = $dp;
            $modePaiment = $mp;
            $statutCommande = $s;
            $total = $t;
        }

        

        /**
         * Get the value of statutCommande
         */
        public function getStatutCommande() {
            return $this->statutCommande;
        }

        /**
         * Set the value of statutCommande
         */
        public function setStatutCommande($statutCommande){
                $this->statutCommande = $statutCommande;
        }

        /**
        * Get the value of Client
        */ 
        public function getClient()
        {
            return $this->client;
        }
    
        /**
        * Get the value of client
        */ 
        public function setClient($Client)
        {
            $this->client = $Client;
        }

        public function getDateCommade()
        {
            return $this->dateCommande;
        }
    
        /**
        * Get the value of prenom
        */ 
        public function setDateCommande($datec)
        {
            $this->dateCommande = $datec;
        }

        public function getDatePaiement()
        {
            return $this->datePaiement;
        }
    
        /**
        * Get the value of prenom
        */ 
        public function setDatePaiement($dateP)
        {
            $this->datePaiement = $dateP;
        }

        public function getModePaiement()
        {
            return $this->modePaiment;
        }

        public function setModePaiement($modeP)
        {
            $this->modePaiment = $modeP;
        }

        public function getTotal()
        {
            return $this->total;
        }
    
        /**
        * 
        */ 
        public function setTotal($somme)
        {
            $this->total = $somme;
        }
        
    }
?>