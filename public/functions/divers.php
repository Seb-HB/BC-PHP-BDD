<?php

//renvoie le bon répertoire pour les icones en fonction du thème choisi
function getThemePath(){
    if (isset($_COOKIE['theme']) && $_COOKIE['theme']=='dark'){
        return 'img/ico/dark/';
    }
    return 'img/ico/';
}

function disconnect(){
    session_unset();
}

