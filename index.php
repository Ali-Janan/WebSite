<!-- PHP -->
<?php

$pageName = $_GET['page'];
$pageContent ='';

if(!empty($pageName)) {
  $pageName = $_GET['page'];
} else {
  $pageName = 'index';
}
$pageContent = file_get_contents('html/' . $pageName . '.html');
?>
<!-- HTML START -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Herat Shop</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- bootrap for shopping card-->
  <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
  <!--Google fonts  -->
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <!-- Icomoon Link -->
  <link rel="stylesheet" href="./asset/icomoon/style.css">
  <!-- faveicon -->
  <link rel="shortcut icon" type="image/png" href="./asset/image/panda.png" />
  <!-- css style sheet -->
  <link rel="stylesheet" href="./asset/css/index.css">
</head>


<!--------------------------------BODY START-------------------------------------------->
<body>

  <div class="grid-container">

    <!-- HEADER START -->
    <header class="header">

      <!-- TOP ROW -->
      <section class="top-row">
        <!-- The form -->
        <figure class="logo">
          <img src="./asset/image/panda.png" alt="logo">
        </figure>

        <form class="search">
          <input class="search-frame" id="myInput" onkeyup="searchFunction()" type="text" placeholder=" Search.."
            name="search">
        </form>

        <nav class="list-container">
          <ul>
            <li class="list"><span class="glyphicon glyphicon-shopping-cart my-cart-icon"><span
                  class="badge badge-notify my-cart-badge"></span>My list</span></li>
            <li class="log" <a href=""><span class="icon-profile"> Login</span></a></li>
            <li class="lan" <a href=""><span>EN</span></a></li>
          </ul>
        </nav>
        <!-- for icon which is hiden in normal (medai query) -->
        <span id="menu-products" class="icon-menu"></span>
      </section>

      <!-- Bottom ROW -->
      <section class="bottom-row">
        <span id="menu-page" class="icon-menu"></span>
        <ul class="my-nav">

          <?php if($pageName == 'contact') { ?>
          <li class="active-page">
          <?php } else { ?>
          <li>
          <?php } ?>
          <a href="?page=contact">Contact</a></li>

          <?php if($pageName == 'about') { ?>
          <li class="active-page">
          <?php } else { ?>
          <li>
          <?php } ?>
          <a href="?page=about">About us</a></li>

          <?php if($pageName == 'branch') { ?>
          <li class="active-page">
          <?php } else { ?>
          <li>
          <?php } ?>
          <a href="?page=branch">Branches</a></li>

          <?php if($pageName == 'index') { ?>
          <li class="active-page">
          <?php } else { ?>
          <li>
          <?php } ?>
          <a href="?page=index" class="icon-home3"> Home</a></li>
        </ul>
      </section>

    </header>

    <!-- SIDE NAV -->
    <aside id="aside" class="menu ex3">


      <h3 id="pro-head">All products</h3>
      <nav class="category">

        <ul>
          <li class="space"><a href="#" class=" space icon-pacman"> Meat & Fish</a></li>
          <li class="space"><a href="#" class="space icon-appleinc"> Fruits</a></li>
          <li class="space"><a href="#" class="icon-leaf"> Vegetabels</a></li>
          <li class="space"><a href="#" class="icon-pushpin"> Bread</a></li>
          <li class="space"><a href="#" class="icon-pacman"> Candies</a></li>
          <li class="space"><a href="#" class="icon-glass2"> Drinks</a></li>
          <li class="space"><a href="#" class="icon-pushpin"> Sweet</a></li>
          <li class="space"><a href="#" class="icon-home"> Household</a></li>
          <li class="space"><a href="#" class="icon-gift"> Shisha</a></li>
          <li class="space"><a href="#" class="icon-ticket"> Rice</a></li>
          <li class="space"><a href="#" class="icon-gift"> Dry Fruits</a></li>
          <li class="space"><a href="#" class="icon-spoon-knife"> Dishes</a></li>
          <li class="space"><a href="#" class="icon-pushpin"> Kitchen</a></li>
          <li class="space"><a href="#" class="icon-gift"> Frozen Food</a></li>
          <li class="space"><a href="#" class="icon-glass2"> Drinks</a></li>
          <li class="space"><a href="#" class="icon-pushpin"> Sweet</a></li>
          <li class="space"><a href="#" class="icon-ticket"> Beverage</a></li>
          <li class="space"><a href="#" class="icon-gift"> Rice</a></li>
        </ul>
      </nav>

    </aside>


<!-- MAIN CONTENT IN OTHER PAGES START-->
    

    <?php  echo $pageContent; ?>
    

<!-- MAIN CONTENT IN OTHER PAGES END-->


    <!-- FOOTER START -->
    <footer class="footer">
    
      <section class="media-icon">
        <ul>
          <li><a href="https://www.facebook.com/" class="icon-facebook1"></a></li>
          <li><a href="https://www.instagram.com/" class="icon-instagram"></a></li>
          <li><a href="https://twitter.com/login?lang=en" class="icon-twitter"></a></li>
          <li><a href="https://www.whatsapp.com/" class="icon-whatsapp1"></a></li>
          <li><a href="https://accounts.google.com" class="icon-gmail"></a></li>
        </ul>
      </section>
    
      <section class="ft-text">
        <h4>Thanks for visiting our website! For positive idea we will be glad</h4>
        <p>&copy;2019 by Ali Janan | All right reserved</p>
      </section>
    </footer>

  </div>
  <!--GRID CONTAINER END-->


  <!----------------------- --------JAVASCRIPT START--------------------------------------->
  <script src="./asset/js/jquery-3.4.1.slim.min.js"></script>
  <script src="./asset/js/index.js"></script>

  <!-- ------------------------bootrap for shopping card ----------------->
  <script src="./asset/js/jquery-2.2.3.min.js"></script>
  <script type='text/javascript' src="./asset/js/bootstrap.min.js"></script>
  <script type='text/javascript' src="./asset/js/jquery.mycart.min.js"></script>
  <!-------------------------------JAVASRICPT END----------------------------------------->

</body>

</html>