<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <?php
        if(!empty($_SESSION['uname'])){
          echo '<a class="navbar-brand" href="#">Bonjour '.$_SESSION["uname"].' !</a>';
        }
        ?>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="./home.php">Home</a></li>
      <li><a href="./catalogue.php">Catalogue</a></li>
      <li><a href="./panier.php">Panier</a></li>
      <?php
        if($_SESSION['uname'] == 'tayfun'){
            echo '<li><a href="./ajoutProduit.php">Ajouter Produit</a></li>';
        }
      ?>
    </ul>
  </div>
</nav>