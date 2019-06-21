<!DOCTYPE html>
<html lang="en">

<!-- Page Head -->

<head>
    <!-- Include the bootstrap css and meta links. -->
    <?php
    include("./index/meta.php");
    include("./index/css.php");
    ?>

    <!-- Titel van de pagina -->
    <title>Watch4U&trade;</title>

    <!-- Pagina Icoontjes -->
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

        <script src="https://www.paypal.com/sdk/js?client-id=SB_CLIENT_ID"></script>

    </main>

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