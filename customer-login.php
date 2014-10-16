<?php include('header.php') ?>

    <body class="internal customerLogin">

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
                            <div class="col-md-5">
                                <h2 class="section-heading">First Time?
                                <h3 class="section-subheading">Sign-up using the form below</h3>
                                <form class="form-horizontal">
                                    <ul class="list-unstyled">
                                        <div class="form-group">
                                            <li><label for="" class="control-label">First Name:</label><input type="text" class="form-control" /></li>
                                        </div>
                                        <div class="form-group">
                                            <li><label for="" class="control-label">Last Name:</label><input type="text" class="form-control" /></li>
                                        </div>
                                        <div class="form-group">
                                            <li><label for="" class="control-label">Email:</label><input type="email" class="form-control" /></li>
                                        </div>
                                        <div class="btn-wrap login">
                                            <a href="#confirmModal" data-toggle="modal">
                                              <div class="btn btn-1e">Sign-up</div>
                                            </a>
                                        </div>
                                    </ul>
                                </form>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <h2 class="section-heading">GreenB Veteran?
                                <h3 class="section-subheading">Login here</h3>
                                <form class="form-horizontal">
                                    <ul class="list-unstyled">
                                        <div class="form-group">
                                            <li><label for="" class="control-label">Email:</label><input type="text" class="form-control" /></li>
                                        </div>
                                        <div class="form-group">
                                            <li><label for="" class="control-label">Password:</label><input type="password" class="form-control" /></li>
                                        </div>
                                        <div class="btn-wrap login">
                                            <a href="shop">
                                              <div class="btn btn-1e">Login</div>
                                            </a>
                                        </div>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </header>

    <!-- Sales Modals -->
    <?php include('partials/saleModal.php'); ?>

    <?php include('partials/confirmModal.php'); ?>

<?php include('footer.php'); ?>
