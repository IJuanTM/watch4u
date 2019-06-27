<hr class="content-row">
<h1>Your Cart</h1>
<hr class="content-row">

<div class="row">

    <div class="col-12">
        <div class="table-responsive">
            <?php if (isset($_COOKIE['cart'])) : ?>
                <?php $cart = json_decode($_COOKIE['cart'], true); ?>
                <table class="table table-dark table-striped">

                    <thead class="table-header">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col"></th>
                            <th scope="col">Product</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($cart as $key => $ammount) : ?>
                            <tr>
                                <td><?= $key ?></td>
                                <td class="text-center"><img src="./img/watches/brands/apple/watch_4/black.png" width="100px" height="100px"></td>
                                <td>Apple Watch 4 Black</td>
                                <td><select class="form-control" id="quantity-cart">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select></td>
                                <td class="text-right">€449,-</td>
                                <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button></td>
                            </tr>
                        <?php endforeach; ?>
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
        <a href="./payment.php" class="btn cart-btn btn-success btn-lg active" role="button" aria-pressed="true">Checkout</a>
    </div>

</div>