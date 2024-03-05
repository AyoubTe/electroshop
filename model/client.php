<?php 
    class Client {
        protected $noClient, $cin, $nom, $prenom, $adresse, $telephone, $email, $motPasse;
        public function __construct($carte, $name, $fname, $adress, $tel, $mail, $mp) {
            $this->cin = $carte;
            $this->nom = $name;
            $this->prenom = $fname;
            $this->adresse = $adress;
            $this->telephone = $tel;
            $this->email = $mail;
            $this->motPasse = $mp;
        }  
        
        /**
             * Get the value of cin
             */ 
            public function getCin()
            {
                    return $this->cin;
            }
    
            /**
             * Get the value of nom
             */ 
            public function getNom()
            {
                    return $this->nom;
            }
    
            /**
             * Get the value of prenom
             */ 
            public function getPrenom()
            {
                    return $this->prenom;
            }
    
            /**
             * Get the value of email
             */ 
            public function getEmail()
            {
                    return $this->email;
            }
    
            /**
             * Get the value of adresse
             */ 
            public function getAdresse()
            {
                    return $this->adresse;
            }
    
            /**
             * Get the value of telephone
             */ 
            public function getTelephone()
            {
                    return $this->telephone;
            }

             /**
             * Get the value of mot de passe
             */ 
            public function getMotPasse()
            {
                    return $this->motPasse;
            }
    }

?>