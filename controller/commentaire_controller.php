<?php
include '../model/commentaire.php';
include '../dao/dao_commentaire.php';
include '../model/compte.php';
include '../dao/dao_compte.php';

$dao = new DaoCommentaire();
$daocompte = new DaoCompte();

switch($_GET['action'])
{
    //
    // Publication d'un commentaire
    //

    case 'publier':
        session_start();
        if(isset($_SESSION['compte'],$_POST['msg'],$_GET['code'],$_POST['note'])) {
            $vn=0;
            switch($_POST['note'])
            {
                case 'one':
                    $vn=1;
                    break;
                case 'two':
                    $vn=2;
                    break;
                case 'three':
                    $vn=3;
                    break;
                case 'four':
                    $vn=4;
                    break;
                case 'five':
                    $vn=5;
                    break;
            }
            $dao->PublierCommentaire($_POST['msg'],$vn,$_SESSION['compte']->getId(),$_GET['code']);
            header('location: ../view/produit.php?code='.$_GET['code']);
        } else {
            if(!isset($_SESSION['compte'])) {
                echo 'Compte indisponible.';
            }
            if(!isset($_POST['msg'])) {
                echo 'Message indisponible.';
            }
            if(!isset($_GET['code'])) {
                echo 'Code barre indisponible.';
            }
            if(!isset($_POST['note'])) {
                echo 'Note de commentaire indisponible.';
            }
        }
    break;


    //
    // Suppression d'un commentaire
    //


    case 'supprimer':
        session_start();
        $dao->SupprimerCommentaire($_GET['id']);
        header('location: ../view/produit.php?code='.$_GET['code']);
    break;

}


?>