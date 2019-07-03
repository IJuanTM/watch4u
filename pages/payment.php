<hr class="content-row">
<h1>Select Payment</h1>
<hr class="content-row">

<!-- Order cardgroup 1 -->
<div class="payment-row pay-bg">
    <div class="row">

        <!-- Card icons -->
        <div class="col-5">

            <h2>Select Payment:</h2>

            <!-- Cards 1 -->
            <div class="card-payment">
                <a><i class="fab fa-cc-paypal"></i></a>
                <a><i class="fab fa-cc-mastercard"></i></a>
                <a><i class="fab fa-cc-visa"></i></a>
            </div>

            <!-- Cards 2 -->
            <div class="card-payment">
                <a><i class="fab fa-cc-apple-pay"></i></a>
                <a><i class="fab fa-cc-amazon-pay"></i></a>
                <a><i class="fab fa-cc-amex"></i></a>
            </div>

        </div>

        <!-- Payment info -->
        <div class="col-7">

            <!-- Payment details -->
            <div class="payment-details">

                <h2>Order Details:</h2>

                <div class="table-responsive">

                    <?php if (isset($_SESSION['cart'])) : ?>
                        <?php $cart = json_decode($_SESSION['cart'], true); ?>

                        <table class="table table-dark table-striped">
                            <thead class="table-header">
                                <tr>
                                    <th scope="col">Product ID</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($cart as $key => $ammount) : ?>;

                                    <?php
                                    $sql = 'SELECT * FROM products WHERE product_id = ' . $key;
                                    ?>

                                    <tr>
                                        <td><?= $key ?></td>
                                        <td>Apple Watch 4 Black</td>
                                        <td class="text-right"><?= $ammount ?></td>
                                        <td class="text-right">€449,-</td>
                                    </tr>
                                    <thead class="table-header">
                                        <th></th>
                                        <th></th>
                                        <th class="text-right">Total:</th>
                                        <th class="text-right">€449,-</th>
                                    </thead>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    <?php endif; ?>

                </div>

            </div>
        </div>

    </div>
</div>

<hr class="content-row">