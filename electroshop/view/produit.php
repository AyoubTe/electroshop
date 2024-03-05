<?php
    //session_start();
    //include '../model/produit.php';
    include '../dao/dao_produit.php';
    include '../model/compte.php';
    include '../dao/dao_compte.php';
    include '../model/categorie.php';
    include '../dao/dao_categorie.php';
    include '../model/commentaire.php';
    include '../dao/dao_commentaire.php';

    $dao = new DaoProduit();
    $daoco = new DaoCategorie();
    $daoc = new DaoCommentaire();
    $daocompte = new DaoCompte();
    $produit = $dao->findProduit($_GET['code']);
    $categorie = $daoco->findCategorie($produit->getIdc());
    $commentaires = $daoc->ListeCommentaires($produit->getId());
    session_start();
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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo '<title>'.$produit->getNom().'</title>';?>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    
    <style>
      .colonne-gauche {
        width: 30%;
        position: relative;
        padding: 15px;
        margin-left: 40px;
      }

      .colonne-droite {
        width: 40%;
        margin-top: 30px;
        padding: 15px;
        margin-left: 100px;
      }


      /* Colonne gauche */
      .colonne-gauche img {
        width: 100%;
        position: absolute;
        left: 0;
        top: 0;
      }

      .boutonpanier {
        display: inline-block;
        background-color: #7DC855;
        border-radius: 6px;
        font-size: 16px;
        color: #FFFFFF;
        text-decoration: none;
        padding: 12px 30px;
        transition: all .5s;
      }

      .boutonpanier:hover {
        background-color: #64af3d;
      }

      .boutonpanier-desactive {
        display: inline-block;
        background-color: #0c3601;
        border-radius: 6px;
        font-size: 16px;
        color: #FFFFFF;
        text-decoration: none;
        padding: 12px 30px;
      }

      .quantite {
        border: none;
        font-size: 20px;
        width: 50px;
      }
	  .star-group {
  display: grid;
  font-size: clamp(1.5em, 2vw, 8em);
  grid-auto-flow: column;
}

/* reset native input styles */
.star {
  -webkit-appearance: none;
  align-items: center;
  appearance: none;
  cursor: pointer;
  display: grid;
  font: inherit;
  height: 1.15em;
  justify-items: center;
  margin: 0;
  place-content: center;
  position: relative;
  width: 1.15em;
}

@media (prefers-reduced-motion: no-preference) {
  .star {
    transition: all 0.25s;
  }

  .star:before,
.star:after {
    transition: all 0.25s;
  }
}
.star:before,
.star:after {
  color: hsl(29, 90%, 65%);
  position: absolute;
}

.star:before {
  content: "☆";
}

.star:after {
  content: "✦";
  font-size: 25%;
  opacity: 0;
  right: 20%;
  top: 20%;
}

/* The checked radio button and each radio button preceding */
.star:checked:before,
.star:has(~ .star:checked):before {
  content: "★";
}

#two:checked:after,
.star:has(~ #two:checked):after {
  opacity: 1;
  right: 14%;
  top: 10%;
}

#three:checked:before,
.star:has(~ #three:checked):before {
  transform: var(--enlarge);
}

#three:checked:after,
.star:has(~ #three:checked):after {
  opacity: 1;
  right: 8%;
  top: 2%;
  transform: var(--enlarge);
}

#four:checked:before,
.star:has(~ #four:checked):before {
  text-shadow: 0.05em 0.033em 0px var(--star-secondary-color);
  transform: var(--enlarge);
}

    #four:checked:after,
    .star:has(~ #four:checked):after {
      opacity: 1;
      right: 8%;
      top: 2%;
      transform: var(--enlarge);
    }

    #five:checked:before,
    .star:has(~ #five:checked):before {
        text-shadow: 0.05em 0.033em 0px var(--star-secondary-color);
        transform: var(--enlarge);
    }

    #five:checked:after,
    .star:has(~ #five:checked):after {
      opacity: 1;
        right: 8%;
        text-shadow: 0.14em 0.075em 0px var(--star-secondary-color);
        top: 2%;
        transform: var(--enlarge);
    }

    .star-group:has(> #five:checked) #one {
      transform: rotate(-15deg);
    }
    .star-group:has(> #five:checked) #two {
      transform: translateY(-20%) rotate(-7.5deg);
    }
    .star-group:has(> #five:checked) #three {
        transform: translateY(-30%);
    }
    .star-group:has(> #five:checked) #four {
        transform: translateY(-20%) rotate(7.5deg);
    }
    .star-group:has(> #five:checked) #five {
        transform: rotate(15deg);
    }

    .star:focus {
        outline: none;
    }

    .star:focus-visible {
        border-radius: 8px;
        outline: 2px dashed var(--star-primary-color);
        outline-offset: 8px;
        transition: all 0s;
    }
    </style>

    <link rel="shortcut icon" href="../assets/images/logo/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/style-prefix.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <script type="text/javascript" src="../jquery/jquery-3.1.1.min.js"></script>

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
                <?php 
                  
                  if(isset($_SESSION['compte'])){
                    echo '<a href="../controller/compte_controller.php?action=deconnexion"><button type="button" >Se déconnecter</button></a>';
                  }
                  else{
                    echo '  <ul style="list-style-type: none; padding: 0;">
                              <li style="display: inline-block;" ><a href="../view/connexion.html" style="margin-right:2px; font-size: small;"><button type="button">Se connecter</button></a></li>
                              <li style="display: inline-block;"><a href="../view/inscription.php" style="font-size: small;"><button type="button" >Inscription</button></a></li>
                            </ul>';
                  }
                ?>
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
    <main style="max-width: 1200px; height: 700px; margin: 0 auto; padding: 15px; display: flex;">

        <div class="colonne-gauche">
          <?php echo '<img class="active" src="../assets/images/products/'.$produit->getCodeBare().'.jpg" alt="Image produit" style="width: 300px; height: 400px;">';?>
        </div>

        <!-- Colonne droite -->
        <div class="colonne-droite">

          <!-- Description du produit -->
          <div class="description-produit">
              <h1><?php echo $produit->getNom();?></h1>
              <h3><?php 
              if($produit->getStock()>0) {
                  echo 'En stock';
              } else {
                  echo 'Non disponible';
              }
              ?></h3>
              <p><b>Catégorie : <?php echo $categorie->getNom();?></b></p>
              <p><?php echo $produit->getDescription();?></p>
          </div>

          <!-- Prix du produit -->
          <div class="prix-produit">
              <h2><?php echo $produit->getPrix();?> DH</h2><br><br>
              <?php echo '<input type="number" id="quantite" name="quantite" class="quantite" min="0" max="'.$produit->getStock().'" step="1" value="1">';?>
              <br><br>
              <?php 
              if($produit->getStock()>0) {
                  echo '<a href="../controller/produit_controller.php?code='.$produit->getCodeBare().'&action=ajouter" class="boutonpanier">Ajouter au panier</a>';
              } else {
                  echo '<a href="#" class="boutonpanier-desactive" disabled>Indisponible</a>';
              }
              ?>
              
          </div>
        </div>
    </main>
	<!-- Commentaires -->
	<div class="container">
        <div class="row">
            <div class="col-sm-5 col-md-6 col-12 pb-4">
                <h1>Commentaires</h1>
                <?php
                  foreach($commentaires as $l) {
                    $commentaire = new Commentaire($l['idCommentaire'],$l['idCompte'],$l['idProduit'],$l['Message'],$l['Note']);
                    $c = $daocompte->TrouverCompte($commentaire->getIdcompte());
                    echo '<div class="comment mt-4 text-justify" style="border: 1px solid #727272;padding: 5px;border-radius:5px;">';
                    
                    echo      '<h4>'.$c->getNom().' '.$c->getPrenom().'</h4>';
                    for($i =0;$i<$commentaire->getNote();$i++)
                    {
                      echo '<i class="bi bi-star-fill" style="color: hsl(29, 90%, 65%)"></i>';
                    }
                    for($i =0;$i<5-$commentaire->getNote();$i++)
                    {
                      echo '<i class="bi bi-star" style="color: hsl(29, 90%, 65%)"></i>';
                    }

                    echo      '<p>'.$commentaire->getMessage().'</p>';
                    if($_SESSION['id']==$c->getId())
                    echo '<center><a href="../controller/commentaire_controller.php?action=supprimer&id='.$commentaire->getid().'&code='.$produit->getCodeBare().'" type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i> Supprimer</a></center>';
                    
                    echo    '</div>';
                  }
                  if ($commentaires==null)
                    echo "Ce produit n'a pas encore reçu de commentaires. Ajoutez-en une !";

                ?>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                <?php echo'<form action="../controller/commentaire_controller.php?action=publier&code='.$_GET['code'].'" method="post">'; ?>
                    <div class="form-group">
                        <label for="message">Evaluez le produit</label>
                        <div class="container">
	                        <div class="star-group">
		                        <input type="radio" class="star" id="one" value="one" name="note">
		                        <input type="radio" class="star" id="two" value="two" name="note">
		                        <input type="radio" class="star" id="three" value="three" name="note">
		                        <input type="radio" class="star" id="four" value="four" name="note">
		                        <input type="radio" class="star" id="five" value="five" name="note" checked>
	                        </div>
                        </div>
                        <textarea name="msg" id=""msg cols="30" rows="5" class="form-control" placeholder="Ecrivez un commentaire ici.."></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Publier" class="btn"/>
                    </div>
                </form>
            </div>
        </div>
            </div>
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
      function openNav() {
        document.getElementById("person-outline").style.width = "250px";
      }
      
      function closeNav() {
        document.getElementById("person-outline").style.width = "0";
      }
    </script>
  </body>

</html>
