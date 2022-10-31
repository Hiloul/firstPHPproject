<?php $pagesFooter = "Mentions legales"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    


<nav>
<?php include "menu.php"?>
</nav>



<div class="reponse">
    <h1>Merci à vous !</h1>
    <p>Prénom: <?php echo $_POST["lastname"] ?></p>
    <p>Nom: <?php echo $_POST["firstname"] ?></p>
    <p>Email: <?php echo $_POST["email"] ?></p>
    <p>Message: <?php echo nl2br($_POST["msg"])   ?> <br> </p>
</div>


  
    <!-- // Le message -->

   <?php
$message = "Line 1\r\nLine 2\r\nLine 3";
$message = wordwrap($message, 70, "\r\n");
ini_set($message,'hilel.hamidi@gmail.com')
 ?> 

 <footer>
 <?php $pagesFooter = "Mentions legales" ?>
 </footer>
 </body>
</html>