<?php
    session_start();
    if(isset($_POST['pass']) && isset($_POST['id'])){
        foreach($_SESSION['users'] as $user){
            if ($user['id']==$_POST['id'] and $user['pass']==$_POST['pass']){
                $_SESSION['activeUser']=$_POST['id'];
                header('Location:../index.php');
                exit();
            }
        }
    }
?>

<form action="Login.php" method="post">
    <label for="name">Pseudo <input id="name" name='id' type="text"></label>
    <label for="password">Mot de passe<input id='password' name='pass' type="password"></label>
    <button type="submit" name="connect">Connexion</button>
</form>



<?php
    if(isset($_POST['pass']) || isset($_POST['id'])){
?>
    <div>
        <p>Saisie non valide</p>
    </div>

<?php
    }
?>