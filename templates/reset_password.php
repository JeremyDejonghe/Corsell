<?php
require_once("header-soft.php");

?>
<div class="div-p-title-registration">
    <p>"Attention aux pirates !</p>
    <p>Mieux vaut bien se protéger."</p>
</div>
<main class="connexion-container">
    <div class="element-block">
        <h2>Modification du mot de passe</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="inputPassword">Mot de passe</label>
                <input type="password" name="password" id="inputPassword">
            </div>
            <div class="form-group">
            <label for="inputPasswordConfirm">Confirmer le mot de passe</label>
                <input type="passwordConfirm" name="passwordConfirm" id="inputPasswordConfirm">
            </div>
            <a class="btn-security" href="./">Valider le changement de mot de passe</a>
        </form>
    </div>
</main>
<?php
require_once("footer.php");
?>