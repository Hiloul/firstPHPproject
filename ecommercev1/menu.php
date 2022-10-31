<?php
$liens = [
    "Accueil" => "accueil.php",
    "Blog" => "blog.php",
    "Connexion" => "connexion.php",
    "Contact" => "contact.php",

];
$pagesFooter = "Mentions legales";


function afficherMenu($liens ){
foreach($liens as $key => $value){

    echo "<li> <a href='$value'> $key </a> </li>";
}
};
afficherMenu($liens);
        
        ?>


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
    
</body>
</html>