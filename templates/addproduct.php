<?php
require_once("header-soft.php");
?>

<main class="main-registration">

    <div class="div-p-title-registration">
        <p>"Hey moussaillon! </p>
        <p>Si tu veux faire partie du plus grand marché des Caraïbes c'est par ici! YARG! "</p>
    </div>

    <div class="container-form-registration">
        <h1>Ajouter un produit</h1>
        <?= $message ?>
        <form action="" method="post" class="form-registration">
            <div class="divone-form-registration">

                <div class="form-div-registration">
                    <label for="name">Nom </label>
                    <input type="text" name="name" id="name" value="<?= isset($data["name"]) ? $data["name"] : "" ?>" required>
                </div>

                <div class="form-div-registration">
                    <label for="picture" class="label-form-div-registration">Image </label>
                    <input type="file" name="picture" id="picture" placeholder="l'image de votre produit" value="<?= isset($data["picture"]) ? $data["picture"] : "" ?>" required>
                </div>



                <div class="form-div-registration">
                    <label for="price">Prix </label>
                    <input type="number" id="price" name="price" min="1" value="<?= isset($data["price"]) ? $data["price"] : "" ?>">
                </div>

                <div class="form-div-registration">
                    <label for="promo">Promo </label>
                    <p>Il est très mal vue par notre aimable clientèle d'avoir un prix promo supérieur au prix d'origine </p>
                    <input type="number" id="promo" name="promo" min="2" value="<?= isset($data["promo"]) ? $data["promo"] : "" ?>">
                </div>

                <div class="form-div-registration">

                    <label for="quantity">Quantité </label>

                    <input type="number" id="quantity" name="quantity" min="1" value="<?= isset($data["quantity"]) ? $data["quantity"] : "" ?>">
                </div>

            </div>

            <div class="divone-form-registration">

                <div class="form-div-registration">
                    <label for="description">Description du produit</label>
                    <p>Ex: Voici une sublime jambe de bois fait 100% en reste d épave</p>
                    <textarea id="description" name="description" rows="3" cols="20"><?= isset($data["description"]) ? $data["description"] : "" ?></textarea>
                </div>



                <div class="form-div-registration">
                    <label for="category-select" class="label-form-div-registration">Quel est la catégorie du produit?</label>
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
                    <label for="subcategory-select" class="label-form-div-registration">Quel est la sous-catégorie du produit?</label>
                    <select name="subcategory" id="subcategory-select">
                       
                    </select>
                </div>


                <div class="form-div-registration">
                    <label for="brand-select" class="label-form-div-registration">Quel est la marque du produit ?</label>
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
                    <input type="submit" value="Ajouter un produit">
                </div>
            </div>

        </form>

    </div>

</main>


<?php
require_once("footer.php");
?>

<script src="../assets/js/subcategory.js"></script>

<script>
    //document.addEventListener("DOMContentLoaded", async () => {
    const selected = async function() {
        let subcategories = await fetch("./bin/subcategories.php").then(res => res.json())
        const categorySelected = document.getElementById("category-select").value;
        const newSubcategories = subcategories.filter(subcategory => subcategory.id_category == categorySelected);
        console.log(newSubcategories);
      
        document.getElementById("subcategory-select").innerHTML=null;

        newSubcategories.forEach(subcategory => {
            let option = document.createElement("option")
            option.text = subcategory.name
            option.value = subcategory.id
            document.getElementById("subcategory-select").add(option, null)

            console.log(option)


        });

        // document.getElementById("subcategory-select").add(newSubcategories, null)

    }
    //});
</script>