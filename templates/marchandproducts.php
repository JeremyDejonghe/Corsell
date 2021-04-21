<?php
require_once("header.php");
?>

<main class="products-container">

    <div class="main-title">
        <h1>Vos produits</h1>
        <a class="add-product" href="./addproduct">+</a>
    </div>
    <div class="products-banner">
        <?php
        foreach ($products as $product) {
        ?>

            <a href="./product&<?= $product["id"] ?>">
                <div class="productcard">
                    <div class="product-img">
                        <img src="assets/img/<?= $product["picture"] ?>" alt="">
                    </div>
                    <div class="product-info">
                        <p class="product-name"><?= $product["name"] ?></p>
                        <p class="price"><?= $product["promo"] ? "${product["price"]} Couronnes" : "" ?> </p>
                        <p class="promo"><?= $product["promo"] ? $product["promo"] : $product["price"]  ?> Couronnes</p>
                        <a class="delete-btn" href="./delete&<?= $product["id"] ?>"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--fluent" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 28 28"><g fill="none"><path d="M14 2a4 4 0 0 1 3.995 3.8L18 6h5a1 1 0 0 1 .117 1.993L23 8h-.849l-1.18 14.553A3.75 3.75 0 0 1 17.233 26h-6.466a3.75 3.75 0 0 1-3.738-3.447L5.848 8H5a1 1 0 0 1-.993-.883L4 7a1 1 0 0 1 .883-.993L5 6h5a4 4 0 0 1 4-4zm-2.25 9.25a.75.75 0 0 0-.743.648L11 12v8l.007.102a.75.75 0 0 0 1.486 0L12.5 20v-8l-.007-.102a.75.75 0 0 0-.743-.648zm4.5 0a.75.75 0 0 0-.743.648L15.5 12v8l.007.102a.75.75 0 0 0 1.486 0L17 20v-8l-.007-.102a.75.75 0 0 0-.743-.648zM14 4a2 2 0 0 0-1.995 1.85L12 6h4l-.005-.15A2 2 0 0 0 14 4z" fill="currentColor"></path></g></svg></a>
                        <a class="edit-btn" href="./editproduct&<?= $product["id"] ?>"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--ic" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM21.41 6.34l-3.75-3.75l-2.53 2.54l3.75 3.75l2.53-2.54z" fill="currentColor"></path></svg></a>
                    </div>
                </div>

            </a>

        <?php } ?>
    </div>

</main>
<?php
require_once("footer.php");
?>