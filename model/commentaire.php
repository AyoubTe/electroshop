<?php
    class Commentaire {
        private $id,
                $idcompte,
                $idproduit,
                $message,
                $note;

        public function __construct($i,$idc,$idp,$m,$n) {
            $this->id=$i;
            $this->idcompte=$idc;
            $this->idproduit=$idp;
            $this->message=$m;
            $this->note=$n;
        }

        public function getId()
        {
            return $this->id;
        }
        
        public function getIdcompte()
        {
            return $this->idcompte;
        }
        public function getIdproduit()
        {
            return $this->idproduit;
        }

        public function getMessage()
        {
            return $this->message;
        }

        public function getNote()
        {
            return $this->note;
        }
    }

?>