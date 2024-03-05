<?php
session_start();
include '../dao/dao_produit.php';
include '../model/categorie.php';
include '../dao/dao_categorie.php';

$dao = new DaoProduit();
$daoca = new DaoCategorie();

$categories = $daoca->ListeCategories();
$id = $_GET['idP'];
$produit = $dao->produit($id);





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/formulaire_produit.css" />
    <title>Formulaire de produit</title>
</head>

<body>
    <section class="container">
        <header><b>Modifier le produit</b></header>
        <form action="../controller/produit_controller.php?action=update&idP=<?php echo $produit['idProduit'] ?>" class="form" method="post" enctype="multipart/form-data">
            <div class="input-box">
                <label for="nom">Nom du produit</label>
                <input type="text" id="nom" name="nom" placeholder="Entrer le nom du produit" value="<?php echo $produit['nom'] ?>" required />
            </div>

            <div class="input-box">
                <label for="description">Description du produit</label>
                <textarea name="description" id="description" rows="5" placeholder="Entrer la description du produit" required><?php echo $produit['description'] ?></textarea>
            </div>
            <div class=" input-box">
                <label for="stock">Code produit</label>
                <input type="text" id="code" name="code" value="<?php echo $produit['codeBare'] ?>" required />
            </div>

            <div class="input-box">
                <label for="prix">Prix ​​du produit</label>
                <input type="number" id="prix" name="prix" value="<?php echo $produit['prix'] ?>" required />
            </div>

            <div class="input-box">
                <label for="stock">Quantité de produit</label>
                <input type="number" id="quantite" name="quantite" value="<?php echo $produit['stock'] ?>" required />
            </div>

            <div>
                <label for="categorie" style="width: 100%;margin-top: 20px;">Sélectionner la catégorie de produit :</label>
                <select id="categorie" name="categorie" class="categorie" style="padding: 0 15px; border: 1px solid #ddd;font-size: 1rem; margin-top: 8px;height: 50px;width: 100%;" value="<?php echo $daoca->NomCategorie($produit['idCategorie']); ?>" required>
                    <option value="">Choisissez un catégorie</option>
                    <?php foreach ($categories as $categorie) {
                        $selected = $produit['idCategorie'] == $categorie['idCategorie'] ? ' selected' : '';
                        echo "<option $selected style='padding: 0 15px; border: 1px solid #d81515;font-size: 1rem; width: 100%;' id='categorie' name='categorie' value='" . $categorie['idCategorie'] . "'>$categorie[1]</option>";
                    }
                    ?>
                </select>
            </div>

            <div class=" image-field">
                <label for="image">Sélectionner l' image 1 du produit :</label>
                <input type="file" id="image" accept=".jpg,.jpeg,.png" name="image" style="padding: 2px;" value='<?php echo $produit['codeBare'] . '.jpg' ?>' required />
            </div>
            <div class=" image-field">
                <label for="image">Sélectionner l' image 2 du produit :</label>
                <input type="file" id="image1" accept=".jpg,.jpeg,.png" name="image1" style="padding: 2px;" value='<?php echo $produit['codeBare'] . '.jpg' ?>' required />
            </div>

            <button class=" btn btn-success" id="submit-btn" name="action" value="modifier">
                Modifier
            </button>
        </form>
    </section>
</body>

</html>