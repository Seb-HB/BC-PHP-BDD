<?php
// recupere les arguments GET et les traite
function treatGetArguments(){
    // cas où il y a des arguments
    if (count($_GET)>0){
        foreach($_GET as $argument=> $value){
            switch($argument){
                case 's':
                    switchTheme(stristr($_SERVER['REQUEST_URI'], '?', true));
                    $_SESSION['targetUrl']=getActiveUrlWithoutArguments();
                    break;
                case 'log':
                    $_SESSION['login']=true;
                    $_SESSION['targetUrl']=getActiveUrlWithoutArguments();
                    break;
                case 'deco':
                    disconnect();
                    $_SESSION['targetUrl']=getActiveUrlWithoutArguments();
                    break;
                case 'cancel':
                    $_SESSION['login']=false;
                    $_SESSION['targetUrl']=getActiveUrlWithoutArguments();
                case 'page':
                    $_SESSION['targetUrl']='/'.$value.'php';
                    break;
                default:
                    $_SESSION['targetUrl']=getActiveUrlWithoutArguments();
            }
        }
    }else{
        //si la cible est l'index (index. php ou /), redirige vers pages/home.php
        ($_SERVER['REQUEST_URI']=='/index.php' || $_SERVER['REQUEST_URI']=='/')? $_SESSION['targetUrl']='/home.php': $_SESSION['targetUrl']=$_SERVER['REQUEST_URI'];     
    }
    if($_SESSION['targetUrl']='/') $_SESSION['targetUrl']='/home.php';
}

function treatPostForms(){

    if(isset($_POST['pass']) && isset($_POST['id'])){
        foreach($_SESSION['users'] as $user){
            if ($user['id']==$_POST['id'] and $user['pass']==$_POST['pass']){
                $_SESSION['activeUser']=$_POST['id'];
                $_SESSION['login']=false;
            }
        }
    }


}

//renoie l'Url d'où vient la requete, mais sans les arguments GET
function getActiveUrlWithoutArguments() {
    return (stristr($_SERVER['REQUEST_URI'], '?', true)) ? stristr($_SERVER['REQUEST_URI'], '?', true) : $_SERVER['REQUEST_URI'];
}


?>