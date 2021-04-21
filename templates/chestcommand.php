<?php
require_once("header.php");
?>
<main>
    <div class="products-wrapper">
        <?php foreach ($products as $product) { ?>

            <div class="product">
                <div class="product-img">
                    <a href="./product&<?= $product["id"] ?>">
                        <img src="assets/img/<?= $product["picture"] ?>" alt="">
                    </a>
                </div>
                <div class="product-information">
                    <p><?= $product["name"] ?></p>
                    <p><?= $product["price"] ?> Couronnes</p>
                    <p>Total :<?= $total ?> Couronnes</p>
                </div>
            </div>

        <?php } ?>
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
            <input type="submit" value="Valider votre commande">
        </div>
    </form>
    <?php } else { ?>
    <h1>Votre panier est vide</h1>
    <?php } ?>
</main>

<?php
require_once("footer.php");
?>