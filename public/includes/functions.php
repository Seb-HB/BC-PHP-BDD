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
    // header('Location: '.$page );
}

function disconnect(){
    session_unset();
}


function treatGetArguments(){
    if (count($_GET)>0){
        foreach($_GET as $argument=> $value){
            switch($argument){
                case 's':
                    switchTheme(stristr($_SERVER['REQUEST_URI'], '?', true));
                    $_SESSION['targetUrl']=stristr($_SERVER['REQUEST_URI'], '?', true);
                    break;
                case 'deco':
                    disconnect();
                    $_SESSION['targetUrl']=stristr($_SERVER['REQUEST_URI'], '?', true);
                    break;
                case 'page':
                    $_SESSION['targetUrl']='/'.$value.'php';
                    break;
                default:
                    $_SESSION['targetUrl']=stristr($_SERVER['REQUEST_URI'], '?', true);
            }
        }
    }else{
        ($_SERVER['REQUEST_URI']=='/index.php')? $_SESSION['targetUrl']='/home.php': $_SESSION['targetUrl']=$_SERVER['REQUEST_URI'];     
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

/*---------------------------REQUESTS----------------------- */

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