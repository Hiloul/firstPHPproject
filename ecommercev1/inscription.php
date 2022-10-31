<?php
$pagesFooter = "Mentions legales";
function verification(){
    $verifOK = true;
    if(isset($_POST["lastname"])&& $_POST["lastname"] != ""){
//valeur ok
    } 

    else {
        //valeur manquante
        $verifOK = false;
    };
    if(isset($_POST["firstname"])&& $_POST["firstname"] != ""){
        //valeur ok
            } 
        
            else {
                //valeur manquante
                $verifOK = false;
            };
            if(isset($_POST["lastname"])&& $_POST["lastname"] != ""){
                //valeur ok
                    } 
                
                    else {
                        //valeur manquante
                        $verifOK = false;
                    };
                    if(isset($_POST["photo"])&& $_POST["photo"] != ""){
                        //valeur ok
                            } 
                        
                            else {
                                //valeur manquante
                                $verifOK = false;
                            };
                            if(isset($_POST["email"])&& $_POST["email"] != ""){
                                //valeur ok
                                    } 
                                
                                    else {
                                        //valeur manquante
                                        $verifOK = false;
                                    };
                                    if(isset($_POST["code"])&& $_POST["code"] != ""){
                                        //valeur ok
                                            } 
                                        
                                            else {
                                                //valeur manquante
                                                $verifOK = false;
                                            };
    return $verifOK;

}
$error = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $result = verification();
    if ($result) {
        header("Location: connexion.php");
        exit();
    } else {
        $error = true;
    };
};

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $result = verification();
    var_dump($result);
}

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
<h2>INSCRIPTION</h2>

<section class="formInscription">
    <form action="inscription.php" method="post">
    <h1>Formulaire d'inscription</h1>
    
        <label for="lastname">Nom: </label>
        <input type="text" id="lastname" name="lastname">
    </p>

    <p>
        <label for="firstname">Prenom: </label>
        <input type="text" id="firstname" name="firstname">
    </p>

    <p>
        <label for="photo">Photo: </label>
        <input type="file" id="photo" name="photo">
    </p>

    <p>
        <label for="email">Email: </label>
        <input type="email" id="email" name="email">
    </p>

    <p>
        <label for="Code">Code: </label>
        <input type="password" id="code" name="code">
    </p>
    <p>
        <input type="submit" value="valider">
    </p>
    </form>


</section>
</body>
</html>