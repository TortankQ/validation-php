<?php
session_start();

//gere le forcage
if(empty($_SESSION['uname']) || empty($_SESSION['psw'])){
    session_unset();
    header('Location: index.php');
}

if(!empty($_POST['mail'])){
    if (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $_POST['mail'])) {
        echo "message envoyé";
    } else {
        echo 'Cet email a un format non adapté.';
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
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}
    form {border: 3px solid #f1f1f1;}

    input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
    }

    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }

    img.avatar {
        width: 40%;
        border-radius: 50%;
    }

    .container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
        display: block;
        float: none;
        }
        .cancelbtn {
        width: 100%;
        }
    }
</style>
</head>
<body style="background-image: url(images/fondecran.png);
    background-attachment: fixed;
    background-size: 500px;">
    <?php
        include 'template/header.php';
    ?>
    <form action="/contact.php" method="post">
    <label for="fname">First Name</label><br>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label><br>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    <label for="mail">mail</label><br>
    <input type="text" name="mail" >

    <label for="country">Country</label><br>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label><br>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px; width: 100%"></textarea><br>

    <input type="submit" value="Submit">
  </form>
    </div>
    <footer>
    <?php include 'template/footer.php';?>
    </footer>
</body>
</html>