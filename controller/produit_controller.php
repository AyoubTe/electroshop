<?php

include '../dao/dao_produit.php';
include '../dao/dao_commande.php';
include '../dao/dao_categorie.php';

include '../model/compte.php';
//include '../dao/dao_compte.php';
//include '../model/panier.php';
//include '../dao/dao-panier.php';

$dao = new DaoProduit();
$daoca = new DaoCategorie();

session_start();


switch ($_GET['action']) {

    case 'getproduit':
        $res = $dao->TrouverProduit($_POST['produit_id']);
        break;

    case 'creer':
        if (isset($_POST['nom'], $_POST['description'], $_POST['prix'], $_POST['code'], $_POST['quantite'], $_POST['categorie'])) {
            $dao->Ajouter($_POST['nom'], $_POST['description'], $_POST['prix'], $_POST['quantite'], $_POST['categorie'], $_POST['code']);
            header('location: ../view/admin_page.php');
        }

        define("ALLOWED_SIZE",   1097152);    // CHANGE ALLOWED SIZE AS YOUR NEED
        define("SAVED_DIRECTORY", "../assets/images/products/"); // CHANGE SAVED DIRECTORY AS YOUR NEED

        $allowed_extensions = array("jpeg", "jpg"); // CHANGE allowed extension AS YOUR NEED

        if (isset($_FILES['image'])) {
            $errors = array();

            $uploaded_file_name = $_FILES['image']['name'];
            $uploaded_file_size = $_FILES['image']['size'];
            $uploaded_file_tmp  = $_FILES['image']['tmp_name'];
            $uploaded_file_type = $_FILES['image']['type'];

            $file_compositions = explode('.', $uploaded_file_name);
            $file_ext = strtolower(end($file_compositions));

            $saved_file_name = $_POST['code'] . '.jpg';

            if (in_array($file_ext, $allowed_extensions) === false)
                $errors[] = 'Une erreur est survenue lors de l\'enregistrement de l\'image, vous devez utiliser une extension jpeg ou jpg.';

            if ($uploaded_file_size > ALLOWED_SIZE)
                $errors[] = 'L\'image enregistree est tres lourd, reessayez!';

            if (empty($errors) == true) { // if no error, uploaded image is valid
                move_uploaded_file($uploaded_file_tmp, SAVED_DIRECTORY . $saved_file_name);
            } else {
                print_r($errors);
            }
        }
        break;

    case 'ajouter':

        $daop = new DaoPanier();
        $code = $_GET['code'];
        $daop->ajouter($_SESSION['id'], $code);
        header('location: ../view/panier.php');

        break;

    case 'passer':
        $total = $_GET['total'];
        $dao = new DaoCommande();
        $dao->ajouter($_SESSION['id'], $total);
        $dao->passer();
        header('location: ../view/order.html');

        break;
    case 'annuler':
        $id = $_GET['id'];
        $daoc = new DaoCommande();
        $daoc->annulerCommande($id);
        header('location: ../view/profile.php');
        break;

    case 'modifier':
        $id = $_GET['idP'];
        $produit = $dao->produit($id);
        header('location: ../view/modifier_produit.php?idP=' . $id);
        break;

    case 'supprimer':
        $id = $_GET['idP'];
        $dao->supprimerProduit($id);
        header('Location: ../view/admin_page.php');
        break;

    case 'update':
        $cat = $daoca->NomCategorie($_POST['categorie']);
        $id = $_GET['idP'];
        if (isset($_POST['nom'], $_POST['description'], $_POST['prix'], $_POST['quantite'], $_POST['categorie'], $_POST['code'])) {
            $dao->update($_POST['nom'], $_POST['description'], $_POST['prix'], $_POST['quantite'], $cat, $_POST['code'], $id);
            header('location: ../view/admin_page.php');
        }

        define("ALLOWED_SIZE",   1097152);    
        define("SAVED_DIRECTORY", "../assets/images/products/"); 

        $allowed_extensions = array("jpeg", "jpg"); 

        if (isset($_FILES['image']) && isset($_FILES['image1'])) {
            $errors = array();

            $uploaded_file_name = $_FILES['image']['name'];
            $uploaded_file_size = $_FILES['image']['size'];
            $uploaded_file_tmp  = $_FILES['image']['tmp_name'];
            $uploaded_file_type = $_FILES['image']['type'];

            $file_compositions = explode('.', $uploaded_file_name);
            $file_ext = strtolower(end($file_compositions));

            $saved_file_name = $_POST['code'] . '.jpg';

            $uploaded_file_name1 = $_FILES['image1']['name'];
            $uploaded_file_size1 = $_FILES['image1']['size'];
            $uploaded_file_tmp1  = $_FILES['image1']['tmp_name'];
            $uploaded_file_type1 = $_FILES['image1']['type'];

            $file_compositions1 = explode('.', $uploaded_file_name1);
            $file_ext1 = strtolower(end($file_compositions1));

            $saved_file_name1 = $_POST['code'] . '2.jpg';

            if (in_array($file_ext, $allowed_extensions) === false)
                $errors[] = 'Une erreur est survenue lors de l\'enregistrement de l\'image, vous devez utiliser une extension jpeg ou jpg.';

            if ($uploaded_file_size > ALLOWED_SIZE)
                $errors[] = 'L\'image enregistree est tres lourd, reessayez!';
            else {
                move_uploaded_file($uploaded_file_tmp, SAVED_DIRECTORY . $saved_file_name);
                move_uploaded_file($uploaded_file_tmp1, SAVED_DIRECTORY . $saved_file_name1);
            }
        }
        
        break;

    case 'delete':
        $id = $_GET['idP'];
        $dao = new DaoPanier();
        $dao->deleteProduitPanier($id);
        header('Location: ../view/panier.php');
        break;

    case 'modify':
        $id = $_GET['idP'];
        $qte = $_POST['qty'];
        $dao = new DaoPanier();
        if (isset($_POST['qty'])) {
            $dao->modifyProduitPanier($id, $_POST['qty']);
            header('Location: ../view/panier.php');
        }

        break;
}
