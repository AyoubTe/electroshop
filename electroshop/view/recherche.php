<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElectroShop</title>

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
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            /* Pour que le contenu s'étende sur toute la hauteur de la fenêtre */
            margin: 0;
        }

        main {
            flex: 1;
            /* Le contenu principal prend toute la hauteur disponible */
        }

        footer {
            margin-top: auto;
            /* Place le footer en bas de la page */
        }
        .search-results-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .product-card {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px;
            width: 200px;
            text-align: center;
        }

        .product-card img {
            max-width: 100%;
            height: auto;
        }

        .price {
            font-weight: bold;
            color: #007bff;
        }

        .view-details-btn {
            display: inline-block;
            padding: 5px 10px;
            margin-top: 10px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        @media (max-width: 768px) {
            .search-results-container {
                justify-content: center;
            }

            .product-card {
                width: 100%;
            }
        }

    </style>
    <!--
      - js
    -->
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
                        <a href="../view/profile.php" style="text-decoration: none;"><ion-icon name="person-outline"></ion-icon></a>
                    </button>

                    <!-- Les favouris -->
                    <button class="action-btn">
                        <a href="#" style="text-decoration: none;"><ion-icon name="heart-outline"></ion-icon></a>
                        <span class="count">0</span>
                    </button>

                    <!-- Panier -->
                    <button class="action-btn">
                        <a href="../view/panier.php" style="text-decoration: none;"><ion-icon name="bag-handle-outline"></ion-icon></a>
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
                                        <img src="../assets/images/electronics-banner-1.jpg" alt="headphone collection" width="250" height="119">
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
                                        <img src="../assets/images/mens-banner.jpg" alt="men's fashion" width="250" height="119">
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
                                        <img src="../assets/images/womens-banner.jpg" alt="women's fashion" width="250" height="119">
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
                                        <img src="../assets/images/electronics-banner-2.jpg" alt="mouse collection" width="250" height="119">
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
                    <a href="#" class="menu-title">Offres spéciales</a>
                </li>

                <li class="menu-category">
                    <a href="#" class="menu-title">Blog</a>
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
    <!--
      - PRODUCT
    -->

    <div class="product-container">

        <div class="container">

            <!-- Les Catégories-->

            <div class="sidebar  has-scrollbar" data-mobile-menu>

                <div class="sidebar-category">

                    <div class="sidebar-top">
                        <h2 class="sidebar-title">Chercher par catégorie :</h2>

                        <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                            <ion-icon name="close-outline"></ion-icon>
                        </button>
                    </div>
                    
                    <ul class="sidebar-menu-category-list">

                        <li class="sidebar-menu-category">

                            <div class="sidebar-accordion-menu">

                                <div class="menu-title-flex">
                                    <img src="../assets/images/icons/bricolage.jpg" alt="clothes" width="20" height="20" class="menu-title-img">

                                    <p class="menu-title">Bricolage</p>
                                </div>

                                <div style="width:10;float:right;">
                                <?php
                                    if (isset($_GET['br']))
                                    {
                                        echo '<input type="checkbox" name="br" checked>';
                                    } else {
                                        echo '<input type="checkbox" name="br"/>';
                                    }
                                ?>
                                </div>

                            </div>
                        </li>

                        <li class="sidebar-menu-category" width="100%">
                            <div class="sidebar-accordion-menu">
                                <div class="menu-title-flex">
                                    <img src="../assets/images/icons/cuisine.jpg" alt="cuisine" class="menu-title-img" width="20" height="20">

                                    <p class="menu-title">Cuisine</p>
                                </div>
                                <div style="width:10;float:right;">
                                <?php
                                    if (isset($_GET['cu']))
                                    {
                                        echo '<input type="checkbox" name="cu" checked>';
                                    } else {
                                        echo '<input type="checkbox" name="cu"/>';
                                    }
                                ?>
                                </div>
                            </div>
                        </li>

                        <li class="sidebar-menu-category">

                            <div class="sidebar-accordion-menu">

                                <div class="menu-title-flex">
                                    <img src="../assets/images/icons/info.avif" alt="Informatique" class="menu-title-img" width="20" height="20">

                                    <p class="menu-title">Informatique</p>
                                </div>

                                <div style="width:10;float:right;">
                                <?php
                                    if (isset($_GET['in']))
                                    {
                                        echo '<input type="checkbox" name="in" checked>';
                                    } else {
                                        echo '<input type="checkbox" name="in"/>';
                                    }
                                ?>
                                </div>

                            </div>

                        </li>

                        <li class="sidebar-menu-category">

                            <div class="sidebar-accordion-menu">

                                <div class="menu-title-flex">
                                    <img src="../assets/images/icons/accessoires.jpg" alt="accessoires" class="menu-title-img" width="20" height="20">

                                    <p class="menu-title">Accessoires</p>
                                </div>

                                <div style="width:10;float:right;">
                                <?php
                                    if (isset($_GET['ac']))
                                    {
                                        echo '<input type="checkbox" name="ac" checked>';
                                    } else {
                                        echo '<input type="checkbox" name="ac"/>';
                                    }
                                ?>
                                </div>

                            </div>

                        </li>

                        <li class="sidebar-menu-category">

                            <div class="sidebar-accordion-menu">

                                <div class="menu-title-flex">
                                    <img src="../assets/images/icons/homme.avif" alt="homme" class="menu-title-img" width="20" height="20">

                                    <p class="menu-title">Homme</p>
                                </div>

                                <div style="width:10;float:right;">
                                <?php
                                    if (isset($_GET['ho']))
                                    {
                                        echo '<input type="checkbox" name="ho" checked>';
                                    } else {
                                        echo '<input type="checkbox" name="ho"/>';
                                    }
                                ?>
                                </div>

                            </div>

                        </li>

                        <li class="sidebar-menu-category">

                            <div class="sidebar-accordion-menu">

                                <div class="menu-title-flex">
                                    <img src="../assets/images/icons/femme.jpg" alt="femme" class="menu-title-img" width="20" height="20">

                                    <p class="menu-title">Femme</p>
                                </div>

                                <div style="width:10;float:right;">
                                <?php
                                    if (isset($_GET['fe']))
                                    {
                                        echo '<input type="checkbox" name="fe" checked>';
                                    } else {
                                        echo '<input type="checkbox" name="fe"/>';
                                    }
                                ?>
                                </div>

                            </div>

                        </li>

                        <li class="sidebar-menu-category">

                            <div class="sidebar-accordion-menu">

                                <div class="menu-title-flex">
                                    <img src="../assets/images/icons/climatisation.avif" alt="climatisation" class="menu-title-img" width="20" height="20">

                                    <p class="menu-title">Climatisation</p>
                                </div>

                                <div style="width:10;float:right;">
                                <?php
                                    if (isset($_GET['cl']))
                                    {
                                        echo '<input type="checkbox" name="cl" checked>';
                                    } else {
                                        echo '<input type="checkbox" name="cl"/>';
                                    }
                                ?>
                                </div>

                            </div>

                        </li>

                        <li class="sidebar-menu-category">

                            <div class="sidebar-accordion-menu">

                                <div class="menu-title-flex">
                                    <img src="../assets/images/icons/maison.jpg" alt="climatisation" class="menu-title-img" width="20" height="20">

                                    <p class="menu-title">Maison</p>
                                </div>

                                <div style="width:10;float:right;">
                                <?php
                                    if (isset($_GET['ma']))
                                    {
                                        echo '<input type="checkbox" name="ma" checked>';
                                    } else {
                                        echo '<input type="checkbox" name="ma"/>';
                                    }
                                ?>
                                </div>

                            </div>

                        </li>

                        <li class="sidebar-menu-category">

                            <div class="sidebar-accordion-menu">

                                <div class="menu-title-flex">
                                    <img src="../assets/images/icons/Téléviseurs.jpg" alt="climatisation" class="menu-title-img" width="20" height="20">

                                    <p class="menu-title">Téléviseurs</p>
                                </div>

                                <div style="width:10;float:right;">
                                <?php
                                    if (isset($_GET['te']))
                                    {
                                        echo '<input type="checkbox" name="te" checked>';
                                    } else {
                                        echo '<input type="checkbox" name="te"/>';
                                    }
                                ?>
                                </div>

                            </div>

                        </li>

                        <li class="sidebar-menu-category">

                            <div class="sidebar-accordion-menu">

                                <div class="menu-title-flex">
                                    <img src="../assets/images/icons/watch.png" alt="climatisation" class="menu-title-img" width="20" height="20">

                                    <p class="menu-title">Montres</p>
                                </div>

                                <div style="width:10;float:right;">
                                <?php
                                    if (isset($_GET['mo']))
                                    {
                                        echo '<input type="checkbox" name="mo" checked>';
                                    } else {
                                        echo '<input type="checkbox" name="mo"/>';
                                    }
                                ?>
                                </div>

                            </div>

                        </li>

                    </ul>
                    <input type="submit" value="Filtrer" class="view-details-btn"/>
                    <?php
                        if(!isset($_GET['br']) && !isset($_GET['cu']) && !isset($_GET['in']) && !isset($_GET['ac']) && !isset($_GET['ho']) &&!isset($_GET['fe']) && !isset($_GET['cl']) && !isset($_GET['ma']) && !isset($_GET['te']) && !isset($_GET['mo'])) {
                            echo "<br>";
                            echo '<p class="menu-title">Aucun filtre n`est activé pour le moment.</p>';
                            $filtre=false;
                        } else {
                            $filtre=true;
                        }
                    ?>
                </div>
                <br><br><br><br><br><br>
                <!-- Les mieux vendus -->
                <div class="product-showcase">

                    <h3 class="showcase-heading">Mieux vendus</h3>

                    <div class="showcase-wrapper">

                        <div class="showcase-container">

                            <div class="showcase">

                                <a href="#" class="showcase-img-box">
                                    <img src="../assets/images/products/1.jpg" alt="Aspirateur AS23 L13" width="75" height="75" class="showcase-img">
                                </a>

                                <div class="showcase-content">

                                    <a href="#">
                                        <h4 class="showcase-title">Aspirateur AS23 L13</h4>
                                    </a>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <del>456.00 DH</del>
                                        <p class="price">420.99 DH</p>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <a href="#" class="showcase-img-box">
                                    <img src="../assets/images/products/2.jpg" alt="Lave-vaisselle pose libre M19F" class="showcase-img" width="75" height="75">
                                </a>

                                <div class="showcase-content">

                                    <a href="#">
                                        <h4 class="showcase-title">Lave-vaisselle pose libre M19F</h4>
                                    </a>
                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-half-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <del>3179.90 DH</del>
                                        <p class="price">2999.94 DH</p>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <a href="#" class="showcase-img-box">
                                    <img src="../assets/images/products/3.jpg" alt="Machine à laver à hubolot SK78 " class="showcase-img" width="75" height="75">
                                </a>

                                <div class="showcase-content">

                                    <a href="#">
                                        <h4 class="showcase-title">Machine à laver à hubolot SK78 </h4>
                                    </a>
                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-half-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <del>4780.40 DH</del>
                                        <p class="price">4559.90 DH</p>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- Les résultats de la recherche-->
            <div class="product-box">
            <?php
                include '../dao/dao_produit.php';
                $search = $_GET['search'];
                $daop = new DaoProduit();
                $exist = false;

                $resultatRecherches = $daop->recherche($search);
                
                if (isset($resultatRecherches)) {
                    $produits = '<div class="search-results-container">';
                    foreach ($resultatRecherches as $produit) {
                        $flag=true;
                        if($produit['idCategorie']==1 && !isset($_GET['in']))
                        {
                            $flag=false;
                        }
                        if($produit['idCategorie']==2 && !isset($_GET['ho']))
                        {
                            $flag=false;
                        }
                        if($produit['idCategorie']==3 && !isset($_GET['fe']))
                        {
                            $flag=false;
                        }
                        if($produit['idCategorie']==4 && !isset($_GET['ma']))
                        {
                            $flag=false;
                        }
                        if($produit['idCategorie']==5 && !isset($_GET['br']))
                        {
                            $flag=false;
                        }
                        if($produit['idCategorie']==6 && !isset($_GET['cu']))
                        {
                            $flag=false;
                        }
                        if($produit['idCategorie']==7 && !isset($_GET['ac']))
                        {
                            $flag=false;
                        }
                        if($produit['idCategorie']==8 && !isset($_GET['cl']))
                        {
                            $flag=false;
                        }
                        if($produit['idCategorie']==9 && !isset($_GET['te']))
                        {
                            $flag=false;
                        }
                        if($produit['idCategorie']==10 && !isset($_GET['mo']))
                        {
                            $flag=false;
                        }

                        if($flag || !$filtre) {
                        $produits .=  '
                                        <div class="product-card">
                                        <img src="../assets/images/products/'.$produit['codeBare'].'.jpg" width="200px"  height= "200px" alt="'.$produit['nom'].'">
                                        <h3>'.$produit['nom'].'</h3>
                                        <p>'.$produit['description'].'</p>
                                <span class="price">'.$produit['prix'].'DH</span>
                                <a href="../view/produit.php?code='.$produit['codeBare'].'" class="view-details-btn">Voir détails</a>
                            </div>
                        ';
                        $exist= true;
                        }

                    }
                    if (!$exist)
                    {
                        $produits .= "<h1> Il n'existe pas de produits correspondants à votre requête et votre filtre choisi. </h1>";
                    }
                    $produits .= '</div>';
                    
                }
                else{
                    $produits = '<div class="search-results-container">
                                <h1> Il n existe pas de produits correspondants à votre requête. </h1>
                            </div>';
                }

                if($search!="") {
                    echo 'Résultats pour "'.$search.'" :<br>';
                } else {
                    echo 'Résultats pour le filtre sélectionné :<br>';
                }
                echo $produits;
            ?>
            </div>
        </div>
        <!--
                - FOOTER
            -->
        <br>
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
        </form>

        <!--
    - custom js link
  -->
        <script src="./assets/js/script.js"></script>

        <!--
    - ionicon link
  -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
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

        xhr.open('GET', "controller/compte_controller.php?action=loadviewInfo", true);
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
</script>

</html>