<?php
session_start();

//gere le forcage
if(empty($_SESSION['uname']) || empty($_SESSION['psw'])){
    session_unset();
    header('Location: index.php');
}

//ajouter des produits de bas 
$produits = [];
$produitRD2 = [
    'nom' => 'Red dead redemption 2',
    'slub_nom' => 'red_dead_redemption_2',
    'prix' => '49.99',
    'image'=> 'images/rd2.jpg'
];
$produits[] = $produitRD2;
$produitSOT = [
    'nom' => 'Sea of thieves',
    'slub_nom' => 'sea_of_thieves',
    'prix' => '49.99',
    'image'=> 'images/sot.jpg'
];
$produits[] = $produitSOT;
$_SESSION['produits'] = $produits;

//todo ajouter avec form des produits en session 


if(!empty($_POST['ajoutPanier'])){
    if(!empty($_SESSION['panier'])){
        $panier = $_SESSION['panier'];
        $produit = $_POST['ajoutPanier'];
        array_push($panier,$produit);
        $_SESSION['panier'] = $panier;
    }else{
        $panier = [$_POST['ajoutPanier']];
        $_SESSION['panier'] = $panier;
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catalogue</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</head>
<body style="background-image: url(images/fondecran.png);
    background-attachment: fixed;
    background-size: 500px;">
<?php
        include 'template/header.php';
        include 'template/produit.php';
    ?>
    <footer>
    <?php include 'template/footer.php';?>
    </footer>
</body>
</html>