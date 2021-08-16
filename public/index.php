<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="img/ico/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/ico/favicon/favicon-16x16.png">
    <?php
        if(isset($_COOKIE['theme']) && $_COOKIE['theme']=='dark'){
            echo('<link rel="stylesheet" href="css/dark.css">');
        }else{
            echo('<link rel="stylesheet" href="css/light.css">');
        }
    ?>
    <link rel="stylesheet" href="CSS/style.css">
    <title>Business Case</title>
</head>
<body>
    <?php
        // demarre la session
        session_start();

        $_SESSION['users']=[
            [
                'id'=>'seb',
                'pass'=>'admin'
            ],
            [
                'id'=>'visiteur',
                'pass'=>'invité'
            ]
        ];

        //charge les variables
        include "includes/vars.php";
        //charge les fonctions
        include "includes/functions.php";

        // crée une instance PDO
        $bdd=connectBDD();

        //verifie et traite les requetes POST
        treatPostForms();

        // traitement des arguments GET
        treatGetArguments();

        //affichage du header
        include "includes/header.php"; 

        echo('<div id="global-container">');

        //affichage du contenu en fonction du traitement de $_GET fait precedemment
        include ('pages'.$_SESSION['targetUrl']);
        // si on veut se loguer, affiche le formulaire
        if($_SESSION['login']) {
            include ('pages/Login.php');
            var_dump('toto', $_SESSION['login']);
        die();}

        echo('</div>');

        //affichage du footer
        include "includes/footer.php" 
     
                
    ?>
</body>
</html>