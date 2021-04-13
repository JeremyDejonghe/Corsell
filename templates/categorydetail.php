<?php
require_once("header.php");
?>

<?php 
require_once("aside.php");
?>

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