<?php
//session_start();
//include "../model/produit.php";
//include "../dao/dao_produit.php";
include "../model/panier.php";
include "../dao/dao-panier.php";
include "../model/compte.php";
include "../dao/dao_compte.php";
include "../model/categorie.php";
include "../dao/dao_categorie.php";
/*
    if (!isset($_SESSION['compte'])){
      header('location: connexion.html');
    }*/

$daop = new DaoPanier();

$dao = new DaoProduit();

$daoc = new DaoCategorie();

$produits = $daop->ProduitsPanier();
$nbr = count($produits);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- basic -->

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->


  <!-- bootstrap css -->
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="bootstrap/css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- font awesome -->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--  -->
  <!-- owl stylesheets -->
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap/css/owl.carousel.min.css">
  <link rel="stylesoeet" href="bootstrap/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

  <link rel="shortcut icon" href="../assets/images/logo/logo.png" type="image/x-icon">

  <link rel="stylesheet" href="../assets/css/style-prefix.css">

  <!--
        - google font link
    -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!--
      - js
    -->
  <script type="text/javascript" src="jquery/jquery-3.1.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous">
  </script>
  <title>Panier</title>
  <style>
    body {
      margin: 0 20px;
    }

    body table {
      border: 1px solid #ddd;

    }

    body table tbody tr {
      padding: 20px;
      margin: 30px;
    }

    .cart {
      min-height: 40vh;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 80px;
    }

    #cart_empty p {
      font-size: 2.5rem;
    }

    #cart_empty a {
      margin-top: 15px;
      margin-left: 145px;
    }
  </style>

</head>

<body>

  <!--
    - HEADER
  -->

  <header>

    <div class="header-top">

      <div class="container">

        <ul class="header-social-container">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

        <div class="header-alert-news">
          <p>
            <b>Livraison gratuite</b>
            cette semaine - à partir de 550 DH d'achats
          </p>
        </div>

        <div class="header-top-actions">
          <div id="zone-identifiant">
            <a href="../controller/compte_controller.php?action=deconnexion"><button type="button" class="btn btn-outline-danger">Se déconnecter</button></a>
          </div>
          <select name="currency">

            <option value="mad">MAD DH</option>
            <option value="usd">USD &dollar;</option>
            <option value="eur">EUR &euro;</option>

          </select>

          <select name="language">

            <option value="fr">Fran&ccedil;ais</option>
            <option value="ar">Arabic</option>
            <option value="en-US">English</option>
            <option value="es-ES">Espa&ntilde;ol</option>

          </select>

        </div>

      </div>

    </div>

    <div class="header-main">

      <div class="container">

        <a href="../index.php" class="header-logo">
          <img src="../assets/images/logo/logo.png" alt="electroshop" width="120" height="36">
        </a>

        <div class="header-search-container">
          <form action="../view/recherche.php" method="get">
            <input type="search" name="search" class="search-field" placeholder="Entrer le nom de votre produit...">
            <button class="search-btn" type="submit">
              <ion-icon name="search-outline"></ion-icon>
            </button>
          </form>
        </div>

        <div class="header-user-actions">
          <!-- Le profile -->
          <button class="action-btn">
            <a href="profile.php" style="text-decoration: none;"><ion-icon name="person-outline"></ion-icon></a>
          </button>

          <!-- Les favouris -->
          <button class="action-btn">
            <a href="favoris.html" style="text-decoration: none;"><ion-icon name="heart-outline"></ion-icon></a>
            <span class="count">0</span>
          </button>

          <!-- Panier -->
          <button class="action-btn">
            <a href="panier.php" style="text-decoration: none;"><ion-icon name="bag-handle-outline"></ion-icon></a>
            <span class="count">
              <?php echo $nbr ?> </span>
          </button>

        </div>

      </div>

    </div>

    <nav class="desktop-navigation-menu">

      <div class="container">

        <ul class="desktop-menu-category-list">

          <li class="menu-category">
            <a href="../index.php" class="menu-title">Accueil</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Catégories</a>

            <div class="dropdown-panel">

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Accessories</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Montre intelligente</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Les cables</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Camera</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Les écoteurs</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Casque de musique</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">
                    <img src="./assets/images/electronics-banner-1.jpg" alt="headphone collection" width="250" height="119">
                  </a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Homme</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Tendouse</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Perceuse</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Rasoir</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Appareils de bricolage</a>
                </li>

                <li class="panel-list-item">
                  <a href="#"></a>
                </li>

                <li class="panel-list-item">
                  <a href="#">
                    <img src="./assets/images/mens-banner.jpg" alt="men's fashion" width="250" height="119">
                  </a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Femme</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Sèche-cheveux</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Fer à friser</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Épilateur</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Machine à coudre</a>
                </li>

                <li class="panel-list-item">
                  <a href="#"></a>
                </li>

                <li class="panel-list-item">
                  <a href="#">
                    <img src="./assets/images/womens-banner.jpg" alt="women's fashion" width="250" height="119">
                  </a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Informatique</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">PC Bureauh</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Pc portable</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Clavier</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Souris</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Microphone</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">
                    <img src="./assets/images/electronics-banner-2.jpg" alt="mouse collection" width="250" height="119">
                  </a>
                </li>

              </ul>

            </div>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Homme</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Tendouse</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Perceuse</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Rasoir</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Appareils bricolage</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Femme</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Sèche-cheveux</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Fer à friser</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Épilateur</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Machine à coudre</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Maison</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Machines à laver </a>
              </li>

              <li class="dropdown-item">
                <a href="#">Aspirateurs</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Téléviseurs</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Fer à repasser</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Accessories de cuisine </a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Lave-vaisselle pose libre</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Plaque de cuisson</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Presse-argumes</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Moulin</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Blog</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Offres spéciales</a>
          </li>

        </ul>

      </div>

    </nav>

    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="bag-handle-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn">
        <ion-icon name="home-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="heart-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="grid-outline"></ion-icon>
      </button>

    </div>

    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

      <div class="menu-top">
        <h2 class="menu-title">Menu</h2>

        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>

      <ul class="mobile-menu-category-list">

        <li class="menu-category">
          <a href="#" class="menu-title">Accueil</a>
        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Homme</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Tondeuse</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Perceuse</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Rasoir</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Appareils de bricolage</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Femme</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Sèche-cheveux</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Fer à friser</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Épilateur</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Machine à coudre</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Maison</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Machines à laver</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Aspirateurs</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Téléviseurs</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Fer à repasser</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Accessories de cuisine</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Lave pose libre</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Plaque de cuisson</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Presse-argumes</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Moulin</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Blog</a>
        </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Offres spéciales</a>
        </li>

      </ul>

      <div class="menu-bottom">

        <ul class="menu-category-list">

          <li class="menu-category">

            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Langage</p>

              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Fren&ccedil;h</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">English</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Espa&ntilde;ol</a>
              </li>
            </ul>

          </li>

          <li class="menu-category">
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Devise</p>
              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>
              <li class="submenu-category">
                <a href="#" class="submenu-title">MAD &#x20A3;</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">USD &dollar;</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">EUR &euro;</a>
              </li>
            </ul>
          </li>

        </ul>

        <ul class="menu-social-container">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </nav>

  </header>

  <body>
    <div class="container">
      <h2 style="font-size:1.5rem;"><strong>Panier</strong></h2>
      <br>
      <?php
      if (empty($produits)) { ?>
        <div class="cart">
          <div id="cart_empty">
            <p style="color:black;"><strong>Votre panier est vide</strong></p>
            <a href="../index.html" class="btn btn-primary">Continuez à acheter</a>
          </div>
        </div>
      <?php
      } else {
      ?> <table class="table">
          <thead>
            <tr>
              <th>Image</th>
              <th>Nom</th>
              <th>Catégorie</th>
              <th>Quantité</th>
              <th>Prix</th>
              <th>Total</th>
            </tr>
          </thead>
          <?php

          $total = 0;
          foreach ($produits as $produit) {
            $result = $daop->ProduitQuantite($produit['idProduit']);
            $totalProduit = $produit['prix'] * $result['quantite'];
            $total += $totalProduit;
          ?>

            <tbody>
              <tr>
                <th scope="row">
                  <?php echo '<img width="100px" src="../assets/images/products/' . $produit['codeBare'] . '.jpg">'; ?>
                </th>
                <th width="500px"><?php echo $produit['nom']; ?></th>
                <td><?php echo $daoc->NomCategorie($produit['idCategorie']); ?></td>
                <td>
                  <div style="text-align:center;" class="counter d-flex">
                    <form action="../controller/produit_controller.php?action=modify&idP=<?php echo $produit['idProduit'] ?>" method="post" class="form d-flex" enctype="multipart/form-data">
                      <input type="hidden" name="idP" id="idP" value="<?php echo $produit['idProduit'] ?>">
                      <button onclick="return false;" class=" btn btn-primary mx-2 counter-minus">-</button>
                      <input class="form-control" min="1" style="width:100px;" type="number" name="qty" id="qty" max="10000" value="<?php echo $result['quantite'] ?>">
                      <button onclick="return false;" class="btn btn-primary mx-2 counter-plus">+</button>
                      <button class=" btn btn-success" id="submit-btn" name="action" value="" style="border:2px solid white; border-radius: 5px;padding:0 5px;padding-top:7px;background-color: green;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white" class="bi bi-pencil" viewBox="0 0 16 16">
                          <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325" />
                        </svg>
                      </button>
                    </form>
                    <a class="d-flex" href=" ../controller/produit_controller.php?action=delete&idP=<?php echo $produit['idProduit'] ?>" style="border:2px solid white; border-radius: 5px;padding:0 5px;padding-top:7px;background-color: red;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white" class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                      </svg>
                    </a>


                    <!-- <input class="btn btn-danger" type="submit" value="bi bi-trash-fill" name="supprimer"> -->
                  </div>
                </td>
                <td><?php echo $produit['prix']; ?> DH</td>
                <td><?php echo $totalProduit; ?> DH</td>
                <td>

                </td>
              </tr>
            </tbody>
          <?php
          }
          ?>

          <tfoot>
            <tr>
              <td colspan="5" align="right"><strong>Total :</strong></td>
              <td><?php echo $total; ?> DH</td>
              <td></td>
            </tr>
            <tr>
              <td colspan="1" align="">
                <a href=" ../index.html" class="btn btn-primary">Retour</a>
              <td colspan="6" align="right">
                <?php echo '<a href="../controller/produit_controller.php?action=passer&total=' . $total . '" class="btn btn-success"'; ?> id="order">Passer Commande</a>
              </td>
            </tr>
          </tfoot>


        </table>

      <?php
      }
      ?>
    </div>


    <script>
      $(' .counter-plus').click(function(e) {
        let qty = $(e.currentTarget).siblings('#qty');
        let qtyValue = parseInt(qty.val()) + 1;
        qty.val(qtyValue);
      });
      $('.counter-minus').click(function(e) {
        let qty = $(e.currentTarget).siblings('#qty');
        let qtyValue = parseInt(qty.val()) - 1;
        if (qtyValue <= 0) {
          qtyValue = 1;
        }
        qty.val(qtyValue);
      });
    </script>



  </body>

  <!--
    - FOOTER
  -->

  <footer>

    <div class="footer-nav">

      <div class="container">

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Catégories populaires</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Informatique</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Électronique</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Maison</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Cuisine</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Montres</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Les produits</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Les prix baissent</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Nouveaux produits</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Les meilleures ventes</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contactez-nous</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Plan du site</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Notre compagnie</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Livraison</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Mention légale</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Termes et conditions</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">À propos de nous</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Paiement sécurisé</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Prestations de service</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Les prix baissent</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Nouveaux produits</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Les meilleures ventes</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contactez-nous</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Plan du site</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Contact</h2>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <address class="content">
              Km 7 Rte El jadida
              Casablanca, Casablanca - Settate, 20100, MA
            </address>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>

            <a href="tel:+607936-8058" class="footer-nav-link">05 567 458 001</a>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <a href="mailto:example@gmail.com" class="footer-nav-link">support@electroshop.com</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Suivez-nous</h2>
          </li>

          <li>
            <ul class="social-link">

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>

            </ul>
          </li>

        </ul>

      </div>

    </div>

    <div class="footer-bottom">

      <div class="container">

        <img src="../assets/images/payment.png" alt="payment method" class="payment-img">

        <p class="copyright">
          Tous les droits réservés 2024 &copy; <a href="index.html">ElectroShop</a>.
        </p>

      </div>

    </div>

  </footer>


  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script>
    function openNav() {
      document.getElementById("person-outline").style.width = "250px";
    }

    function closeNav() {
      document.getElementById("person-outline").style.width = "0";
    }
  </script>
</body>

</html>