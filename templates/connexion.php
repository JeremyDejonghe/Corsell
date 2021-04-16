<?php
require_once("header-soft.php");

?>
<main class="connexion-container">

    <div class="element-block">
        <h2>S'identifier</h2>
        <?= $message ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="inputEmail">Adresse email</label>
                <input type="email" name="email" id="inputEmail" >
            </div>

            <div class="form-group">
            <label for="inputPassword">Mot de passe</label>
                
                <input type="password" name="password" id="inputPassword" >
            </div>
            <p>En passant votre commande, vous acceptez <span>les Conditions générales de vente</span> de Cor-sell.</p>
            <p class="p-reset"><a href="">Mot de passe oublié ?</a></p>
            <input class="btn-valid" type="submit" value="Se connecter">
        </form>
    </div>

    <a class="registration-btn" href="./registration">Créer votre compte Cor-sell</a>

</main>
<?php
require_once("footer.php");
?>