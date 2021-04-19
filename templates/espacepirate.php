<?php
require_once("header.php");

?>

<main class="espaceUser-container">


    <div class="baniere-Usercategories">
        <div class="espaceUser-title">
            <h1>“Oyé <?= $userInfos["pseudo"] ?> !”</h1>
            <div class="avatar-user"><img src="<?= $userInfos["avatar"] ?>" alt=""></div>
        </div>
        <div class="user-categories">
            <a href="./mesCommandes">
                <div class="user-category">
                    <div class="img-Usercategory">
                        <img src="assets/img/EspaceUserImg/caisse.png" alt="">
                    </div>
                    <div class="title-Usercategory">
                        <h2>Vos commandes</h2>
                        <p>Suivre ou acheter à nouveau </p>
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

            <a href="./mesAdresses">
                <div class="user-category">
                    <div class="img-Usercategory">
                        <img src="assets/img/EspaceUserImg/adress.png" alt="">
                    </div>
                    <div class="title-Usercategory">
                        <h2>Adresse</h2>
                        <p>Modifier les adresses et les préférences de livraison</p>
                    </div>
                </div>
            </a>

            <a href="./corsellMobile">
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
        <h1>Produits qui pourraient vous plaire :</h2>
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