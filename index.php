

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
  <link rel="shortcut icon" href="./assets/images/logo/logo.png" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style-prefix.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

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

        <a href="index.php" class="header-logo">
          <img src="./assets/images/logo/logo.png" alt="electroshop" width="120" height="36">
        </a>

        <div class="header-search-container">
          <form action="./view/recherche.php" method="get">
            <input type="search" name="search" class="search-field" placeholder="Entrer le nom de votre produit...">
            <button class="search-btn" type="submit">
              <ion-icon name="search-outline"></ion-icon>
            </button>
          </form>
        </div>
        

        <div class="header-user-actions">
          <!-- Le profile -->
          <button class="action-btn">
            <a href="view/profile.php" style="text-decoration: none;"><ion-icon name="person-outline"></ion-icon></a>
          </button>

          <!-- Les favouris -->
          <button class="action-btn">
            <a href="#" style="text-decoration: none;"><ion-icon name="heart-outline"></ion-icon></a>
            <span class="count">0</span>
          </button>

          <!-- Panier -->
          <button class="action-btn">
            <a href="view/panier.php" style="text-decoration: none;"><ion-icon name="bag-handle-outline"></ion-icon></a>
            <span class="count">0
            </span>
          </button>

        </div>

      </div>

    </div>

    <nav class="desktop-navigation-menu">

      <div class="container">

        <ul class="desktop-menu-category-list">

          <li class="menu-category">
            <a href="index.php" class="menu-title">Accueil</a>
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
                    <img src="./assets/images/electronics-banner-1.jpg" alt="headphone collection" width="250"
                      height="119">
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
    - MAIN
  -->

  <main>

    <!--
      - BANNER
    -->

    <div class="banner">

      <div class="container">

        <div class="slider-container has-scrollbar">
          <div class="slider-item">

            <img src="./assets/images/banner-2.jpg.png" alt="modern sunglasses" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Accessoires tendance</p>

              <h2 class="banner-title">Montres intelligentes modernes</h2>

              <p class="banner-text">
                à partir de <b>150</b>.00 DH
              </p>

              <a href="#" class="banner-btn">Achetez maintenant</a>

            </div>

          </div>

          <div class="slider-item">

            <img src="./assets/images/banner-1.png" alt="Les dernières produits des femmes" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Article tendance</p>

              <h2 class="banner-title">Soldes derniers articles informatiques </h2>

              <p class="banner-text">
                Commence à partir de <b>200</b>.00 DH
              </p>

              <a href="#" class="banner-btn">Achetez maintenant</a>

            </div>
          </div>
        </div>

      </div>

    </div>



    <!--
      - CATEGORY
    -->

    <div class="category">

      <div class="container">

        <div class="category-item-container has-scrollbar">

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/maison.jpg" alt="maison" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Maison</h3>

                <p class="category-item-amount">(53)</p>
              </div>

              <a href="view/recherche.php?search=&ma=on" class="category-btn">Affichez tous</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/Téléviseurs.jpg" alt="Téléviseurs.jpg" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Téléviseurs</h3>

                <p class="category-item-amount">(28)</p>
              </div>

              <a href="view/recherche.php?search=&te=on" class="category-btn">Affichez tous</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/accessoires.jpg" alt="Accessoires" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Accessoires</h3>

                <p class="category-item-amount">(68)</p>
              </div>

              <a href="view/recherche.php?search=&ac=on" class="category-btn">Affichez tous</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/homme.avif" alt="Homme" width="30" height="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Homme</h3>

                <p class="category-item-amount">(14)</p>
              </div>

              <a href="view/recherche.php?search=&ho=on" class="category-btn">Affichez tous</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/cuisine.jpg" alt="Cuisine" width="30" height="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Cuisine</h3>

                <p class="category-item-amount">(62)</p>
              </div>

              <a href="view/recherche.php?search=&cu=on" class="category-btn">Affichez tous</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/bricolage.jpg" alt="bricolage" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Bricolage</h3>

                <p class="category-item-amount">(11)</p>
              </div>

              <a href="view/recherche.php?search=&br=on" class="category-btn">Affichez tous</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/watch.svg" alt="Motres" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Montres</h3>

                <p class="category-item-amount">(27)</p>
              </div>

              <a href="view/recherche.php?search=&mo=on" class="category-btn">Affichez tous</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/femme.jpg" alt="Femme" width="30" height="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Femme</h3>

                <p class="category-item-amount">(39)</p>
              </div>

              <a href="view/recherche.php?search=&fe=on" class="category-btn">Affichez tous</a>

            </div>

          </div>

        </div>

      </div>

    </div>





    <!--
      - PRODUCT
    -->

    <div class="product-container">

      <div class="container">


        <!--
          - SIDEBAR
        -->

        <div class="sidebar  has-scrollbar" data-mobile-menu>

          <div class="sidebar-category">

            <div class="sidebar-top">
              <h2 class="sidebar-title">Catégorie</h2>

              <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                <ion-icon name="close-outline"></ion-icon>
              </button>
            </div>

            <ul class="sidebar-menu-category-list">

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/bricolage.jpg" alt="clothes" width="20" height="20"
                      class="menu-title-img">

                    <p class="menu-title">Bricolage</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Chargeurs</p>
                      <data value="300" class="stock" title="Available Stock">300</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Chaffage d'eau</p>
                      <data value="60" class="stock" title="Available Stock">60</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Lampe</p>
                      <data value="50" class="stock" title="Available Stock">50</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name"></p>
                      <data value="87" class="stock" title="Available Stock">87</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/cuisine.jpg" alt="cuisine" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Cuisine</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Machine à laver</p>
                      <data value="45" class="stock" title="Available Stock">45</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Lave Lave-vaisselle</p>
                      <data value="75" class="stock" title="Available Stock">75</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Blender</p>
                      <data value="35" class="stock" title="Available Stock">35</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Batterie de cuisine</p>
                      <data value="26" class="stock" title="Available Stock">26</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/info.avif" alt="Informatique" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Informatique</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Pc portable</p>
                      <data value="46" class="stock" title="Available Stock">46</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Souris</p>
                      <data value="73" class="stock" title="Available Stock">73</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Imprimantes</p>
                      <data value="61" class="stock" title="Available Stock">61</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/accessoires.jpg" alt="accessoires" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Accessoires</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Ecoteurs</p>
                      <data value="12" class="stock" title="Available Stock">12 pcs</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Montres intelligentes</p>
                      <data value="60" class="stock" title="Available Stock">60 pcs</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Cables</p>
                      <data value="50" class="stock" title="Available Stock">50 pcs</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Rallonge</p>
                      <data value="87" class="stock" title="Available Stock">87 pcs</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/homme.avif" alt="homme" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Homme</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Tendouse</p>
                      <data value="68" class="stock" title="Available Stock">68</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Perceuse</p>
                      <data value="46" class="stock" title="Available Stock">46</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Rasoir</p>
                      <data value="79" class="stock" title="Available Stock">79</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Appareils de bricolage</p>
                      <data value="23" class="stock" title="Available Stock">23</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/femme.jpg" alt="femme" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Femme</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Sèche-cheveux</p>
                      <data value="50" class="stock" title="Available Stock">50</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Fer à friser</p>
                      <data value="48" class="stock" title="Available Stock">48</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/climatisation.avif" alt="climatisation" class="menu-title-img" width="20" height="20">

                    <p class="menu-title">Climatisation</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Chauffe-eau</p>
                      <data value="62" class="stock" title="Available Stock">62</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Climatiseurs</p>
                      <data value="35" class="stock" title="Available Stock">35</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Ventilateurs</p>
                      <data value="80" class="stock" title="Available Stock">80</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Planchers chauffants</p>
                      <data value="75" class="stock" title="Available Stock">75</data>
                    </a>
                  </li>

                </ul>

              </li>

            </ul>

          </div>

          <div class="product-showcase">

            <h3 class="showcase-heading">Mieux vendus</h3>

            <div class="showcase-wrapper">

              <div class="showcase-container">

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="./assets/images/products/1.jpg" alt="Aspirateur AS23 L13" width="75" height="75"
                      class="showcase-img">
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
                    <img src="./assets/images/products/2.jpg" alt="Lave-vaisselle pose libre M19F" class="showcase-img"
                      width="75" height="75">
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
                    <img src="./assets/images/products/3.jpg" alt="Machine à laver à hubolot SK78 " class="showcase-img" width="75"
                      height="75">
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



        <div class="product-box">

          <!--
            - PRODUCT MINIMAL
          -->

          <div class="product-minimal">
            <!-- les nouveux produits-->
            <div class="product-showcase">

              <h2 class="title">Nouvelles Arrivées</h2>

              <div class="showcase-wrapper has-scrollbar">

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/maison 2.jpg" alt="Machine à laver MLA 99" width="70" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Machine à laver MLA 99</h4>
                      </a>

                      <a href="#" class="showcase-category">Equipements de maison</a>

                      <div class="price-box">
                        <p class="price">45.90 DH</p>
                        <del>55.00 DH</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">
                  
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/maison 1.jpg" alt="Téléviseur LG 656 4K " class="showcase-img" width="70">
                    </a>
                  
                    <div class="showcase-content">
                  
                      <a href="#">
                        <h4 class="showcase-title">Téléviseur LG 656 4K</h4>
                      </a>
                  
                      <a href="#" class="showcase-category">Equipements de la maison</a>
                  
                      <div class="price-box">
                        <p class="price">4580.40 DH</p>
                        <del>4999.90 DH</del>
                      </div>
                  
                    </div>
                  
                  </div>

                  <div class="showcase">
                  
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/cuisine 2.jpg" alt="Kitchen machine SM 34" class="showcase-img"
                        width="70">
                    </a>
                  
                    <div class="showcase-content">
                  
                      <a href="#">
                        <h4 class="showcase-title">Kitchen machine SM 34</h4>
                      </a>
                  
                      <a href="#" class="showcase-category">Equipements de la cuisine</a>
                  
                      <div class="price-box">
                        <p class="price">760.00 DH</p>
                        <del>856.00 DH</del>
                      </div>
                  
                    </div>
                  
                  </div>

                  <div class="showcase">
                  
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/cuisine 3.jpg" alt="Batteur A34 LG" class="showcase-img"
                        width="70">
                    </a>
                  
                    <div class="showcase-content">
                  
                      <a href="#">
                        <h4 class="showcase-title">Batteur A34 LG</h4>
                      </a>
                  
                      <a href="#" class="showcase-category">Equipements de cuisine</a>
                  
                      <div class="price-box">
                        <p class="price">680.00 DH</p>
                        <del>831.00 DH</del>
                      </div>
                  
                    </div>
                  
                  </div>

                </div>

                <div class="showcase-container">
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/info 1.jpg" alt="Telephone Android SAMSUNG S9" class="showcase-img"
                        width="70">
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">Telephone Android SAMSUNG S9</h4>
                      </a>
                
                      <a href="#" class="showcase-category">Matériel Informatique</a>
                
                      <div class="price-box">
                        <p class="price">1800.00 DH</p>
                        <del>2110.00 DH</del>
                      </div>
                
                    </div>
                
                  </div>
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/Tondeuse 1.jpg" alt="Tendouse LF 67" class="showcase-img"
                        width="70">
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">Tendouse LF 67</h4>
                      </a>
                
                      <a href="#" class="showcase-category">Pour les hommes</a>
                
                      <div class="price-box">
                        <p class="price">325.00 DH</p>
                        <del>420.60 DH</del>
                      </div>
                
                    </div>
                
                  </div>
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/maison 3.jpg" alt="Téléviseur TH DF HD" class="showcase-img"
                        width="70">
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">Téléviseur TH DF HD</h4>
                      </a>
                
                      <a href="#" class="showcase-category">Equipements de la maison</a>
                
                      <div class="price-box">
                        <p class="price">$50.00</p>
                        <del>$25.00</del>
                      </div>
                
                    </div>
                
                  </div>
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/Machine à laver à hublot 4.jpg" alt="Machine à laver à hublot 4" class="showcase-img"
                        width="70">
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">Machine à laver à hublot 4</h4>
                      </a>
                
                      <a href="#" class="showcase-category">Equipements de la cuisine</a>
                
                      <div class="price-box">
                        <p class="price">3880.00 DH</p>
                        <del>4100.00 DH</del>
                      </div>
                
                    </div>
                
                  </div>
                
                </div>

              </div>

            </div>
            <!-- Les produits populaires-->
            <div class="product-showcase">
            
              <h2 class="title">Les produits populaires</h2>
            
              <div class="showcase-wrapper  has-scrollbar">
            
                <div class="showcase-container">
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/cuisine 5.jpg" alt="Mixeur plongeant" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Mixeur plongeant</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Equipements de la cuisine</a>
            
                      <div class="price-box">
                        <p class="price">490.00 DH</p>
                        <del>515.30 DH</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/cuisine 6.jpg" alt="Blender" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Blender LFT 5</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Equipements de la cuisine</a>
            
                      <div class="price-box">
                        <p class="price">880.00 DH</p>
                        <del>936.00 DH</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/maison 4.jpg" alt="Téléviseur crystal UHD " class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Téléviseur crystal UHD </h4>
                      </a>
            
                      <a href="#" class="showcase-category">Equipements de la maison</a>
            
                      <div class="price-box">
                        <p class="price">4494.00 DH</p>
                        <del>4842.00 DH</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/hachoir.jpg" alt="Hachoir JDF 67 LAVA" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Hachoir JDF 67 LAVA</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Pour les hommes</a>
            
                      <div class="price-box">
                        <p class="price">540.00 DH</p>
                        <del>659.00 DH</del>
                      </div>
            
                    </div>
            
                  </div>
            
                </div>
            
                <div class="showcase-container">
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/maison 5.jpg" alt="Climatiseur LG 679" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Climatiseur LG 679</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Equipements de la maison</a>
            
                      <div class="price-box">
                        <p class="price">$5692.00 DH</p>
                        <del>5855.00 DH</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/cuisine 7.jpg" alt="Centrifugeuse KD 56" class="showcase-img" width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Centrifugeuse KD 56</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Equipements de la cuisine</a>
            
                      <div class="price-box">
                        <p class="price">660.00 DH</p>
                        <del>730.00 DH</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/maison 6.jpg" alt="Fer à repasser" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Fer à repasser</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Equipements de la maison</a>
            
                      <div class="price-box">
                        <p class="price">569.00 DH</p>
                        <del>780.00 DH</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/access 1.jpg" alt="Ecouteurs avec micro sans fil" class="showcase-img" width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Ecouteurs avec micro sans fil</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Accessoires</a>
            
                      <div class="price-box">
                        <p class="price">$50.00</p>
                        <del>$55.00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                </div>
            
              </div>
            
            </div>

            <!-- Les mieux notés -->

            <div class="product-showcase">
            
              <h2 class="title">Les mieux notés</h2>
            
              <div class="showcase-wrapper  has-scrollbar">
            
                <div class="showcase-container">
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/cuisine 7.jpg" alt="Moulin à café" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Moulin à café</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Equipements de la maison</a>
            
                      <div class="price-box">
                        <p class="price">$50.00</p>
                        <del>$34.00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/Tondeuse.jpg" alt="Tondeuse" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Tondeuse</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Pour les hommes</a>
            
                      <div class="price-box">
                        <p class="price">384.00 DH</p>
                        <del>$400.00 DH</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/Batteur 1.jpg" alt="Batteur" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Batteur</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Equipements de la cuisine</a>
            
                      <div class="price-box">
                        <p class="price">420.00 DH</p>
                        <del>$900.00 DH</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/Téléviseurs 7.jpg" alt="Téléviseurs LG UHD AI" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Téléviseurs LG UHD AI</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Equipements de la maison</a>
            
                      <div class="price-box">
                        <p class="price">6524.00 DH</p>
                        <del>7010.00 DH</del>
                      </div>
            
                    </div>
            
                  </div>
            
                </div>
            
                <div class="showcase-container">
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/Machine à laver à hublot 1.webp" alt="Machine à laver à hublot" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Machine à laver à hublot</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Equipements de la maison</a>
            
                      <div class="price-box">
                        <p class="price">3662.00 DH</p>
                        <del>3865.00 DH</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/watch-1.jpg" alt="smart watche vital plus" class="showcase-img" width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Smart watche Vital Plus</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Montres</a>
            
                      <div class="price-box">
                        <p class="price">560.00 DH</p>
                        <del>780.00 DH</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/Congélateur armoire.jpg" alt="Congélateur armoire" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Congélateur armoire</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Equipements de la cuisine</a>
            
                      <div class="price-box">
                        <p class="price">2000.00 DH</p>
                        <del>2400.00 DH</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/Téléviseurs led2.jpg " alt="Téléviseurs led" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Téléviseurs led</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Maison</a>
            
                      <div class="price-box">
                        <p class="price">5420.00 DH</p>
                        <del>5830.00 DH</del>
                      </div>
            
                    </div>
            
                  </div>
            
                </div>
            
              </div>
            
            </div>

          </div>



          <!--
            - PRODUCT FEATURED
          -->

          <div class="product-featured">

            <h2 class="title">Produit du jour</h2>

            <div class="showcase-wrapper has-scrollbar">
              <!-- Premier offre-->
              <div class="showcase-container">

                <div class="showcase">
                  
                  <div class="showcase-banner">
                    <img src="./assets/images/products/offre-1.svg" alt="DELONGHI FH1163 Friteuse sans huile" class="showcase-img">
                  </div>

                  <div class="showcase-content">
                    
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <a href="#">
                      <h3 class="showcase-title">DELONGHI FH1163, Friteuse sans huile</h3>
                    </a>

                    <p class="showcase-desc">
                      Plus d’information, MARQUE : DELONGHI, REFERENCE FOURNISSEUR : FH1163, TYPE DE FRITEUSE : SANS HUILE, CAPACITE : 0.014 L, CAPACITÉ EN FRITES : 1,5 KG, CUVE AMOVIBLE : OUI, MINUTEUR : OUI, HAUTEUR (CM) : 27, LARGEUR (CM) : 32.5, PROFONDEUR (CM) : 39.5, POIDS EN KG : 5.1, GARANTIE : 1 AN
                    </p>

                    <div class="price-box">
                      <p class="price">2 799 DH</p>

                      <del>3200.00 DH</del>
                    </div>
                    
                    <a href="controller/produit_controller.php?code=DELO&action=ajouter"><button class="add-cart-btn">ajouter au panier</button></a>

                    <div class="showcase-status">
                      <div class="wrapper">
                        <p>
                          déjà vendu: <b>20</b>
                        </p>

                        <p>
                          disponible: <b>56</b>
                        </p>
                      </div>

                      <div class="showcase-status-bar"></div>
                    </div>

                    <div class="countdown-box">

                      <p class="countdown-desc">
                        Dépêche-toi! L'offre se termine dans :
                      </p>

                      <div class="countdown">

                        <div class="countdown-content">

                          <p class="display-number">2</p>

                          <p class="display-text">Jours</p>

                        </div>

                        <div class="countdown-content">
                          <p class="display-number">13</p>
                          <p class="display-text">Hours</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">29</p>
                          <p class="display-text">Min</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">10</p>
                          <p class="display-text">Sec</p>
                        </div>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

              <div class="showcase-container">
                <!-- Deuxieme offre-->
                <div class="showcase">
              
                  <div class="showcase-banner">
                    <img src="./assets/images/products/offre-2.svg" alt="Rose Gold diamonds Earring" class="showcase-img">
                  </div>
              
                  <div class="showcase-content">
              
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>
              
                    <h3 class="showcase-title">
                      <a href="#" class="showcase-title">SAMSUNG LED QA65QN700BUXMV 8K</a>
                    </h3>
              
                    <p class="showcase-desc">
                      TAILLE D'ÉCRAN : 65
                      TYPE D'ECRAN : FLAT
                      SMART TV : OUI
                      TYPE DU RECTROECLAIRAGE : QLED
                    </p>
              
                    <div class="price-box">
                      <p class="price">26 999 DH</p>
                      <del>28000.00 DH</del>
                    </div>
                    
                    <a href="controller/produit_controller.php?code=TELE2&action=ajouter"><button class="add-cart-btn">ajouter au panier</button></a>
              
                    <div class="showcase-status">
                      <div class="wrapper">
                        <p> déjà vendu: <b>35</b> </p>
              
                        <p> disponible: <b>110</b> </p>
                      </div>
              
                      <div class="showcase-status-bar"></div>
                    </div>
              
                    <div class="countdown-box">
              
                      <p class="countdown-desc">Dépêche-toi! L'offre se termine dans :</p>
              
                      <div class="countdown">
                        <div class="countdown-content">
                          <p class="display-number">1</p>
                          <p class="display-text">Jours</p>
                        </div>
              
                        <div class="countdown-content">
                          <p class="display-number">4</p>
                          <p class="display-text">Hours</p>
                        </div>
              
                        <div class="countdown-content">
                          <p class="display-number">09</p>
                          <p class="display-text">Min</p>
                        </div>
              
                        <div class="countdown-content">
                          <p class="display-number">22</p>
                          <p class="display-text">Sec</p>
                        </div>
                      </div>
              
                    </div>
              
                  </div>
              
                </div>
              
              </div>

            </div>

          </div>

          <!--
            - PRODUCT GRID
          -->

          <div class="product-main">

            <h2 class="title">Nouveaux produits</h2>

            <div class="product-grid">
              <?php 
                include 'dao/dao_produit.php';
                include 'dao/dao_categorie.php';
                
                $p = new DaoProduit();
                $c = new DaoCategorie();

                $newProducts = $p->getNouveauxProduits();
              ?>
              <?php foreach ($newProducts as $produit) {
                $categorie = $c->NomCategorie($produit['idCategorie']);
                echo '

              <div class="showcase">

                <div class="showcase-banner">

                  <img src="./assets/images/products/'.$produit['codeBare'].'.jpg" alt="'.$produit['nom'].'" width="300" class="product-img default">
                  <img src="./assets/images/products/'.$produit['codeBare'].'2.jpg" alt="'.$produit['nom'].'" width="300" class="product-img hover">

                  <div class="showcase-actions">

                    <button class="btn-action" style="padding-top:3px;">
                      <svg   id="heartIcon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-suit-heart-fill" viewBox="0 0 16 16" onclick="changeColor()">
                        <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1"/>
                      </svg>
                    </button>

                    <button class="btn-action">
                      <a href="./view/produit.php?code='.$produit['codeBare'].'"><ion-icon name="eye-outline"></ion-icon></a>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <a href="controller/produit_controller.php?code='.$produit['codeBare'].'&action=ajouter"><ion-icon name="bag-add-outline"></ion-icon></a>
                    </button>

                  </div>

                </div>

                <div class="showcase-content">

                  <a href="#" class="showcase-category">'.$categorie.'</a>

                  <a href="#">
                    <h3 class="showcase-title">'.$produit['description'].'</h3>
                  </a>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">'.$produit['prix'].'</p>
                    <del>'.($produit['prix']*1.045).'</del>
                  </div>

                </div>

              </div>
              ';
              }
              ?>

            </div>

          </div>

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

        <img src="./assets/images/payment.png" alt="payment method" class="payment-img">

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

</body>
<script>
  $(document).ready(function () {
      loadCompteInfo();
  });

  function loadCompteInfo() {
      var xhr = new XMLHttpRequest();

      xhr.onreadystatechange = function () {
          if (xhr.readyState == 4 && xhr.status == 200) {
              document.getElementById("zone-identifiant").innerHTML = xhr.responseText;
          } else {
              console.log(xhr.responseText);
          }
      };

      xhr.open('GET', "controller/compte_controller.php?action=loadInfo", true);
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

  function changeColor() {
            var heartIcon = document.getElementById('heartIcon');
            var currentColor = heartIcon.style.fill;

            if (currentColor === 'red') {
                heartIcon.style.fill = 'currentColor'; 
            } else {
                heartIcon.style.fill = 'red'; 
            }
        }
</script>


</html>