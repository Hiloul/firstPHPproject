<?php
$pagesFooter = "Mentions legales";
$listeProduits = [
    "Pomme",
    "Poirot",
    "Poires",
    "Oranges",
    "Bananes",
    "Haricots verts",
    "Tomates",
    "Ananas",
    "Gâteaux",
    "Lingettes",
    "Bonbons",
    "Savon",
];
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

    <h2>PRODUITS</h2>

    <div class="formaccueil">
        <form action="accueil.php" method="get" id="formu">
            <label for="produit"></label>
            <input type="text" placeholder="rechercher..." name="produit" id="search">
            <input type="submit" value="Ok" id="sub">
        </form>
        <?php
        foreach ($listeProduits as $key => $value) {
            if (!isset($_GET["produit"]) || (isset($_GET["produit"]) && strtolower($_GET["produit"])  === strtolower($value))) {
                echo "<li>$value</li>";
            }
        }


        ?>


    </div>


    <footer>
        <?php $pagesFooter = "Mentions legales" ?>
    </footer>


</body>

</html>