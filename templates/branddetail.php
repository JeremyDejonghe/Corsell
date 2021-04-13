<?php

require_once("header.php");
?>

<main class="categories-container">
<?php
require_once("aside.php")
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, dolore minus eveniet quam odio praesentium? Error minus vero dolorem saepe a, obcaecati sunt tempora, placeat omnis fuga accusamus cumque officiis!
                    Accusamus numquam ipsam velit ullam voluptate! Nobis magnam perspiciatis illum, dignissimos, nisi laudantium architecto, sit sint vel quo aliquam qui velit praesentium! Itaque animi doloribus voluptatem, doloremque quibusdam quidem! Magni?
                    Cumque recusandae nisi vitae nobis ad? Labore neque nostrum itaque earum beatae provident nulla quasi magnam minima at, dolor voluptas ex fugit ut repellendus maxime nobis aut unde harum tempora.
                    Mollitia a, nemo nostrum voluptatem molestiae aliquam sapiente eligendi rerum reprehenderit pariatur minima molestias perspiciatis magnam unde sunt optio. Illum recusandae hic tempore sequi eius rerum necessitatibus cupiditate voluptas at.
                    Ipsum modi error dolore suscipit reprehenderit repudiandae molestiae, expedita voluptatem quasi qui optio, commodi deleniti. Quas non cumque aperiam libero aliquid esse aut veritatis repellendus sint. Reiciendis dicta doloremque sequi.</p>
            </div>
        </div>
    </div>
</main>

<?php
require_once("footer.php")
?>