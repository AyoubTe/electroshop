<?php
include "../dao/dao_commande.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dao = new DaoCommande();

    // Get parameters from the AJAX request
    $commandeId = $_POST['commande_id'];
    $newStatus = $_POST['new_status'];

    // Update the status in the database
    $dao->updateStatus($commandeId, $newStatus);
}
?>