<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="nav">

        <!-- Home nav-item aan rechter kant. -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-text nav-link" href="./index.php?content=homepage">
                    <img src="./img/icon/Watch.png" width="20px" height="20px" style="margin-bottom: 3px;">Home</a>
            </li>
        </ul>

        <!-- Categorieën in het midden. -->
        <ul class="navbar-nav">

            <li class="nav-item active">
                <a class="nav-text nav-link" href="./index.php?content=/category/brands">
                    <i class="far fa-copyright"></i> Brands</a>
            </li>

            <li class="nav-item active">
                <a class="nav-text nav-link" href="./index.php?content=/category/men_brands">
                    <i class="fas fa-male"></i> Men's Watches</a>
            </li>

            <li class="nav-item active">
                <a class="nav-text nav-link" href="./index.php?content=/category/women_brands">
                    <i class="fas fa-female"></i> Women's Watches</a>
            </li>

            <li class="nav-item active">
                <a class="nav-text nav-link" href="./index.php?content=/category/kids_brands">
                    <i class="fas fa-child"></i> Kids Watches</a>
            </li>

        </ul>

        <!-- Aanmelden en Inloggen aan de linkerkant. -->
        <ul class="navbar-nav ml-auto">

            <?php
            if (isset($_SESSION["id"])) {
                switch ($_SESSION["userrole"]) {
                    case 'Admin':
                        echo '<li class="nav-item"><a class="nav-link" href="./index.php?content=overview"><i class="fas fa-clipboard-list"></i></a></li>';
                        echo '<li class="nav-item"><a class="nav-link" href="./index.php?content=account"><i class="fas fa-user"></i></a></li>';
                        echo '<li class="nav-item"><a class="nav-link" href="./index.php?content=account"><i class="fas fa-shipping-fast"></i></a></li>';
                        break;
                    case 'Root':
                        echo '<li class="nav-item"><a class="nav-link" href="https://web0116.zxcs.nl/phpmyadmin/db_structure.php?server=1&db=u37477p32749_watch4u"><i class="fas fa-database"></i></a></li>';
                        echo '<li class="nav-item"><a class="nav-link" href="./index.php?content=overview"><i class="fas fa-clipboard-list"></i></a></li>';
                        echo '<li class="nav-item"><a class="nav-link" href="./index.php?content=account"><i class="fas fa-user"></i></a></li>';
                        echo '<li class="nav-item"><a class="nav-link" href="./index.php?content=account"><i class="fas fa-shipping-fast"></i></a></li>';
                        break;
                    case 'Customer':
                        echo '<li class="nav-item"><a class="nav-link" href="./index.php?content=account"><i class="fas fa-user"></i></a></li>';
                        echo '<li class="nav-item"><a class="nav-link" href="./index.php?content=account"><i class="fas fa-shipping-fast"></i></a></li>';
                        break;
                    default:
                        header("Location: ./index.php?content=logout");
                        break;
                }
                echo '<li class="nav-item"><a class="nav-link" href="./index.php?content=logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>';
            } else {
                echo '<li class="nav-item active"><a class="nav-text nav-link" href="./index.php?content=register"><i class="fas fa-file-signature"></i> Register</a></li>';
                echo '<li class="nav-item active"><a class="nav-text nav-link" href="./index.php?content=login"><i class="fas fa-sign-in-alt"></i> Login</a></li>';
            }
            ?>

        </ul>

    </div>
</nav>