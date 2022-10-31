<?php
$pagesFooter = "Mentions legales";
$info=[
"email", 
"firstname"
];


$message = "Line 1\r\nLine 2\r\nLine 3";

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
    <h2>CONTACT</h2>
    
        <div class="formContact">
            <form action="contact2.php" method="post" >
                <p>
                    <label for="lastname">Nom: </label>
                    <input type="text" id="lastname" name="lastname">
                </p>
                
                <p>
                    <label for="firstname">Prenom: </label>
                    <input type="text" id="firstname" name="firstname">
                </p>
                
                
                <p>
                    <label for="email">Email: </label>
                    <input type="email" id="email" name="email">
                </p>
                <p>
                    <label for="msg">Message: </label>
                    <textarea name="msg" id="msg" cols="20" rows="5" placeholder="Ecrire un message..."></textarea>
                </p>
                <input type="submit" value="Envoyer" >
            </form>
        </div>
        
        <!-- // Le message -->
        
        <!-- <p><?php
// $message = "Line 1\r\nLine 2\r\nLine 3";
// $message = wordwrap($message, 70, "\r\n");
// mail('hilel.hamidi@gmail.com', 'Mon Sujet', $message);
//  ?> -->
</p>


</body>
</html>




<footer>
<?php $pagesFooter = "Mentions legales" ?>
</footer>

