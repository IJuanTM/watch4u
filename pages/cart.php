<hr class="content-row">
<h1>Your Cart</h1>
<hr class="content-row">

<div class="row">

    <div class="col-12">
        <div class="table-responsive">

            <?php if (isset($_SESSION['cart'])) : ?>
                <?php $cart = json_decode($_SESSION['cart'], true); ?>

                <table class="table table-dark table-striped table-bordered">

                    <thead class="table-header">
                        <tr>
                            <th scope="col">Product ID</th>
                            <th scope="col" class="text-left">Product Image</th>
                            <th scope="col">Product Name</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($cart as $key => $ammount) : ?>

                            <?php
                            $sql = 'SELECT * FROM products WHERE product_id = ' . $key;
                            ?>

                            <tr>
                                <td><?= $key ?></td>
                                <td class="text-left"><img src="./img/watches/brands/apple/watch_4/black.png" width="100px" height="100px"></td>
                                <td>Apple Watch 4 Black</td>
                                <td>
                                    <input type="number" class="form-control" name="ammount" value="<?= $ammount ?>">
                                </td>
                                <td class="text-right">€449,-</td>
                                <td class="text-right"><a href="./script/cart-script.php?func=remove&prodId=<?= $key ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
                            </tr>

                        <?php endforeach; ?>


                        <thead class="table-header">
                            <th></th>
                            <th></th>
                            <th></th>
                            <th class="text-right">Total:</th>
                            <th class="text-right">€449,-</th>
                            <th></th>
                        </thead>

                    </tbody>

                </table>

            <?php else : ?>
                <h2>You don't have any items in your cart.</h2>
            <?php endif; ?>

        </div>
    </div>
</div>

<div class="row">

    <div class="col-0 col-md-6"></div>

    <div class="col-6 col-md-3">
        <a href="./index.php" class="btn cart-btn btn-secondary btn-lg active" role="button" aria-pressed="true">Continue Shopping</a>
    </div>

    <div class="col-6 col-md-3">
        <a href="./index.php?content=payment" class="btn cart-btn btn-success btn-lg active" role="button" aria-pressed="true">Checkout</a>
    </div>

</div>