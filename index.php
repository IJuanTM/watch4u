<!doctype html>
<html lang="en">

<head>
    <!-- Include the bootstrap css and meta links. -->

    <?php
    include("./index/meta.php");
    include("./index/css.php");
    ?>

    <!-- Titel van de pagina -->
    <title>
        <?php if (isset($_GET["content"])) {
            echo ucfirst($_GET["content"]);
        } else {
            echo "Watch4U";
        } ?>&trade;
    </title>

    <!-- Pagina Icoontjes -->
    <link rel="shortcut icon" href="./img/icon/Watch.ico">
    <link rel="apple-touch-icon-precomposed" sizes="200x200" href="./img/icon/Watch.png">
    <link rel="icon" href="./img/icon/Watch.svg" type="image/x-icon">
    <link rel="icon" href="./img/icon/Watch.gif">

</head>

<body>
    <!-- Include all the contents of the page. -->
    <main>

        <?php include("./layout/navbar.php"); ?>

        <section class="content">
            <?php
            if (isset($_GET["content"])) {
                include("./pages/" . $_GET["content"] . ".php");
            } else {
                include("./pages/homepage.php");
            }
            ?>
        </section>

        <?php include("./layout/footer.php"); ?>

    </main>

    <!-- Include the needed scripts. -->
    <?php include("./index/js.php"); ?>

</body>

</html>