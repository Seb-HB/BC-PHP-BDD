
<div id="login-form">

    <div>
        <div>
            <a href="index.php?cancel=1">X</a>
        </div>
        <form action="index.php" method="post">
            <label for="name">Pseudo <input id="name" name='id' type="text"></label>
            <label for="password">Mot de passe<input id='password' name='pass' type="password"></label>
            <button class='btn btn-gold' type="submit" name="connect">Connexion</button>
        </form>
        <a href="">Mot de passe oublié</a>
        <br>
        <a href="">Créer un compte</a>
    </div>

    <?php
        if(isset($_POST['pass']) || isset($_POST['id'])){
            echo('<div><p>Saisie non valide</p> </div');
        }
    ?>
</div>



