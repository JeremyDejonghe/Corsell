<?php
require_once("header.php");
?>
<main class="chest-container">
    <div class="chest-title">
        <h1>Choisissez votre mode de livraison et votre devise</h1>
    </div>

    <div class="chest-products">
        <?php foreach ($products as $product) { ?>
            <div class="product">
                <a href="./product&<?= $product["id"] ?>">
                    <div class="product-img">
                        <img src="assets/img/<?= $product["picture"] ?>" alt="">
                    </div>
                </a>
                <div class="product-information">
                    <p><?= $product["name"] ?></p>
                    <p class="price"><?= $product["price"] ?> Couronnes</p>

                </div>
            </div>
        <?php } ?>
    </div>
    <div class="total">
        <h2>Total : <span><?= $total ?> Couronnes</span></h2>
    </div>
    <?php if (!empty($_SESSION["chest"])) { ?>
        <form action="" method="post">
            <div class="form-group">
                <select name="id_delivery" id="delivery-select">
                    <?php
                    foreach ($deliveries as $delivery) {
                    ?>

                        <option value="<?= $delivery["id"] ?>" <?= isset($data["id_delivery"]) && ($delivery["id"] == $data["id_delivery"]) ? "selected" : "" ?>> <?= $delivery["name"] ?></option>
                    <?php
                    }
                    ?>
                </select>
                <select name="id_payment" id="payment-select">
                    <?php
                    foreach ($payments as $payment) {
                    ?>

                        <option value="<?= $payment["id"] ?>" <?= isset($data["id_payment"]) && ($payment["id"] == $data["id_payment"]) ? "selected" : "" ?>> <?= $payment["name"] ?></option>
                    <?php
                    }
                    ?>
                </select>
                
            </div>
            <input type="submit" value="Valider votre commande">
        </form>
    <?php } else { ?>
        <h1>Votre panier est vide</h1>
    <?php } ?>
</main>

<?php
require_once("footer.php");
?>