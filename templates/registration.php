<?php
require_once("header-soft.php");
?>
<main class="main-registration">

    <div class="div-p-title-registration">
        <p>"Hey moussaillon! </p>
        <p>Si tu veux faire partie du plus grand marché des Caraïbes c'est par ici! YARG! "</p>
    </div>

    <div class="container-form-registration">
        <form action="" method="post" class="form-registration">


            <div class="divone-form-registration">
                <div class="form-div-registration">
                    <label for="lastname">Prénom </label>
                    <input type="text" name="lastname" id="lastname" required>
                </div>
                <div class="form-div-registration">
                    <label for="name">Nom </label>
                    <input type="text" name="name" id="name" required>
                </div>

                <div class="form-div-registration">
                    <label for="pseudo">Pseudo </label>
                    <input type="text" name="pseudo" id="pseudo" required>
                </div>
                <div class="form-div-registration">
                    <label for="pass">Mot de passe (8 characters minimum)</label>
                    <input type="password" id="pass" name="password" minlength="8" required>
                </div>
                <div class="form-div-registration">
                    <label for="pass">Entrez le mot de passe à nouveau</label>
                    <input type="password" id="pass" name="password" minlength="8" required>
                </div>
            </div>

            <div class="divone-form-registration">

                <div class="form-div-registration">
                    <label for="age">Âge (seul les pirates de 18 à 100 ans sont accpeter )</label>
                    <input type="number" id="age" name="age" min="18" max="100">
                </div>
                <div class="form-div-registration">
                    <label for="adress">Votre adresse</label>
                    <p>Ex: 16 rue du Rhum-33160-Tortuga</p>
                    <textarea  id="adress" name="adress" rows="3" cols="20" ></textarea>
                </div>
                <div class="form-div-registration">
                    <label for="job-select">Vous êtes?</label>

                    <select name="jobs" id="job-select">
                        <option value="">--Choissisez une option--</option>
                        <option value="pirate">Pirate</option>
                        <option value="marchand">Marchand</option>
                    </select>
                </div>
                <div class="button-form-div-registration">
                    <input type="submit" value="Créer votre compte Cor-sell">
                </div>
            </div>

        </form>

    </div>

</main>

<?php
require_once("footer.php");
?>