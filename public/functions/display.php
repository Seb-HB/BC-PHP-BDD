<?php


// switch entre le thème clair et le thème sombre
function switchTheme($page){
    if (isset($_COOKIE['theme']) && $_COOKIE['theme']=='dark'){
        setcookie('theme', 'light');
    }else{
        setcookie('theme', 'dark');
    }
}

//renvoie les sous menus liés à un menu parent
function getSousMenus($childrens, $idParent){
    $cycle=1;
    $sousMenu='';
    foreach($childrens as $child){
        if ($cycle==1)  $sousMenu+='<div class="itemscolumn tiers">';
        $sousMenu+='<a href="index.php?cat='.$child['Id'].'" >'.$child['nomCat'].'<br><img src="img/deco/séparation-sous-menus.png" alt="ligne séparation"></a>';
        $cycle++;
        if ($cycle==3){
            $sousMenu+='</div>';
            $cycle=1;
        }  
    }
}



?>