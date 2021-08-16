<?php

//crée un objet PDO pour se connecter à la BDD
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

//renvoie $nb produits depuis la BDD
// $nb peut être égal à all, auquel cas on récupère tous les produits
function getSomeProducts($bdd, $nb){
    global $productDetailRequest;
    $request=$productDetailRequest;
    if(is_numeric($nb)){
        $request=$request.' LIMIT '.$nb;
    }
    $result=$bdd->query($request);
    return $result->fetchAll();
}


//revoie toutes les catégories principales, sans les sous categories
function getParentsCategories($bdd){
    global $parentsCategoriesRequest;
    $parentCategories=$bdd->query($parentsCategoriesRequest);
    return $parentCategories->fetchAll();
}


//renvoie toutes les sous catégories, triées par catégorie parente
function getSortedChildCategories($bdd){
    global $sortedChildrenCategoriesRequest;
    $ChildrensCategories=$bdd->query($sortedChildrenCategoriesRequest);
    return $ChildrensCategories->fetchAll();
}



?>
