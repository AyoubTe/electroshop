<?php
//include '../model/produit.php';
include '../dao/dao_produit.php';
include '../model/categorie.php';
include '../dao/dao_categorie.php';

$dao = new DaoProduit();
$daoc = new DaoCategorie();
$produits = $dao->ListeProduits();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Admin Page</title>
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
                        <a class="nav-link active" aria-current="page" href="liste_produits.php">Liste des produits </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="liste_commandes.php">Liste des commandes</a>
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
    <h2><b>Liste des produits </b></h2>
    <div class="container py-2 ">
        <!-- <a href="./formulaire_produit.php" class="btn btn-primary">Ajouter Produit</a>
        <a style="margin-left:5px;" href="../controller/compte_controller.php?action=deconnexion" class="btn btn-primary">Deconnexion</a> -->
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Catégorie</th>
                    <th style="text-align:center;">Opérations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($produits as $produit) {
                    $idp = $produit['idCategorie'];
                ?>
                    <tr>
                        <td><?php echo '<img width="80px" src="../assets/images/products/' . $produit['codeBare'] . '.jpg">'; ?></td>
                        <td><?php echo $produit['nom'] ?></td>
                        <td><?php echo $produit['description'] ?></td>
                        <td><?php echo $produit['prix'] ?> MAD</td>
                        <td><?php echo $produit['stock'] ?></td>
                        <td><?php echo $daoc->NomCategorie($idp) ?></td>
                        <td style="text-align:center;">
                            <!-- <a href="./supprimer.php?id=<?php echo $produit['idProduit'] ?>" class="btn btn-primary btn-sm" style="padding-right:22px;margin-bottom:4px;">Modifier</a> -->
                            <a href="../controller/produit_controller.php?action=modifier&idP=<?php echo $produit['idProduit'] ?>" class="btn btn-success btn-sm" style="padding-right:22px;margin-bottom:4px;" onclick="return confirm('Voulez vous vraiment modifier le produit <?php echo $produit['nom'] ?> ?')">Modifier</a>
                            <a href="../controller/produit_controller.php?action=supprimer&idP=<?php echo $produit['idProduit'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Voulez vous vraiment supprimer le produit <?php echo $produit['nom'] ?> ?')">Supprimer</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <div>
        <?php
        $dao = new DaoProduit();
        if (isset($_GET['idP'])) {
            $id = $_GET['idP'];
            $dao->supprimerProduit($id);
        }
        ?>
    </div>
</body>

</html>