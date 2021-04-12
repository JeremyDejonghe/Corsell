<?php
require_once("header.php");
?>
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

            <div class="category-title">
                <img src="./assets/img/Logo_categories/<?= $category["picture"] ?>"></img>
                <a href="./categorydetail&<?= $id ?>">
                    <ul><?= $category["name"] ?></ul>
                </a>
            </div>
            <div class="subcategory-title">
                <!-- Boucle qui récupère à la fois le nom et l'id de la subcategory. Id récupéré par la variable $index -->
                <?php foreach ($subnames as $index => $subname) { ?>
                    <a href="<?= $subids[$index] ?>">
                        <li><?= $subname ?></li>
                    </a>
                <?php } ?>
            </div>
        <?php } ?>
    </div>

    <div class="elements-container">
        <div class="element-information">
            <figure>
                <img src="assets/img/<?= $product["picture"] ?>" alt="" />
            </figure>
            <div class="product-descriptif">
                <h1><?= $product["productName"] ?></h1>
                <p><?= $product["description"] ?></p>
                <div class="product-brand">
                    <a href="./brands&<?= $product["idBrand"] ?>">
                        <img src="assets/img/Marques/<?= $product["pictureBrand"] ?>" alt="" class="brand-icon">
                    </a>
                    <a href="./categorydetail&<?= $product["idCategory"] ?>"><img src="assets/img/Logo_categories/<?= $product["pictureCategory"] ?>" alt=""></a>
                </div>
                <span><?= $product["quantity"] > 0 ? "En Stock" : "Actuellement indisponible" ?></span>
                <a href="./subcategory&<?= $product["idSubcategory"] ?>" class="subProduct">D'autres produits similaires...</a>
            </div>
        </div>
        <div class="product-footer">
            <h2><?= $product["promo"] ? $product["promo"] : $product["price"] ?> Couronnes</h2>
            <a href="" class="coffre">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="iconify iconify--mdi" width="50" height="50" viewBox="0 0 24 24">
                    <path d="M5 4h14a3 3 0 013 3v4h-7v-1H9v1H2V7a3 3 0 013-3m6 7h2v2h-2v-2m-9 1h7v1l2 2h2l2-2v-1h7v8H2v-8z" fill="currentColor" />
                </svg>
                <p>Ajouter au coffre</p>
            </a>
        </div>
        <div class="social-icons">
            <p>Partager ce produit sur :</p>
            <div class="icons">
                <a href="./faceborgne">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--noto" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 128 128">
                        <path d="M124 107.2c-41.55 17.8-78.49-17.79-120 0V20.8c41.51-17.79 78.45 17.8 120 0v86.4z" fill="#424242"></path>
                        <linearGradient id="IconifyId-178c5e15b4b-10c503-383" gradientUnits="userSpaceOnUse" x1="5.371" y1="105.342" x2="122.371" y2="22.841" gradientTransform="matrix(1 0 0 -1 0 128)">
                            <stop offset="0" stop-color="#fff" stop-opacity="0"></stop>
                            <stop offset=".801" stop-color="#090909" stop-opacity=".915"></stop>
                            <stop offset="1"></stop>
                        </linearGradient>
                        <path d="M124 107.2c-41.55 17.8-78.49-17.79-120 0V20.8c41.51-17.79 78.45 17.8 120 0v86.4z" opacity=".3" fill="url(#IconifyId-178c5e15b4b-10c503-383)"></path>
                        <linearGradient id="IconifyId-178c5e15b4b-10c503-384" gradientUnits="userSpaceOnUse" x1="4.821" y1="64.002" x2="120.172" y2="64.002">
                            <stop offset=".001" stop-color="#bfbebe"></stop>
                            <stop offset=".234" stop-color="#212121" stop-opacity="0"></stop>
                            <stop offset=".803" stop-color="#212121" stop-opacity="0"></stop>
                            <stop offset="1" stop-color="#bfbebe"></stop>
                        </linearGradient>
                        <path d="M124 107.2c-41.55 17.8-78.49-17.79-120 0V20.8c41.51-17.79 78.45 17.8 120 0v86.4z" opacity=".2" fill="url(#IconifyId-178c5e15b4b-10c503-384)"></path>
                        <linearGradient id="IconifyId-178c5e15b4b-10c503-385" gradientUnits="userSpaceOnUse" x1="66.837" y1="16.011" x2="61.035" y2="114.159">
                            <stop offset=".001" stop-color="#bfbebe"></stop>
                            <stop offset=".197" stop-color="#212121" stop-opacity="0"></stop>
                            <stop offset=".75" stop-color="#212121" stop-opacity="0"></stop>
                            <stop offset="1" stop-color="#bfbebe"></stop>
                        </linearGradient>
                        <path d="M124 107.2c-41.55 17.8-78.49-17.79-120 0V20.8c41.51-17.79 78.45 17.8 120 0v86.4z" opacity=".2" fill="url(#IconifyId-178c5e15b4b-10c503-385)"></path>
                        <g fill="#fff">
                            <path d="M37.44 68.83c1.68.78 3.51.18 4.08-1.41c4.45 2.28 6.67 3.58 11.12 6.28c3.1-.21 4.64-.27 7.74-.38c-6.91-4.4-10.37-6.62-17.29-10.28c.57-1.58-.34-3.59-2.02-4.44s-3.51-.18-4.08 1.43c-.32.9-.17 1.9.31 2.75c-.86.23-1.57.85-1.88 1.76c-.57 1.62.34 3.51 2.02 4.29z"></path>
                            <path d="M88.56 86.68c-1.68-.82-3.51-.26-4.08 1.31c-4.45-2.37-6.67-3.71-11.12-6.45c-3.1.17-4.64.23-7.74.33c6.91 4.41 10.37 6.68 17.29 10.48c-.57 1.56.34 3.59 2.02 4.48s3.51.27 4.08-1.33c.32-.89.17-1.9-.31-2.75a2.61 2.61 0 0 0 1.88-1.71c.57-1.62-.34-3.54-2.02-4.36z"></path>
                            <path d="M84.48 78.74c.57 1.8 2.39 3.05 4.08 2.73c1.68-.31 2.59-2.04 2.02-3.8a3.93 3.93 0 0 0-1.88-2.23c.48-.71.62-1.68.31-2.66c-.57-1.77-2.39-2.96-4.08-2.71s-2.59 1.86-2.02 3.67c-13.78 1.45-27.65.98-41.39 2.94c-.57-1.78-2.39-2.99-4.08-2.64c-1.68.36-2.59 2.11-2.02 3.85a3.8 3.8 0 0 0 1.88 2.18c-.48.73-.62 1.69-.31 2.67c.57 1.75 2.39 2.89 4.08 2.61s2.59-1.92 2.02-3.71c13.76-1.72 27.63-1.24 41.39-2.9z"></path>
                            <path d="M71.64 38.99c-5.39-4.43-11.89-6.49-17.29-5.11c-5.41 1.38-10.46 6.12-5.34 19.27c0 0-2.74 8.24 5.95 8.65c0 0 1.39.16 1.3 2.23v.99c0 .64.52 1.3 1.15 1.48c.01 0 .02.01.03.01c.64.19 1.15-.18 1.15-.81v-.96c.56.16.83.25 1.39.41v.96c0 .64.52 1.3 1.15 1.5h.01c.64.19 1.15-.17 1.15-.8v-.96l1.39.42v.96c0 .64.52 1.31 1.15 1.5c.64.19 1.15-.17 1.15-.8v-.96l1.39.42v.96c0 .64.52 1.31 1.15 1.49c.01 0 .02.01.03.01c.64.19 1.15-.18 1.15-.81v-.99c-.09-2.12 1.3-1.48 1.3-1.48c8.7 4.57 5.95-5.42 5.95-5.42c5.15-10.58.1-17.72-5.31-22.16zm-14.67 16.7c-2.4-.7-4.35-3.17-4.35-5.58s1.95-3.83 4.35-3.13c2.41.7 4.35 3.24 4.35 5.64c.01 2.41-1.94 3.77-4.35 3.07zm7.48 6.9c-.89-.71-1.92-1.02-2.81-.85c-.35.07-.57-.11-.57-1.1c0-.64.02-1.19.06-1.66c.1-1.1.93-1.7 1.91-1.41c.99.3 1.81 1.4 1.91 2.56c.04.49.06 1.06.06 1.7c0 .98-.21 1.04-.56.76zm4.71-3.26c-2.4-.71-4.35-3.25-4.35-5.66s1.95-3.76 4.35-3.05s4.35 3.21 4.35 5.61c0 2.41-1.95 3.82-4.35 3.1z"></path>
                        </g>
                    </svg>
                </a>
                <a href="./coco">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--noto" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 128 128">
                        <path d="M40.01 95.48s2.44 10.04 2.06 11.45c-.38 1.41-7.32 2.53-11.36 4.6c-2.65 1.36-6.92 4.39-4.32 6.84c1.41 1.33 5.35-2.03 17.18-2.71c12.01-.69 14.13.29 13.51-2.25c-.61-2.53-3.8-2.82-6.48-3.94c-.89-.37-1.92-.96-2.35-1.6c-.41-.61.19-10.98.19-10.98l-8.43-1.41z" fill="#feba02"></path>
                        <path d="M62.16 102.52s.28 10.15.28 10.8c0 .95-2.32 2.09-5.77 2.86c-3.45.77-10.28 2.05-10.37 6.42c-.06 2.69 13.12-.95 20.65-.84s12.36 1.1 12.01-2.06c-.28-2.53-4.2-3.68-6.31-4.14c-2.11-.46-3.07-1.49-3.13-2.75c-.04-.82.14-10.07.14-10.07l-7.5-.22z" fill="#feba02"></path>
                        <linearGradient id="IconifyId-178c5e15b4b-10c503-13" gradientUnits="userSpaceOnUse" x1="46.854" y1="97.057" x2="65.857" y2="33.649">
                            <stop offset=".136" stop-color="#79da88"></stop>
                            <stop offset=".304" stop-color="#57cd75"></stop>
                            <stop offset=".634" stop-color="#19b553"></stop>
                            <stop offset=".791" stop-color="#01ab46"></stop>
                        </linearGradient>
                        <path d="M41.89 8.01l9.06-.61s5.04 1.63 9.83 8.57c6.36 9.23 5.52 26.11 5.52 26.11l17.46 46.55l2.11 15.39s-15.62 2.46-30.92.47c-18.02-2.35-36.6-18.68-36.32-43.08c.28-24.4 19.62-47.96 19.62-47.96l3.64-5.44z" fill="url(#IconifyId-178c5e15b4b-10c503-13)"></path>
                        <path d="M21.15 16.93s-6.95 2.16-8.92 9.95S13.55 41.92 15 42.41c.56.19 2.3-3.33 2.3-3.33s2.44 2.82 3.66 3.47c1.22.66 1.83 1.15 2.91 1.08c2.11-.14 5.21-6.29 5.12-10.42l1.08-20.23l-8.92 3.95z" fill="#ffd51d"></path>
                        <path d="M29.85 28.09s8.47-1.41 11.85-4.32s7.32-5.54 8.63-10.79c.8-3.2.84-5.44.84-5.44S39.36.69 28.66 6.32S20.49 19.6 20.49 19.6l9.36 8.49z" fill="#ff2b23"></path>
                        <path d="M29.5 29.22s-6.85 4.04-7.6 4.6s-3.2 1.78-4.32 2.72c-1.78 1.5-3.38 4.88-2.72 5.73c.66.84 1.6-1.78 4.22-3.38s7.13-4.13 8.35-4.79c1.22-.66 1.6-1.03 1.6-1.03l.47-3.85z" fill="#ff600d"></path>
                        <path d="M31.83 27.46c.47-.99.68-3.26-2.51-7.25c-3.75-4.69-9.01-4.88-9.01-4.88l-.56 1.88l5.82 5.82L28.8 30s2.06-.5 3.03-2.54z" fill="#a02a1b"></path>
                        <path d="M15.89 20.4s4.32.28 7.32 2.91c1.78 1.56 4.47 4.9 5.13 6.41s2.91-2.67 1.13-5.49s-3.91-5.65-7.85-7.02c-2.84-.98-5.54 1.41-5.73 3.19z" fill="#ec80af"></path>
                        <path d="M49.49 25.94s-3.47-8.82-10.61-8.45c-7.2.38-8.31 5.73-7.98 8.92c.38 3.69 2.82 5.73 8.45 5.54c5.64-.2 10.14-6.01 10.14-6.01z" fill="#fbd3b3"></path>
                        <path d="M44.24 24.81c0 2.28-2.48 4.32-4.74 4.32c-2.25 0-4.08-1.85-4.08-4.13s1.31-4.79 4.5-4.97c3.37-.21 4.32 2.5 4.32 4.78z" fill="#312f2a"></path>
                        <path d="M86.38 80.75s2.25 5.07 10.89 10.7c7.33 4.78 10.89 7.7 15.96 9.48c5.07 1.78 5.26 2.25 5.07 3.19c-.19.94-8.07 7.04-16.71 6.29c-8.63-.75-12.76-4.13-15.39-5.91s-7.6-14.36-7.6-14.36l7.78-9.39z" fill="#01ab46"></path>
                        <path d="M66.34 41.84s-11.97 3.52-17.22 11.5c-4.4 6.68-4.01 18.04.47 26.47c5.54 10.42 16.99 17.83 23.09 20.65c6.1 2.82 14.45 4.22 18.11 3.85s-3.28-25.62-9.95-39.14c-6.5-13.19-14.5-23.33-14.5-23.33z" fill="#b7d019"></path>
                    </svg>
                </a>
                <a href="./snap-ship">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--emojione-v1" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64">
                        <path fill="#919090" d="M34.762 50.769c0 1.259-.622 2.279-1.39 2.279c-.768 0-1.39-1.021-1.39-2.279V14.094c0-1.258.623-2.28 1.39-2.28c.768 0 1.39 1.021 1.39 2.28v36.675"></path>
                        <path fill="#787878" d="M33.406 50.769V14.094c0-.844.279-1.579.696-1.971c-.204-.196-.442-.309-.696-.309c-.768 0-1.389 1.021-1.389 2.28v36.674c0 1.259.622 2.279 1.389 2.279c.254 0 .492-.112.696-.307c-.416-.393-.696-1.129-.696-1.971"></path>
                        <path fill="#28b473" d="M30.533 44.686a.292.292 0 0 0 .064-.038c-1.134-8.619-2.892-26.825 2.067-29.386c0 0-10.317.448-19.464 28.27c0 0 13.796-4.294 17.333 1.152"></path>
                        <path fill="#37a06b" d="M32.499 15.15c-1.828.353-10.947 3.331-19.13 28.23c0 0 5.271-1.637 10.132-1.604c1.594-17.907 6.59-24.461 9-26.624"></path>
                        <path fill="#28b473" d="M36.33 43.735c-.022-.015-.048-.026-.074-.038c1.319-8.654 3.305-26.941-2.887-29.597c0 0 12.825.609 24.5 28.739c0 0-17.194-4.528-21.539.896"></path>
                        <path fill="#37a06b" d="M34.1 14.292c5.342 3.694 3.464 20.897 2.197 29.21l.072.037c1.681-2.104 5.299-2.711 9.1-2.664c-1.555-9.939-5.03-25.949-11.368-26.585"></path>
                        <path fill="#e8bb85" d="M5.886 43.03s29.07 8.899 56.86-1.327c0 0 2.057.747.771 2.458c0 0-4.245.955-5.02 4.361c-.771 3.41-6.433 10.419-6.433 10.419H17.542s-6.259-4.733-7.284-11.177L.092 41.704l5.79 1.327"></path>
                        <g fill="#d3aa7d">
                            <path d="M59.659 46.31c1.521-1.632 3.821-2.151 3.821-2.151c1.286-1.711-.772-2.458-.772-2.458c-9.09 3.343-18.306 4.643-26.603 4.876c6.682.678 14.87.898 23.554-.267"></path>
                            <path d="M23.951 48.28l-4.239-2.528C11.29 44.689 5.85 43.024 5.85 43.024L.061 41.697l10.162 6.06c1.03 6.443 7.286 11.177 7.286 11.177h13.1c-1.611-1.394-5.827-5.471-6.655-10.656"></path>
                        </g>
                        <path fill="#5fa8dc" d="M7.396 58.03c.283.152 9.925-8.566 15.771.098c0 0 1.48 1.971 4.02-1.314c2.535-3.286 10.421-6.757 13.24-2.769c0 0 2.754 4.01 4.9 3.359c0 0 7.14-6.586 11.718-1.742c4.575 4.847 2.603 2.368 2.603 2.368l.426 5.971H7.4V58.03"></path>
                        <g fill="#448eb7">
                            <path d="M50.2 58.21s2.778-2.564 5.979-3.316c-3.311-2.403-7.534.007-9.602 1.506c.993 1.045 2.407 2.178 3.623 1.81"></path>
                            <path d="M12.27 58.839c.174.09 3.753-3.048 7.852-3.645c-5.645-3.17-12.489 2.959-12.725 2.832v5.971h4.874v-5.158z"></path>
                            <path d="M28.04 58.936s1.477 1.97 4.01-1.317c1.446-1.871 4.625-3.798 7.614-4.379c-3.271-2.641-10.149.54-12.487 3.568c-.15.197-.298.374-.442.535c.45.449.887.975 1.303 1.593"></path>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
    </div>


</main>

<?php
require_once("footer.php");
?>