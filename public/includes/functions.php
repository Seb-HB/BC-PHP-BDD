<?php

function getThemePath(){
    if (isset($_COOKIE['theme']) && $_COOKIE['theme']=='dark'){
        return 'img/ico/dark/';
    }
    return 'img/ico/';
}

function switchTheme($page){
    if (isset($_COOKIE['theme']) && $_COOKIE['theme']=='dark'){
        setcookie('theme', 'light');
    }else{
        setcookie('theme', 'dark');
    }

    header('Location: '.$page );
}

function disconnect(){
    session_unset();
}


function treatGetArguments(){
    if (count($_GET)>0){
        // var_dump($_GET);
        // die();
        foreach($_GET as $argument=> $value){
            switch($argument){
                case 's':
                    switchTheme(stristr($_SERVER['REQUEST_URI'], '?', true));
                    break;
                case 'deco':
                    disconnect();
                    break;
                default:
                    header('Location: ' .$_SERVER['HTTP_REFERER']);
            }
        }
    }
}


/************************************************************************************************
 *                                  BDD
 ************************************************************************************************/

function connectBDD(){
    global $host, $dbName, $user, $password;
    try {
        $bdd = new PDO(
            'mysql:host='.$host.';dbname='.$dbName.';charset=utf8',
            $user,
            $password);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
        throw new InvalidArgumentException('Erreur connexion à la base de données : '.$e->getMessage());
        // exit;
    }
    return $bdd;
}

/*---------------------------REQUESTs----------------------- */

function fetchAllRequest($bdd, $request){
    $result= $bdd->query($request);
    return $result->fetchAll();
}

// $nb peut être égal à all, auquel cas on récupère tous les produits
function getSomeProducts($bdd, $nb){
    global $productDetail;
    $request=$productDetail;
    if(is_numeric($nb)){
        $request=$request.' LIMIT '.$nb;
    }
    $result=$bdd->query($request);
    return $result->fetchAll();
}










?>