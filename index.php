<!DOCTYPE html>
<html lang="en">

<!-- Page Head -->

<head>
    <!-- Include the bootstrap css and meta links. -->
    <?php
    include("./index/meta.php");
    include("./index/css.php");
    ?>

    <!-- Page title -->
    <title>Watch4U&trade;</title>

    <!-- Page icons -->
    <link rel="shortcut icon" href="./img/icon/Watch.ico">
    <link rel="apple-touch-icon-precomposed" sizes="200x200" href="./img/icon/Watch.png">
    <link rel="icon" href="./img/icon/Watch.svg" type="image/x-icon">
    <link rel="icon" href="./img/icon/Watch.gif">

    <!-- reCaptcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<!-- Page Body -->

<body>

    <!-- Loading icon -->
    <div id="load"><span id="load-text">Loading...</span></div>

    <!-- Include all the contents of the page. -->
    <main id="contents">

        <?php include("./layout/navbar.php"); ?>

        <section class="content">
            <?php
            if (isset($_GET["content"])) {
                include("./pages/" . $_GET["content"] . ".php");
            } else if (empty(isset($_GET["content"]))) {
                include("./pages/homepage.php");
            } else {
                include("./pages/homepage.php");
            }
            ?>
        </section>

    </main>

    <!-- Cookie alert -->
    <div class="alert text-center cookiealert" role="alert">
        <b>Do you like cookies?</b> &#x1F36A; We use cookies to ensure you get the best experience on our website. <a href="https://cookiesandyou.com/" target="_blank">Learn more</a>
        <button type="button" class="btn btn-secondary btn-sm acceptcookies" aria-label="Close">
            I Understand
        </button>
    </div>

    <!-- Footer -->
    <?php include("./layout/footer.php"); ?>

    <!-- Include the needed scripts. -->
    <?php include("./index/js.php"); ?>

    <!-- Animate On Scroll script init -->
    <script>
        AOS.init();
    </script>

</body>

</html>