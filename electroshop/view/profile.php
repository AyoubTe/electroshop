<?php
session_start();
if (!isset($_SESSION['compte'])) {
  header('location: connexion.html');
}
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

  <style>
    body {
      background-color: black;
    }

    td {
      text-align: center;
      padding: 5px;
    }
  </style>
  <title>Profile</title>

  <!--
    - 
  -->
  <link rel="shortcut icon" href="../assets/images/logo/logo.png" type="image/x-icon">

  <!--
    - custom css link
  -->
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
            <span class="count">0</span>
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
  <?php
  include "../dao/dao_commande.php";
  include "../dao/dao_compte.php";
  include "../model/compte.php";
  //include "../model/commande.php";

  $dao = new DaoCompte();
  $daoc = new DaoCommande();

  $client = $dao->trouverCompte($_SESSION['id']);
  $resultat = $daoc->findAll($_SESSION['id']);

  if (!empty($resultat)) {
    $commandes = "";
    foreach ($resultat as $row) {
      $commandes = $commandes . "<tr>
                                            <td>" . $row['dateCommande'] . "</td>
                                            <td>" . $row['datePaiement'] . "</td>
                                            <td>" . $row['modePaiement'] . "</td>
                                            <td>" . $row['total'] . "</td>
                                            <td>" . $row['statusCommande'] . "</td>
                                            <td>" . $client->getAdresse() . "</td>
                                          ";
      if ($row['statusCommande'] == 'Annulée') {
        $commandes = $commandes . '<td><a href="javascript:void(0);" onclick="return false;" class="btn btn-secondary">Pas d\'action</a></td>
                                            </tr>';
      } elseif ($daoc->estAnnulerCommande($row['idCommande'])) {
        $commandes = $commandes . '<td><a href="../controller/produit_controller.php?action=annuler&id=' . $row['idCommande'] . '" class="btn btn-primary">Annuler commande</a></td>
                                            </tr>';
      } else {
        $commandes = $commandes . '<td><a href="javascript:void(0);" onclick="return false;" class="btn btn-secondary">Pas d\'action</a></td>
                                            </tr>';
      }
    }
  } else {
    $commandes = '<tr><td style="text-align:center; "padding: 10px;" colspan="6">Pas d\'historique des commandes</td></tr>';
  }
  echo
  '
        <section style="background-color: #eee;">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <div>
                                    <img src="../assets/images/avatar.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px; margin-left: 85px;">
                                </div>
                                <h5 class="my-3" style="color: orange; font-size:35px;">' . $client->getPrenom() . ' ' . $client->getNom() . '</h5>
                                <p class="text-muted mb-4">' . $client->getAdresse() . '</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="color:red; font-size:20px;">Nom</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">' . $client->getPrenom() . ' ' . $client->getNom() . '</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="color:red; font-size:20px;">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">' . $client->getEmail() . '</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="color:red; font-size:20px;">Telephone</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">' . $client->getTel() . '</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="color:red; font-size:20px;">Adresse</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">' . $client->getAdresse() . '</p>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <a href="../view/modifier_profile.php" class="btn btn-primary">Modifier profile</a>
                            
                            <a href="#" class="btn btn-danger" onclick="confirmDelete()" with="100px">Supprimer profil</a>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-11">
                                    <div class="row">
                                        <p class="mb-4">Historique des commandes</p>
                                        
                                        <table border="1">
                                            <tr>
                                                <td style="padding: 5px;">Date commande</td>
                                                <td style="padding: 5px;">Date de paiement</td>
                                                <td style="padding: 5px;">Mode de paiement</td>
                                                <td style="padding: 5px;">Total</td>
                                                <td style="padding: 5px;">Satus commande</td>
                                                <td style="padding: 5px;">Adresse livraison</td>
                                                <td style="padding: 5px;">Action</td>
                                            </tr>
                                        ' . $commandes . '
                                        </table>
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>';
  ?>

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
            <h2 class="nav-title"></h2>
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
          Tous les droits réservés &copy; <a href="index.html">ElectroShop</a>.
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
    $(document).ready(function() {
      loadCompteInfo();
    });

    function loadCompteInfo() {
      var xhr = new XMLHttpRequest();

      xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
          document.getElementById("zone-identifiant").innerHTML = xhr.responseText;
        } else {
          console.log(xhr.responseText);
        }
      };

      xhr.open('GET', "../controller/compte_controller.php?action=loadInfo", true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.send(null);
    }

    setInterval(loadCompteInfo, 1500);
  </script>
  <script>
    function openNav() {
      document.getElementById("person-outline").style.width = "250px";
    }

    function closeNav() {
      document.getElementById("person-outline").style.width = "0";
    }
    function confirmDelete() {
      var result = confirm("Vous voulez vraiment supprimer votre compte?");
      if (result) {
        alert("Le compte est supprimer avec succés!!.");
        window.location.href ="../controller/compte_controller.php?action=supprimer";
      } else {
        alert("La supprission est annulée!!.");
      }
    }

  </script>
</body>



</html>