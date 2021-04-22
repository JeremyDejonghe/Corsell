<?php
require_once("header-soft.php");
?>
<main class="main-registration">

    <div class="div-p-title-registration">
        <p>"Hey moussaillon! </p>
        <p>Si tu veux faire partie du plus grand marché des Caraïbes c'est par ici! YARG! "</p>
    </div>

    <div class="container-form-registration">
        <h1>Éditer votre compte</h1>
        <?= $message ?>
        <form action="" method="post" class="form-registration">
            <div class="divone-form-registration">
                <div class="form-div-registration">
                    <label for="firstname" class="label-form-div-registration">Prénom </label>
                    <input type="text" name="firstname" id="firstname" value="<?= isset($data["firstname"]) ? $data["firstname"] : "" ?>"  required>
                </div>
                <div class="form-div-registration">
                    <label for="lastname">Nom </label>
                    <input type="text" name="lastname" id="name" value="<?= isset($data["lastname"]) ? $data["lastname"] : "" ?>"  required>
                </div>

                <div class="form-div-registration">
                    <label for="pseudo" class="label-form-div-registration">Pseudo </label>
                    <input type="text" name="pseudo" id="pseudo" value="<?= isset($data["pseudo"]) ? $data["pseudo"] : "" ?>"   required>
                </div>
                <div class="form-div-registration">
                    <label for="age">Âge </label>
                    <p>Seul les pirates de 18 à 100 ans sont accepté(e)s </p>
                    <input type="number" id="age" name="age" min="18" max="100" value="<?= isset($data["age"]) ? $data["age"] : "" ?>"   >
                </div>
            </div>

            <div class="divone-form-registration">

                
                <div class="form-div-registration">
                    <label for="avatar" class="label-form-div-registration">Avatar </label>
                    <input type="text" name="avatar" id="avatar" placeholder="Url de l'image de l'avatar" value="<?= isset($data["avatar"]) ? $data["avatar"] : "" ?>"   required>
                </div>
               
                <div class="form-div-registration">
                    <label for="adress">Votre adresse</label>
                    <p>Ex: 16 rue du Rhum-33160-Tortuga</p>
                    <textarea id="adress" name="adress" rows="3" cols="20"  ><?= isset($data["adress"]) ? $data["adress"] : "" ?></textarea>
                </div>
                <div class="form-div-registration">
                    <label for="job-select" class="label-form-div-registration">Vous êtes?</label>
                    <select name="id_users_category" id="job-select">
                    <?php
                    foreach ($jobs as $job) {
                    ?>

                        <option value="<?= $job["id"] ?>" <?= isset($data["id_users_category"]) && ($job["id"] == $data["id_users_category"]) ? "selected" : "" ?>> <?= $job["name"] ?></option>
                    <?php
                    }
                    ?>
                    </select>
                </div>
                <div class="button-form-div-registration">
                    <input type="submit" value="Éditer vos informations de compte">
                </div> 
            </div>

        </form>

    </div>

</main>

<?php
require_once("footer.php");
?>