<?php
$pagesFooter = "Mentions legales";

$articles = [
     ['titre' => "Les nouvelles recentes", "description" => "descripition1", "categorie"=>"news"],
     ['titre' => "Initiation au PHP", "description" => "descripition2", "categorie"=>"php"],
    ['titre' => "Introduction: HTML", "description" => "descripition3", "categorie"=>"html"],
 ['titre' => "Suite HMTL", "description" => "descripition4", "categorie"=>"html"],
     ['titre' => "Quelques conseils PHP", "description" => "descripition5", "categorie"=>"php"],
  
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
<?php include "menu.php"?>
</nav>

<h2>BLOG</h2>
<h3>Filtre catego</h3>
<ul class="formblog">
    <li><a href="blog.php">Afficher tout</a></li>
    <li><a href="blog.php?categorie=news">News</a></li>
    <li><a href="blog.php?categorie=html">HTML</a></li>
    <li><a href="blog.php?categorie=php">PHP</a></li>
</ul>


<section>
    <?php
        foreach ($articles as $key => $value) { 
            
            if (  !isset($_GET["categorie"])  
              ||  (isset($_GET["categorie"]) && $_GET["categorie"]  === $value["categorie"] )   ) {
            ?>
        
            <article>
                <h3><?php echo  $value["titre"];?></h3>
                <p><?php echo  $value["description"];?></p>
                <p>catégorie : <?php echo  $value["categorie"];?></p>
            </article>
        <?php
            }
        }
    ?>
    </section>



<footer>
<?php $pagesFooter = "Mentions legales" ?>
</footer>
</body>
</html>