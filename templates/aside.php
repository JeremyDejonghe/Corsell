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