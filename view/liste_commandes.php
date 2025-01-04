<?php
include '../dao/dao_produit.php';
include '../model/categorie.php';
include '../dao/dao_categorie.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Liste des commandes</title>
    <style>
        h2 {
            font-size: 1.8rem;
            padding-left: 67px;
            padding-top: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="../assets/images/logo/logo.png" alt="electroshop" width="120" height="36">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="liste_produits.php">Liste des produits </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="liste_commandes.php">Liste des commandes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="formulaire_produit.php">Ajouter Produit</a>
                    </li>
                    <div style="display:flex;justify-content:flex-end;">
                        <a href="../controller/compte_controller.php?action=deconnexion" class="btn btn-danger">Déconnexion</a>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
    <h2><b>Liste des commandes </b></h2>
    <div class="container py-2">

    <table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">Client</th>
            <th scope="col">Total</th>
            <th scope="col">Status</th>
            <th scope="col">Date</th>
        </tr>
    </thead>
    <tbody>
            <?php
            include "../dao/dao_commande.php";
            $dao = new DaoCommande();

            $commandes = $dao->getAllCommandesWithClientInfo();

            if (count($commandes) > 0) {
                foreach ($commandes as $commande) {
                    echo '<tr>';
                    echo '<td>' . $commande['nom'] . ' ' . $commande['prenom'] . '</td>';
                    echo '<td>' . $commande['total'] . '</td>';
                    echo '<td>';
                    // Dropdown list for status
                    echo '<select class="status-dropdown" data-commande-id="' . $commande['idCommande'] . '">';
                    $statusOptions = array('En attente', 'Traitée', 'Livrée', 'Annulée');
                    foreach ($statusOptions as $option) {
                        $selected = ($commande['statusCommande'] == $option) ? 'selected' : '';
                        echo '<option value="' . $option . '" ' . $selected . '>' . $option . '</option>';
                    }
                    echo '</select>';
                    echo '</td>';
                    echo '<td>' . $commande['datePaiement'] . '</td>';
                    echo '</tr>';
                }
            }
            ?>
        </tbody>
    </table>
    </div>

</body>
<script>
    // Add event listener for status change
    document.querySelectorAll('.status-dropdown').forEach(function (dropdown) {
        dropdown.addEventListener('change', function () {
            var commandeId = this.getAttribute('data-commande-id');
            var newStatus = this.value;
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'update_status.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    console.log('Status updated successfully');
                }
            };
            xhr.send('commande_id=' + commandeId + '&new_status=' + newStatus);
        });
    });
</script>

</html>