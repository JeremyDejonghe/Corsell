<?php

require_once("header.php");
require_once("aside.php");
?>



    <div class="brand-container">
        <div class="brand-title">
            <h1>Notre partenaire n°<?=$brand["id"]?> </h1>
        </div>

        <div class="brand-detail">
            <div class="brand-img">
                <img src="./assets/img/Marques/<?= $brand["picture"]?>" alt="">
            </div>
            <div class="brand-description">
                <p><?= $brand["description"]  ?></p>
            </div>
        </div>
    </div>
</main>

<?php
require_once("footer.php")
?>