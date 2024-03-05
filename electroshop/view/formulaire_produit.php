<?php
session_start();
include '../dao/dao_produit.php';
include '../model/categorie.php';
include '../dao/dao_categorie.php';

$dao = new DaoProduit();

$daoca = new DaoCategorie();

$categories = $daoca->ListeCategories();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/formulaire_produit.css" />
  <title>Formulaire de produit</title>
  <style>
    body {
      display: block;
    }

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
            <a class="nav-link " aria-current="page" href="liste_produits.php">Liste des produits </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="liste_commandes.php">Liste des commandes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="formulaire_produit.php">Ajouter Produit</a>
          </li>
          <div style="display:flex;justify-content:flex-end;">
            <a href="../controller/compte_controller.php?action=deconnexion" class="btn btn-danger">Déconnexion</a>
          </div>
        </ul>
      </div>
    </div>
  </nav>

  <h2><b>Ajouter Produit</b></h2>

  <div class="container my-3">
    <header><b>Créer un produit</b></header>
    <form action="../controller/produit_controller.php?action=creer" class="form" method="post" enctype="multipart/form-data">
      <div class="input-box">
        <label for="nom">Nom du produit</label>
        <input type="text" id="nom" name="nom" placeholder="Saisissez  le nom du produit" required />
      </div>

      <div class="input-box">
        <label for="description">Description du produit</label>
        <textarea name="description" id="description" rows="5" placeholder="Saisissez  la description du produit" required></textarea>
      </div>
      <div class="input-box">
        <label for="stock">Code du produit</label>
        <input type="text" id="code" name="code" required placeholder="Saisissez le code du produit" />
      </div>

      <div class=" input-box">
        <label for="prix">Prix ​​du produit</label>
        <input type="number" id="prix" name="prix" placeholder="Saisissez  le prix du produit" required />
      </div>

      <div class="input-box">
        <label for="stock">Quantité de produit</label>
        <input type="number" id="quantite" name="quantite" placeholder="Saisissez  la quantité de produit" required />
      </div>

      <div>
        <label for="categorie" style="width: 100%;margin-top: 20px;">Sélectionner la catégorie de produit :</label>
        <select id="categorie" name="categorie" class="categorie" style="padding: 0 15px; border: 1px solid #ddd;font-size: 1rem; margin-top: 8px;height: 50px;width: 100%;" required>
          <option value="">Choisissez un catégorie</option>
          <?php foreach ($categories as $categorie) : ?>
            <option style="padding: 0 15px; border: 1px solid #d81515;font-size: 1rem; width: 100%;" id="categorie" name="categorie"><?php echo $categorie['nom']; ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class=" image-field">
        <label for="image">Sélectionner l'image 1 du produit :</label>
        <input type="file" id="image" name="image" style="padding: 2px;" required />
      </div>
      <div class=" image-field">
        <label for="image1">Sélectionner l'image 2 du produit :</label>
        <input type="file" id="image1" name="image1" style="padding: 2px;" required />
      </div>

      <button class="btn btn-success" id="submit-btn" name="action" value="Créer">
        Créer
      </button>
    </form>
  </div>
</body>

</html>