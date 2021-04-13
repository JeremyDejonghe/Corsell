<?php
require_once("header.php");
?>

<main class="mainBrands">

    <div class="titleBrands">
        <h1>Nos marques partenaires</h1>
    </div>

    <div class="cardsBrands">

        <?php
        foreach ($brands as $brand) {

            $id = $brand["id"];
        ?>
            <a href="./brands&<?= $id ?>">
                <div class="cardBrand">
                    <img src="assets/img/Marques/<?= $brand["picture"] ?>" alt="">
                </div>
            </a>

        <?php }
        ?>
    </div>

</main>

<?php
require_once("footer.php");
?>