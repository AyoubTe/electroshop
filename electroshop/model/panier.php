<?php
include '../dao/dao_produit.php';
class Panier
{
    private $idpan,
        $idc,
        $idpro,
        $quantity;

    public function __construct($ipan, $ic, $ipro, $q)
    {
        $this->idpan = $ipan;
        $this->idc = $ic;
        $this->idpro = $ipro;
        $this->quantity = $q;
    }

    public function getIdpan()
    {
        return $this->idpan;
    }

    public function getIdc()
    {
        return $this->idc;
    }

    public function getIdpro()
    {
        return $this->idpro;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }
}
