<?php
    class Produit {
        private $id,
                $nom,
                $description,
                $prix,
                $stock,
                $idc,
                $code;

        public function __construct($i,$n,$d,$p,$s,$ic,$co) {
            $this->id=$i;
            $this->nom=$n;
            $this->description=$d;
            $this->prix=$p;
            $this->stock=$s;
            $this->idc=$ic;
            $this->code=$co;
        }

        public function getId()
        {
            return $this->id;
        }
    
        public function getNom()
        {
            return $this->nom;
        }

        public function getDescription()
        {
            return $this->description;
        }

        public function getPrix()
        {
            return $this->prix;
        }

        public function getStock()
        {
            return $this->stock;
        }

        public function getIdc()
        {
            return $this->idc;
        }

        public function getCodeBare()
        {
            return $this->code;
        }
    }

?>