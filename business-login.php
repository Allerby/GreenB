<?php include('header.php') ?>

    <body class="internal businessLogin">

    <!-- Header -->
    <header>
        <div class="filter">
            <div class="container">
                <section class="loginForm">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-md-12 mb50">
                                <h2>You're a business and you want to get in touch? Awesome!<br> Contact us <a href="mailto:green@b.co.nz?Subject=Business%20Interest" target="_top">here</a>. Otherwise, login below using your details!</h2>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <form class="form-horizontal">
                                    <ul class="list-unstyled">
                                        <div class="form-group">
                                            <li><label for="" class="control-label">Business Name:</label><input type="text" class="form-control" /></li>
                                        </div>
                                        <div class="form-group">
                                            <li><label for="" class="control-label">Username:</label><input type="text" class="form-control" /></li>
                                        </div>
                                        <div class="form-group">
                                            <li><label for="" class="control-label">Password</label><input type="password" class="form-control" /></li>
                                        </div>
                                        <div class="btn-wrap login">
                                            <a href="business-internal.php">
                                              <div class="btn btn-1e">Login</div>
                                            </a>
                                        </div>
                                    </ul>
                                </form>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </header>

    <!-- Sales Modals -->
    <?php include('partials/saleModal.php'); ?>


<?php include('footer.php'); ?>
