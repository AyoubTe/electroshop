<?php
class Compte {
    private $id,
            $cin,
            $nom,
            $prenom,
            $email,
            $mdp,
            $adresse,
            $tel;

    public function __construct($i,$c,$n,$p,$e,$m,$a,$t) {
        $this->id=$i;
        $this->cin=$c;
        $this->nom=$n;
        $this->prenom=$p;
        $this->email=$e;
        $this->mdp=$m;
        $this->adresse=$a;
        $this->tel=$t;

    }

    public function getId()
    {
        return $this->id;
    }

 
    public function getCin()
    {
        return $this->cin;
    }


    public function getNom()
    {
        return $this->nom;
    }

 
    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getMdp()
    {
        return $this->mdp;
    }


    public function getAdresse()
    {
        return $this->adresse;
    }

    public function getTel()
    {
        return $this->tel;
    }
}
?>