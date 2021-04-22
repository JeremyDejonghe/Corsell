<?php
if (isset($_SESSION["user_category"]) && $_SESSION["user_category"] == 1) {
    $url = "espacepirate";
} elseif (isset($_SESSION["user_category"]) && $_SESSION["user_category"] == 2) {
    $url = "espacemarchand";
} elseif (isset($_SESSION["user_category"]) && $_SESSION["user_category"] == 1) {
    $url = "espacecorsaire";
} else {
    $url = "";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cor-Sell</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="icon" href="assets/img/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,400;0,600;0,800;1,400;1,600;1,800&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="logo">
            <a href="./"><img src="assets/img/Cor-Sell_Logo.png" alt=""></a>
        </div>
        <div class="nav1">

            <div class="title">
                <h1>Cor-Sell</h1>
            </div>
            <form action="./search" method="GET" class="search">
                <label for="inputSearch"></label>
                <input type="text" name="search" id="inputSearch" placeholder="Rechercher un produit">
            </form>
            <?php if (!empty($_SESSION["user_name"])) { ?>
                <div class="bonjour">
                    <a href="./<?= $url ?>">
                        <p>Bonjour, <span><?= $_SESSION["user_name"] ?></span></p>

                        <p>Compte</p>
                    </a>
                </div>

            <?php } else { ?>
                <div class="bonjour">
                    <a href="./connexion">
                        <p>Bonjour, <span>Identifiez-vous</span></p>

                        <p>Compte</p>
                    </a>
                </div>
            <?php } ?>
            <?php if (!empty($_SESSION["user_name"])) { ?>
                <div class="command">
                    <a href="./command">
                        <p>Vos</p>

                        <p>Commandes</p>
                    </a>
                </div>
            <?php } else { ?>
                <div class="command">
                    <a href="./connexion">
                        <p>Vos</p>

                        <p>Commandes</p>
                    </a>
                </div>
            <?php } ?>
            <?php if (!empty($_SESSION["user_name"])) { ?>
                <div class="panier">
                    <a href="./chest">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="iconify iconify--mdi" width="50" height="50" viewBox="0 0 24 24">
                            <path d="M5 4h14a3 3 0 013 3v4h-7v-1H9v1H2V7a3 3 0 013-3m6 7h2v2h-2v-2m-9 1h7v1l2 2h2l2-2v-1h7v8H2v-8z" fill="currentColor" />
                        </svg>
                        <p>Coffre</p>
                    </a>
                </div>
            <?php } else { ?>
                <div class="panier">
                    <a href="./connexion">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="iconify iconify--mdi" width="50" height="50" viewBox="0 0 24 24">
                            <path d="M5 4h14a3 3 0 013 3v4h-7v-1H9v1H2V7a3 3 0 013-3m6 7h2v2h-2v-2m-9 1h7v1l2 2h2l2-2v-1h7v8H2v-8z" fill="currentColor" />
                        </svg>
                        <p>Coffre</p>
                    </a>
                </div>
            <?php } ?>
            <?php if (!empty($_SESSION["user_name"])) { ?>
                <div class="logout">
                    <a href="./logout">Se déconnecter</a>
                </div>
            <?php } else { ?>
                <div class="logout-hiden">

                </div>
            <?php } ?>
            <div class="note">
                <audio preload="auto" loop id="myAudio" src="./assets/audio/wellerman.mp3">
                </audio>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M12 3v10.55A4 4 0 1 0 14 17V7h4V3m-1.5 17a1.5 1.5 0 1 1 1.5-1.5a1.5 1.5 0 0 1-1.5 1.5z" fill="currentColor"></path></svg>
            </div>
        </div>
        <div class="nav2">
            <a href="./bestsells">
                <p>Meilleures Ventes</p>
            </a>
            <a href="./categories">
                <p>Nos catégories</p>
            </a>

            <a href="./lastnew">
                <p>Dernières Nouveautés</p>
            </a>
            <a href="./essentials">
                <p>Les essentiels du pirate</p>
            </a>
            <a href="./categorydetail&4">
                <p>Navires</p>
            </a>
            <a href="./categorydetail&6">
                <p>Victuailles</p>
            </a>
            <a href="./categorydetail&2">
                <p>Armes</p>
            </a>
            <a href="./categorydetail&3">
                <p>Matières premières</p>
            </a>
            <a href="./brands">
                <p>Nos Marques</p>
            </a>

        </div>
    </header>