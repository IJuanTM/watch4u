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