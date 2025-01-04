<?php
include '../dao/dao_produit.php';

$id = $_GET['idP'];
$dao = new DaoProduit();
$dao->supprimerProduit($id);
header('Location: ./admin_page.php');
