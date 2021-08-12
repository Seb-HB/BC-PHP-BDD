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

        session_start();
        //charge les variables
        include "includes/vars.php";
        //charge les fonctions
        include "includes/functions.php";

        // puis lance le traitement des arguments get
        treatGetArguments();

        $bdd=connectBDD();

        $_SESSION['articles'] =getSomeProducts($bdd, 5);


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
            
        if(!isset($_SESSION['panier'])){
            $_SESSION['panier']=[];
            $_SESSION['panier']['totalArticle']=0;
        }
        
        // $_SESSION['magasin']=[
        //     [
        //         'name'=>'Croquettes chien SweetFood 2Kg',
        //         'description'=>'Les meilleurs croquettes pour la santé de votre chien. Version 2Kg',
        //         'Price'=>'8.99',
        //         'image'=>'sweet_food.png'
        //     ],
        //     [
        //         'name'=>'Croquettes chien SweetFood 5Kg',
        //         'description'=>'Les meilleurs croquettes pour la santé de votre chien. Version 5Kg',
        //         'Price'=>'12.80',
        //         'image'=>'sweet_food.png'
        //     ],
        //     [
        //         'name'=>'Croquettes chien SweetFood 10Kg',
        //         'description'=>'Les meilleurs croquettes pour la santé de votre chien. Version 10Kg',
        //         'Price'=>'19.99',
        //         'image'=>'sweet_food.png'
        //     ],
        //     [
        //         'name'=>'Croquettes Chat Pourina 2Kg',
        //         'description'=>'Les meilleurs croquettes pour la santé de votre chien. Version 2Kg',
        //         'Price'=>'9.99',
        //         'image'=>'noImage.png'
        //     ],
        //     [
        //         'name'=>'Croquettes Chat Pourina 5Kg',
        //         'description'=>'Les meilleurs croquettes pour la santé de votre chien. Version 5Kg',
        //         'Price'=>'16.98',
        //         'image'=>'noImage.png'
        //     ],
        // ];
                
        include "includes/header.php"; 
    ?>
    <div id="slider">
        <div class="slide">
            <img src="img/slider1.png" alt="Image d'un chien et d'un chat">
            <div>
                <p>Offrez-leur le meilleur</p>
                <p>Découvrez nos services 3.0</p>
                <a href="#" class="btn btn-gold">Mettez leur des étoiles dans les yeux</a>
            </div>
        </div>
        <div class="slide">
            <img src="img/slider1.png" alt="Image d'un chien et d'un chat">
            <div>
                <p>Offrez-leur le meilleur</p>
                <p>Découvrez nos services 3.0</p>
                <a href="#" class="btn btn-gold">Mettez leur des étoiles dans les yeux</a>
            </div>
        </div>
        <div class="slide">
            <img src="img/Slider2.png" alt="Image d'une fusée dans l'espace">
            <div>
                <p>Notre programme EXCLUSIF</p>
                <p>Envoyez votre compagnon dans l'espace</p>
                <p>En partenariat avec la NASA</p>
                <a href="#" class="btn btn-gold">Décollage</a>
            </div>
        </div>
    </div>
    <main>
        <section id="category" class="reduce flex">
            <a class="fifty" href="food.html"><img class="responsive" src="img/Alimentation.png" alt="Photo de nourriture pour animaux"></a>
            <a class="fifty" href="Accessories.html"><img class="responsive" src="img/Accéssoires.png" alt="photo d'accessoires pour animaux"></a>
            <a class="fifty" href="Services.html"><img class="responsive" src="img/Nos Services.png" alt="Photo d'un dogsitter"></a>
            <a class="fifty" href="Advices.html"><img class="responsive" src="img/Nos Conseils.png" alt="un véterinaire tenant un lézard"></a>
        </section>
        <section id="best-of" class="relative align-center bg-grey">
            <h2>Nos best-sellers</h2>
            <div class="reduce flex">
                <?php
                    foreach ($_SESSION['articles'] as $product){
                        echo('
                            <div class="product two-col InBl">
                                <img class="responsive" src="img/'.$product['PhotoName'].'" alt="'.$product['altValue'].'">
                                <div class="InfoProduct">
                                    <div class="max-left">'.$product['productName'].'</div>
                                    <div><img src="img/ico/Cat-alim-ico.png" alt="catégorie alimentation" class="max-right"></div>
                                    <div class="Prix">'.$product['prix'].'€</div>
                                    <div><a href="addToCart.php" class="btn btn-gold">Ajouter</a></div>
                                </div>
                            </div>
                        ');
                    }
                ?>
            </div>
            <img src="img/chatsurbloc.png" alt="Chat accoudé sur le bloc"  class="absolute " id="FirstCat">
            <img src="img/chatjoueurbestsellers.png" alt="Chat qui essaie d'attraper les produits"  id="SecondCat" class="absolute">
        </section>
        <section id="avis">
            <h2>Déja des centaines de clients satisfaits</h2>
            <div class="reduce flex">
                <img src="img/Commentaire1.png" alt="" class="quart">
                <img src="img/Commentaire2.png" alt="" class="quart">
                <img src="img/Commentaire3.png" alt="" class="quart">
                <img src="img/Commentaire4.png" alt="" class="quart">
            </div>
            <div class="reduce">
                <div class="tiers InBl">
                    <img src="img/ico/Avis-paiement-securisé.png" alt="" width="150px">
                    <h3>Paiements<br>sécurisés</h3>
                </div>
                <div class="tiers InBl">
                    <img src="img/ico/Avis-livraison24H.png" alt="">
                    <h3>Livraison<br>en 24H</h3>
                </div>
                <div class="tiers InBl">
                    <img src="img/ico/Avis-refund.png" alt="" >
                    <h3>Satisfait ou<br>remboursé 30 jours</h3>
                </div>
                <div class="tiers InBl">
                    <img src="img/paiement-secu.png" alt="" width="115px">
                    <h3>Paiements<br>sécurisés</h3>
                </div>
                <div class="tiers InBl">
                    <img src="img/livraison-24h-chronometre.png" alt="" width="150px">
                    <h3>Livraison<br>en 24H</h3>
                </div>
                <div class="tiers InBl">
                    <img src="img/ico/Avis-remboursement.png" alt="" >
                    <h3>Satisfait ou<br>remboursé 30 jours</h3>
                </div>
            </div>
        </section>
        <section class="relative bg-grey">
            <h2>Nos services 3.0</h2>
            <article class="flex fifty m-auto">
                <div class="four-col flex column fifty">
                    <h3 class="align-left">Un programme de l'armée Américaine</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis consectetur, obcaecati assumenda nostrum ipsum enim soluta unde delectus, nam impedit earum dolorem itaque eveniet praesentium possimus voluptas sit repellat eaque.</p>
                    <img class="responsive" src="img/Servives_chien.png" alt="chien soldat">
                </div>
                <div class="four-col flex column fifty">
                    <img class="responsive" src="img/Services_astronaute.png" alt="voyage dans l'espace">
                    <h3 class="align-left">Envoyez votre compagnon dans l'espace</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio veniam voluptatum perferendis porro, laudantium labore dolorem possimus mollitia pariatur, fuga dicta illo ipsum tenetur, nihil eaque iure vitae dolor rerum.</p>
                </div>
            </article>
            <a href="#" class="btn btn-gold">Plus de détails</a>
            <img src="img/chiots_appuyés.png" alt="" class="absolute" id="dogs">
            <img src="img/fusée.png" alt="" class="absolute" id="fusee" />
        </section>
        <section class="reduce align-center">
            <figure class="tiers InBl">
                <img src="img/Capard.png" alt="Photo du fondateur">
                <figcaption>M Capard, le fondateur</figcaption>
            </figure>
            <div class="tiers InBl">
                <h2>Qui sommes nous?</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere atque itaque voluptate magni. Ex doloribus, ratione libero nisi placeat aspernatur consequatur
                     quas accusamus nemo cupiditate! Sequi qui quis eaque sed? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic nesciunt culpa aliquam earum voluptate
                     amet rerum dolorum eius. Deleniti quaerat, adipisci eveniet magni totam et eum corrupti delectus corporis earum? Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Consequuntur, inventore! Facilis ullam incidunt expedita ad at a dolorem nesciunt distinctio, laboriosam enim, pariatur assumenda rem possimus minima perspiciatis consectetur minus!
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere atque itaque voluptate magni. Ex doloribus, ratione libero nisi placeat aspernatur consequatur
                      quas accusamus nemo cupiditate!</p>
            </div>
            <div class="tiers InBl">
                <figure>
                    <img src="img/boutique.png" alt="l'interieur de notre boutique">
                    <figcaption>Notre boutique</figcaption>
                </figure>
            </div>
        </section>
    </main>
    <?php include "includes/footer.php" ?>
</body>
</html>