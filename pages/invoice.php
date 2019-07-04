<div class="invoice container">

    <!-- Company + number -->
    <div class="row">

        <div class="col-4">
            <img class="inv-img" src="./img/logo/Watch4U_BW.svg" width="150px">
        </div>

        <div class="inv-comp col-4">
            <h4>Company:</h4>
            <h5 class="text-left">MBO Utrecht</h5>
            <h5 class="text-left">Columbuslaan 540</h5>
            <h5 class="text-left">3526 EP Utrecht</h5>
            <h5 class="text-left">The Netherlands</h5>
        </div>

        <div class="col-4">
            <h3 class="text-right"><b>#0001</b></h3>
        </div>

    </div>

    <hr>

    <!-- Invoice + Order Address -->
    <div class="row">

        <div class="inv-cust col-4">
            <h4>Invoice To:</h4>
            <h5 class="text-left">Henk de Vries</h5>
            <h5 class="text-left">Henklaan 203</h5>
            <h5 class="text-left">3211 XD Henktown</h5>
            <h5 class="text-left">The Henklands</h5>
            <br>
        </div>

        <div class="col-4"></div>

        <div class="inv-cust col-4">
            <h4>Order To:</h4>
            <h5 class="text-left">Henk de Vries</h5>
            <h5 class="text-left">Henklaan 203</h5>
            <h5 class="text-left">3211 XD Henktown</h5>
            <h5 class="text-left">The Henklands</h5>
            <br>
        </div>

    </div>

    <!-- Order table -->
    <div class="row">

        <div class="col-12">
            <div class="table-responsive">

                <?php if (isset($_SESSION['cart'])) : ?>
                    <?php $cart = json_decode($_SESSION['cart'], true); ?>

                    <table class="inv-table table table-white table-striped table-bordered">

                        <thead class="table-header">
                            <tr>
                                <th scope="col">Product ID</th>
                                <th scope="col">Product Name</th>
                                <th scope="col" class="text-center">Quantity</th>
                                <th scope="col" class="text-right">Price</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($cart as $key => $ammount) : ?>

                                <?php
                                $sql = 'SELECT * FROM products WHERE product_id = ' . $key;
                                ?>

                                <tr>
                                    <td><?= $key ?></td>
                                    <td>Apple Watch 4 Black</td>
                                    <td><?= $ammount ?></td>
                                    <td class="text-right">€449,-</td>
                                </tr>

                            <?php endforeach; ?>

                            <thead class="table-header">
                                <th></th>
                                <th></th>
                                <th class="text-right">Total:</th>
                                <th class="text-right">€449,-</th>
                            </thead>

                        </tbody>

                    </table>

                <?php endif; ?>

            </div>
        </div>

    </div>

    <!-- Price total -->
    <div class="row">

        <div class="col-4"></div>

        <div class="col-3"></div>

        <div class="inv-total col-3">
            <h5 class="text-left">20% BTW:</h5>
            <h5 class="text-left">Total - BTW:</h5>
            <h5 class="text-left">Total + BTW:</h5>
        </div>

        <div class="inv-cost col-2">
            <h5 class="text-left">€89,80</h5>
            <h5 class="text-left">€359,20</h5>
            <h5 class="text-left">€449,-</h5>
        </div>

    </div>

</div>