<?php
require_once("header-soft.php");
?>

<main class="main-registration">

    <div class="div-p-title-registration">
        <p>"Hey moussaillon! </p>
        <p>Si tu veux faire partie du plus grand marché des Caraïbes c'est par ici! YARG! "</p>
    </div>

    <div class="container-form-registration">
        <h1>Editer un produit</h1>
        <?= $message ?>
        <form action="" enctype="multipart/form-data" method="post" class="form-registration">
                <div class="divone-form-registration">

                    <div class="form-div-registration">
                        <label for="name">Nom </label>
                        <input type="text" name="name" id="name" value="<?= isset($data["name"]) ? $data["name"] : $product["name"] ?>" required>
                    </div>

                    <div class="form-div-registration">
                        <?= $errors["message"] ?>
                        <label for="picture" class="label-form-div-registration">Image </label>
                        <input type="file" name="picture" id="picture" value="<?= isset($data["picture"]) ? $data["picture"] : $product["picture"] ?>" required>
                    </div>



                    <div class="form-div-registration">
                        <label for="price">Prix </label>
                        <input type="number" id="price" name="price" min="1" value="<?= isset($data["price"]) ? $data["price"] : $product["price"] ?>">
                    </div>

                    <div class="form-div-registration">
                        <label for="promo">Promo </label>
                        <p>Il est très mal vu par notre  clientèle d'avoir un prix promo supérieur au prix d'origine </p>
                        <input type="number" id="promo" name="promo" min="1"  value="<?= isset($data["promo"]) ? $data["promo"] : $product["promo"] ?>">
                    </div>

                    <div class="form-div-registration">

                        <label for="quantity">Quantité </label>

                        <input type="number" id="quantity" name="quantity" min="1" value="<?= isset($data["quantity"]) ? $data["quantity"] : $product["quantity"] ?>">
                    </div>

                </div>

                <div class="divone-form-registration">

                    <div class="form-div-registration">
                        <label for="description">Description du produit</label>
                        <p>Ex: Voici une sublime jambe de bois faite en reste d'épave</p>
                        <textarea id="description" name="description" rows="3" cols="20"><?= isset($data["description"]) ? $data["description"] : $product["description"] ?></textarea>
                    </div>



                    <div class="form-div-registration">
                        <label for="category-select" class="label-form-div-registration">Quelle est la catégorie du produit?</label>
                        <select name="category" id="category-select" onchange="selected()">
                            <option value=""></option>
                            <?php
                            foreach ($categorys as $category) {
                            ?>

                                <option value="<?= $category["id"] ?>" <?= isset($data["category"]) && ($category["id"] == $data["category"]) ? "selected" : "" ?>> <?= $category["name"] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>


                    <div class="form-div-registration">
                        <label for="subcategory-select" class="label-form-div-registration">Quelle est la sous-catégorie du produit?</label>
                        <select name="subcategory" id="subcategory-select">

                        </select>
                    </div>


                    <div class="form-div-registration">
                        <label for="brand-select" class="label-form-div-registration">Quelle est la marque du produit ?</label>
                        <select name="brands" id="brand-select">
                            <?php
                            foreach ($brands as $brand) {
                            ?>

                                <option value="<?= $brand["id"] ?>" <?= isset($data["brands"]) && ($brand["id"] == $data["brands"]) ? "selected" : "" ?>> <?= $brand["name"] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="button-form-div-registration">
                        <input type="submit" value="Editer un produit">
                    </div>
                </div>
           
        </form>

    </div>

</main>


<?php
require_once("footer.php");
?>

<script src="./assets/js/subcategory.js"></script>

