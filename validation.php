<?php

session_start();
//gere le forcage
if(empty($_SESSION['uname']) || empty($_SESSION['psw'])){
    session_unset();
    header('Location: index.php');
}

if(!empty($_SESSION['panier'])){
    unset($_SESSION['panier']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajout Produit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url(images/fondecran.png);
    background-attachment: fixed;
    background-size: 500px;">
<?php
        include 'template/header.php';
       echo '<h1>merci pour votre commande</h1>';
    ?>
    <footer>
    <?php include 'template/footer.php';?>
    </footer>
</body>
</html>