<?php
session_start();

//gere le forcage
if(empty($_SESSION['uname']) || empty($_SESSION['psw'])){
    session_unset();
    header('Location: index.php');
}

if($_SESSION['uname'] != 'tayfun'){
    header('Location: home.php');
}


if(!empty($_FILES)){
    if ($_FILES['imageFile']['error']) {     
        switch ($_FILES['imageFile']['error']){     
                case 1: // UPLOAD_ERR_INI_SIZE     
                echo"Le fichier dépasse la limite autorisée par le serveur (fichier php.ini) !";     
                break;     
                case 2: // UPLOAD_ERR_FORM_SIZE     
                echo "Le fichier dépasse la limite autorisée dans le formulaire HTML !"; 
                break;     
                case 3: // UPLOAD_ERR_PARTIAL     
                echo "L'envoi du fichier a été interrompu pendant le transfert !";     
                break;     
                case 4: // UPLOAD_ERR_NO_FILE     
                echo "Le fichier que vous avez envoyé a une taille nulle !"; 
                break;     
        }     
    }     
    else {     
        if (isset($_FILES['imageFile']['tmp_name'])) {     
            $chemin_destination = '/var/www/html/images/';     
            move_uploaded_file($_FILES['imageFile']['tmp_name'], $chemin_destination.$_FILES['imageFile']['name']);     
        }   
    } 
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
        include 'template/ajouterProduit.php';
    ?>
    <footer>
    <?php include 'template/footer.php';?>
    </footer>
</body>
</html>