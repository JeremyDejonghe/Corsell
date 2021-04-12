<?php
require_once("header.php");
?>
<main class="categories-container">

    <div class="vertical-banner">
        <div class="banner-title">
            <p>Toutes les catégories</p>
        </div>
        <?php
        foreach ($categories as $category) {
            $subnames = explode(",", $category["subname"]);
            $subids = explode(",", $category["subid"]);
            $id = $category["id"];

        ?>

            <div class="category-title"><img src="./assets/img/Logo_categories/<?= $category["picture"] ?>"></img><a href="./categorydetail&<?= $id ?>">
                    <ul><?= $category["name"] ?></ul>
                </a>
            </div>
            <div class="subcategory-title">
                <!-- Boucle qui récupère à la fois le nom et l'id de la subcategory. Id récupéré par la variable $index -->
                <?php foreach ($subnames as $index => $subname) { ?>
                    <a href="<?= $subids[$index] ?>">
                        <li><?= $subname ?></li>
                    </a>
                <?php } ?>
            </div>
        <?php } ?>
    </div>

    <div class="elements-container">
        <div class="element-title">
            <?php
            foreach ($categoriesname as $categoryname) {
            ?>

                <h1><?= $categoryname ?></h1>
            <?php } ?>

            <p>Nos produits dans la catégorie : <?= $categoryname ?></p>
        </div>
        <div class="horizontal-banner">
            <?php
            foreach ($subcategoriesname as $subcategoryname) {
            ?>
                <h2><?= $subcategoryname["name"] ?></h2>


                <?php
              
                    foreach ($subcategories as $subcategory) {
                ?>
                        <div class="element-banner">
                            <img src="" alt="">
                            <p><?= $subcategory["productname"] ?></p>
                        </div>
                <?php }
                } ?>
           
        </div>
    </div>


</main>
<?php
require_once("footer.php");
?>