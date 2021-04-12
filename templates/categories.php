<?php
require_once("header.php");
?>

<main class="mainCategories">

    <div class="titleCategories">
        <h2>Choisissez un produit parmi les catégories suivantes</h2>
    </div>

    <div class="cardsCategories">

        <?php
                foreach ($categories as $category) {

                    $id=$category["id"];
                ?>
            <a href="./categorydetail&<?= $id ?>"><div class="cardCategory">
               <img src="assets/img/Logo_categories/<?= $category["picture"] ?>" alt=""> 
                <h2><?= $category["name"] ?></h2>
            </div></a>

        <?php }
        ?>
    </div>

</main>

<?php
require_once("footer.php");
?>