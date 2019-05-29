<?php
include("./layout/modal.php");
?>
<!-- Banner Carousel -->
<div id="Indicator" class="carousel slide" data-ride="carousel">

    <!-- Slides -->
    <ol class="carousel-indicators">
        <li data-target="#Indicator" data-slide-to="0" class="active"></li>
        <li data-target="#Indicator" data-slide-to="1"></li>
        <li data-target="#Indicator" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">

        <!-- Slide One -->
        <div class="carousel-item active" style="background-image: url(./img/banner/men-banner.jpg)">
            <div class="banner-text carousel-caption d-none d-md-block">
                <h2 class="display-4">Men's Smartwatches</h2>
                <p class="lead">Cool smartwatches made for men!</p>
            </div>
        </div>

        <!-- Slide Two-->
        <div class="carousel-item" style="background-image: url(./img/banner/women-banner.jpg)">
            <div class=" banner-text carousel-caption d-none d-md-block">
                <h2 class="display-4">Women's Smartwatches</h2>
                <p class="lead">Elegant smartwatches made for women!</p>
            </div>
        </div>

        <!-- Slide Three -->
        <div class="carousel-item" style="background-image: url(./img/banner/kids-banner.jpg)">
            <div class="banner-text carousel-caption d-none d-md-block">
                <h2 class="display-4">Kids Smartwatches</h2>
                <p class="lead">Fun smartwatches made for children!</p>
            </div>
        </div>

    </div>

    <!-- Indicator One -->
    <a class="carousel-control-prev" href="#Indicator" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <!-- Indicator Two -->
    <a class="carousel-control-next" href="#Indicator" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>

<hr class="content-row">
<h1 class="content-text">Deals</h1>
<hr class="content-row">

<div class="item-group sale-bg">

    <figure class="shop-item" data-toggle="modal" data-target="#apple_4_black">
        <img class="mx-auto my-auto" src="./img/watches/brands/apple/watch_4/black.png">
        <figcaption>
            <h3 class="item-name">Apple Watch 4 Black</h3>
            <h3 class="sale"> €529 </h3>
            <h5 class="item-price">€449</h5>
        </figcaption>
    </figure>

    <figure class="shop-item" data-toggle="modal" data-target="#lv_white">
        <img class="mx-auto my-auto" src="./img/watches/brands/louis_vuitton/horizon/white.png">
        <figcaption>
            <h3 class="item-name">Louis Vuitton Horizon White</h3>
            <h3 class="sale">€5299</h3>
            <h5 class="item-price">€3999</h5>
        </figcaption>
    </figure>

    <figure class="shop-item" data-toggle="modal" data-target="#samsung_galaxy_silver">
        <img class="mx-auto my-auto" src="./img/watches/brands/samsung/galaxy/46mm/silver.png">
        <figcaption>
            <h3 class="item-name">Samsung Galaxy Watch Silver</h3>
            <h3 class="sale">€429</h3>
            <h5 class="item-price">€349</h5>
        </figcaption>
    </figure>

    <figure class="shop-item" data-toggle="modal" data-target="#mobvoi_tic_black">
        <img class="mx-auto my-auto" src="./img/watches/brands/mobvoi/ticwatch/c2/black.png">
        <figcaption>
            <h3 class="item-name">Mobvoi Ticwatch Black</h3>
            <h3 class="sale">€179</h3>
            <h5 class="item-price">€149</h5>
        </figcaption>
    </figure>

</div>