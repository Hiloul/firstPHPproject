<?php

$pagesFooter = "Mentions legales";

$error = false;

function connexion($email, $code)
{
    if ($email == "test@test.com" && $code == "1234") {
        return true;
    } else {
        return false;
    }
};
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $result = connexion($_POST['email'], $_POST['code']);
    if ($result) {
        header("Location: accueil.php");
        exit;
    } else {
        $error = true;
    };
};


// if(empty($_POST)){
//     var_dump($_POST['email']);
// }

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
    


<nav>
    <?php include "menu.php" ?>
</nav>


<h2>CONNEXION</h2>
<?php if ($error) { ?>

    <p class="error">Identifiant ou mot de passe incorrect</p>
<?php } ?>

<div class="formconnexion">
    <form action="connexion.php" method="post" id="formu">
        <p>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </p>

        <p>
            <label for="code">Code:</label>
            <input type="password" id="code" name="code">
        </p>
        <input type="submit" name="sub2" value="Se connecter" id="sub">

</div>
</form>

<section class="log">
    <a href="inscription.php">s'inscrire</a>
</section>

<footer>
    <?php $pagesFooter = "Mentions legales" ?>
</footer>
</body>
</html>