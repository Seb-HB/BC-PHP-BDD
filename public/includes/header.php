<?php
    if(!isset($_SESSION['panier'])){
        $_SESSION['panier']=[];
        $_SESSION['panier']['totalArticle']=0;
    }
?>

<header>
        <a href="index.php"><img src="img/logo.png" alt="logo la Nîmes'alerie" class="absolute" id="Logo"></a>
        <div id="InfoBar">
            <div class="reduce">
                <div class="tiers">
                    <img src="img/ico/Livraison blanc 1.png" alt="" >
                    <span> rapide 24H</span>
                </div>
                <div class="tiers flex-center">
                    <img src="img/ico/rembourser blanc 1.png" alt="">
                    <span>Remboursement sous 30 jours</span>
                </div>
                <div class="tiers flex-right">
                    <img src="img/ico/securite blanc 1.png" alt="">
                    <span>Paiement sécurisé</span>
                    <img src="img/ico/logos paiement.png" alt="logos visa et paypal">
                </div>
            </div>
        </div>
        <div id="Navbar">
            <div class="InBl">
                <nav>
                    <ul>
                        <li><a href="food.html">Alimentation</a>
                            <div id="sousmenu">
                                <div>
                                    <img src="img/deco/barre-alim.png" alt="">
                                </div>
                                <div id="ss-menu-items">
                                    <div class="itemscolumn tiers">
                                        <a href="" >Croquettes chien<br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                        <a href="" >Croquettes chat <br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                        <a href="" >patées <br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                    </div>
                                    <div class="itemscolumn tiers">
                                        <a href="">Friandises <br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                        <a href="">Insectes vivants<br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                        <a href="">Foin & granulés <br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                    </div>
                                    <div class="itemscolumn tiers">
                                        <a href="">Graines & épis <br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                        <a href="">Aliments poissons<br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                        <a href="">Aliments reptiles <br> <img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="Accessories.html">Accessoires</a>
                            <div id="sousmenu">
                                <div>
                                    <img src="img/deco/barre-access.png" alt="">
                                </div>
                                <div id="ss-menu-items">
                                    <div class="itemscolumn tiers">
                                        <a href="" >Jouets <br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                        <a href="" >Colliers & laisses<br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                        <a href="" >Vêtements <br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                    </div>
                                    <div class="itemscolumn tiers">
                                        <a href="">Dressage <br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                        <a href="">Transport <br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                        <a href="">Soins & hygiène <br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                    </div>
                                    <div class="itemscolumn tiers">
                                        <a href="">Oisellerie <br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                        <a href="">Aquariophilie <br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                        <a href="">Terrariophilie <br> <img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="Services.html">Services</a>
                            <div id="sousmenu">
                                <div>
                                    <img src="img/deco/barre-services.png" alt="">
                                </div>
                                <div id="ss-menu-items">
                                    <div class="itemscolumn tiers">
                                        <a href="" >Programme spatial<br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                        <a href="" >Toilettage<br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                        <a href="" >Garde à domicile<br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                    </div>
                                    <div class="itemscolumn tiers">
                                        <a href="">Pet-sitter<br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                        <a href="">Dressage<br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                        <a href="">Traiteur<br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                    </div>
                                    <div class="itemscolumn tiers">
                                        <a href="">Taxi animalier<br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                        <a href="">Scéance photo<br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                        <a href="">Sous Catégorie<br> <img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="Advices.html">Conseils</a>
                            <div id="sousmenu">
                                <div>
                                    <img src="img/deco/barre-conseils.png" alt="">
                                </div>
                                <div id="ss-menu-items">
                                    <div class="itemscolumn tiers">
                                        <a href="" >Quelle Nutrition<br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                        <a href="" >Choisir un chien<br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                        <a href="" >Vaccination<br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                    </div>
                                    <div class="itemscolumn tiers">
                                        <a href="">Soins courants<br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                        <a href="">Puce électronique<br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                        <a href="">Chien ou chat?<br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                    </div>
                                    <div class="itemscolumn tiers">
                                        <a href="">aaaa <br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                        <a href="">bbb <br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                        <a href="">FAQ<br> <img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="Contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div id='connectStatus'>
                <?php
                    // affichage dynamique selon si utilisateur connecté ou pas
                    if(isset($_SESSION['activeUser'])){ 
                        echo('
                            <img src="img/ico/userConnected.png" alt="Utilisateur connecté">
                            Bonjour '.$_SESSION['activeUser'].'
                            <div id="userMenu">
                                <ul>
                                    <li><a href="'.$_SERVER['REQUEST_URI'].'?deco=1"><img src="'.getThemePath().'deconexion.png" alt="Déconnexion">Deconnexion</a></li>
                                    <li><a href="'.$_SERVER['REQUEST_URI'].'?s=s"><img src="'.getThemePath().'theme.png" alt="">Activer le mode</a></li>
                                </ul>
                            </div>

                        ');
                    }else{
                        echo('
                            <img src="img/ico/userDisconnected.png" alt="Utilisateur connecté">
                            <a href="pages/login.php">Se connecter</a>
                        ');
                    }
                ?>
            </div>
            <div id='navCart'>
                <img src="img/ico/panier.png" alt="">
                <?php 
                    // affichage dynamique du nombre d'articles dnas le panier
                    if($_SESSION['panier']['totalArticle']==0){
                        echo('Panier vide');
                    }else{
                        echo($_SESSION['panier']['totalArticle'].' Article(s)');
                    }
                ?>
            </div>
        </div>
    </header>
    