<?php
include '../model/compte.php';
include '../dao/dao_compte.php';

$dao = new DaoCompte();
$dao->ConnexionBD();

switch($_GET['action'])
{
    //
    // Connexion d'un compte
    //

    case 'connexion':
        
        if(isset($_POST['email'], $_POST['motdepasse'])) {
            $res = $dao->Connexion($_POST['email'], $_POST['motdepasse']);
            if(!empty($res)) {

                if($res['admin'] == false){
                    $compte= new Compte($res['idCompte'],$res['cin'],$res['nom'],$_POST['prenom'],$res['email'],$res['motDepasse'],$res['adresse'],$res['telephone']);
                    session_start();
                    $_SESSION['compte']=$compte;
                    $_SESSION['id']=$res['idCompte'];
                    $_SESSION['compte_email']=$_POST['email'];
                    
                    header('location: ../index.php');
                }
                else{
                    header('location: ../view/admin_page.php');
                }
            } else {
                header('location: ../view/connexion.html');
            }

        } else {
            header('location: ../view/inscription.php');
        }
    break;

    case 'inscrire':
        $dao->createCompte($_POST['cin'], $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['motdepasse'], $_POST['adresse'], $_POST['telephone']);
        header('location: ../view/connexion.html');
    break;

    //
    // Déconnexion du compte
    //

    case 'deconnexion':
        session_start();
        session_destroy();
        header('location: ../index.php');
    break;

    case 'supprimer':
        session_start();
        $id = $_SESSION['id'];
        $dao->supprimerCompte($id);
        header('location: compte_controller.php?action=deconnexion');
    
    break;

    //
    // Informations d'authentification dans le navbar
    //

    // pour les pages qui sont dans le dossier view
    case 'loadViewInfo':
        session_start();
        if (isset($_SESSION['compte']))
        {
            
            echo '<a href="../controller/compte_controller.php?action=deconnexion"><button type="button" class="btn btn-outline-danger">Se déconnecter</button></a>';
        } else {
            echo '  <ul style="list-style-type: none; padding: 0;">
                        <li style="display: inline-block;" ><a href="view/connexion.html" style="margin-right:2px; font-size: small;"><button type="button">Se connecter</button></a></li>
                        <li style="display: inline-block;"><a href="view/inscription.php" style="font-size: small;"><button type="button" >Inscription</button></a></li>
                    </ul>';
        }

    break;
    

    // pour la page index
    case 'loadInfo':
        session_start();
        if (isset($_SESSION['compte']))
        {
            echo '<a href="controller/compte_controller.php?action=deconnexion" style="font-size: small;"><button type="button" class="btn btn-outline-danger">Se déconnecter</button></a>';
        } else {
            echo '  <ul style="list-style-type: none; padding: 0;">
                        <li style="display: inline-block;" ><a href="view/connexion.html" style="margin-right:2px; font-size: small;"><button type="button">Se connecter</button></a></li>
                        <li style="display: inline-block;"><a href="view/inscription.php" style="font-size: small;"><button type="button" >Inscription</button></a></li>
                    </ul>';
        }

    break;


    case 'modifier':
        session_start();
        $id = $_SESSION['id'];
        $dao->changerCompte($_POST['cin'], $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['motdepasse'], $_POST['adresse'], $_POST['telephone'], $id);
        header('location: ../view/profile.php');

    break;

}


?>