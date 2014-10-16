<?php include('header.php') ?>

<body class="shop business-internal">

    <!-- Header -->
    <header>
        <div class="filter">
            <div class="container">
                <div class="intro-text">
                    <h1 class="intro-heading">Business</h1>
                    <h2 class="intro-lead-in">Order below</h2>
                </div>
            </div>
        </div>
    </header>

    <!-- Fixed 'to-top' -->
    <a href="#page-top" class="ion-chevron-up page-scroll" id="toTop"></a>

    <!-- Shop Tabs -->
    <div id="tabWrap">

        <div class="list-wrap">
            <ul class="tab">
                <li id="tab-one">
                    <!-- shop Grid Section -->
                    <section id="" class="shop bg-light-gray">

                        <div class="container">
                            <div class="row">

                                <h1>Pre-Designed Bikes</h1>
                                <table class="shopOrder">
                                    <thead>
                                        <tr>
                                            <th>Product</th><th>Amount</th><th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cartItem">
                                            <td>Product Item</td>
                                            <td><input type="number" class="w40" value="3" /></td>
                                            <td>$180</td>
                                        </tr>
                                        <tr class="cartItem">
                                            <td>Product Item</td>
                                            <td><input type="number" class="w40" value="4" /></td>
                                            <td>$240</td>
                                        </tr>
                                        <tr class="cartItem">
                                            <td>Product Item</td>
                                            <td><input type="number" class="w40" value="1" /></td>
                                            <td>$60</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <tr>
                                                <th>Cart Subtotal</th>
                                                <th><span class="amount">$ 378.00</span></th>
                                            </tr>
                                            <tr>
                                                <th>Shipping &amp; Handling</th>
                                                <th><span class="amount">No Charge</span></th>
                                            </tr>
                                            <tr>
                                                <th>Order Total</th>
                                                <th><span class="amount">$ 378.00</span></th>
                                            </tr>
                                        </tr>
                                    </tfoot>
                                </table>

                                <h1>Parts</h1>
                                <table class="shopOrder">
                                    <thead>
                                        <tr>
                                            <th>Product</th><th>Amount</th><th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cartItem">
                                            <td>Product Item</td>
                                            <td><input type="number" class="w40" value="3" /></td>
                                            <td>$180</td>
                                        </tr>
                                        <tr class="cartItem">
                                            <td>Product Item</td>
                                            <td><input type="number" class="w40" value="4" /></td>
                                            <td>$240</td>
                                        </tr>
                                        <tr class="cartItem">
                                            <td>Product Item</td>
                                            <td><input type="number" class="w40" value="1" /></td>
                                            <td>$60</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <tr>
                                                <th>Cart Subtotal</th>
                                                <th><span class="amount">$ 378.00</span></th>
                                            </tr>
                                            <tr>
                                                <th>Shipping &amp; Handling</th>
                                                <th><span class="amount">No Charge</span></th>
                                            </tr>
                                            <tr>
                                                <th>Order Total</th>
                                                <th><span class="amount">$ 378.00</span></th>
                                            </tr>
                                        </tr>
                                    </tfoot>
                                </table>
                                <hr class="spacer" />
                                <label for="" class="control-label">Deliver to:</label><input type="text" class="form-control" />
                                <label for="" class="control-label">When:</label><input type="date" class="form-control" />

                                <div class="btn-wrap login">
                                    <a href="#paymentModal" data-toggle="modal">
                                      <div class="btn btn-1e">Checkout</div>
                                    </a>
                                </div>

                            </div>
                        </div>

                    </section>
                </li>

            </ul>
        </div>
    </div>

    <?php include('partials/saleModal.php'); ?>

<?php include('footer.php'); ?>
