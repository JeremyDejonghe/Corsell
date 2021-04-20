<?php
require_once("header.php");
?>

<main class="espaceUser-container">


    <div class="baniere-Usercategories">
        <div class="espaceUser-title">
            <h1>“Oyé <span><?= $userInfos["pseudo"] ?></span> !”</h1>
            <div class="avatar-user"><img src="<?= $userInfos["avatar"] ?>" alt=""></div>
        </div>
        <div class="user-categories">
            <a href="./mesventes">
                <div class="user-category">
                    <div class="img-Usercategory">
                        <img src="assets/img/EspaceUserImg/caisse.png" alt="">
                    </div>
                    <div class="title-Usercategory">
                        <h2>Vos ventes</h2>
                        <p>Suivre vos ventes</p>
                    </div>
                </div>
            </a>

            <a href="./security">
                <div class="user-category">
                    <div class="img-Usercategory">
                        <img src="assets/img/EspaceUserImg/lock.png" alt="">
                    </div>
                    <div class="title-Usercategory">
                        <h2>Sécurité</h2>
                        <p>Modifier vos paramètres</p>
                    </div>
                </div>
            </a>

            <a href="./erre">
                <div class="user-category">
                    <div class="img-Usercategory">
                        <img src="assets/img/EspaceUserImg/erre.png" alt="">
                    </div>
                    <div class="title-Usercategory">
                        <h2>Cor-sell Erre</h2>
                        <p>Voir les avantages</p>
                    </div>
                </div>
            </a>

            <a href="./mesproduitsvendus">
                <div class="user-category">
                    <div class="img-Usercategory">
                        <img src="assets/img/EspaceUserImg/productMarchand.png" alt="">
                    </div>
                    <div class="title-Usercategory">
                        <h2>Vos produits</h2>
                        <p>Gérer vos produits vendus</p>
                    </div>
                </div>
            </a>

            <a href="./corsellmobile">
                <div class="user-category">
                    <div class="img-Usercategory">
                        <img src="assets/img/EspaceUserImg/Cor-sellMobile.png" alt="">
                    </div>
                    <div class="title-Usercategory">
                        <h2>Application Cor-sell Mobile</h2>
                        <p>Télécharger l'application</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="baniere-products">
        <h1>Un petit coup d'oeil sur les produits de la concurrence :</h2>
        <?php foreach ($products as $product) { ?>
            <a href="./product&<?=$product["id"]?>"><div class="product-item">
                <img src="assets/img/<?= $product["picture"] ?>" alt="">
                <h2><?= $product["name"] ?></h2>
            </div></a>
        <?php } ?>
    </div>
</main>

<?php
require_once("footer.php");
?>