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
                    <a href="./subcategorydetail&<?= $subids[$index] ?>">
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
            foreach ($subcategories as $subcategory) {
            ?>
                <div class="sub-title">
                    <h2><?= $subcategory["name"] ?></h2>
                </div>

                <?php

                foreach ($products[$subcategory["id"]] as $product) {
                ?>

                    <a href="./product&<?= $product["productid"] ?>">
                        <div class="elementcard">
                            <img src="assets/img/<?= $product["picture"] ?>" alt="">
                            <p><?= $product["productname"] ?></p>
                        </div>
                    </a>
                    
            <?php }?>
          
<a class="other-products"href="./subcategorydetail&<?= $subcategory["id"] ?>">...</a><?php } ?>  
        </div>
    </div>


</main>
<?php
require_once("footer.php");
?>