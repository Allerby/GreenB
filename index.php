<?php include('header-home.php') ?>

<body class="index">

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <h1 class="intro-heading">GreenB</h1>
                <h2 class="intro-lead-in">Healthy Convenience</h2>
                <div class="btn-wrap login">
                    <a href="customer-login">
                      <div class="btn btn-1e">Login</div>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <a href="#page-top" class="ion-chevron-up page-scroll" id="toTop"></a>

    <section id="product" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Product</h2>
                    <h3 class="section-subheading">The Environmentally Friendly - GreenB</h3>
                    <img src="img/iF-Mode-folding-Bike.png" class="" /></img>
                    <p>
                        <a href="#videoModal" data-toggle="modal">Watch it in action!</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">What we do</h2>
                    <h3 class="section-subheading text-muted">What we do best here at greenB</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="ion-earth"></i>
                    </span>
                    <h4 class="service-heading">Saving The Planet...</h4>
                    <p class="text-muted">GreenB are extremely proud with our efforts to create an Environmentally friendy travel alternative thats enjoyable and great exercise!</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="ion-ios7-gear"></i>
                    </span>
                    <h4 class="service-heading">...Using Modern Enginuity...</h4>
                    <p class="text-muted">We use modern techniques to make sure our bikes are easily compactable for your convenience, along with a top of the line motor for those extra hard hills.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="ion-trophy"></i>
                        <!-- <i class="fa fa-circle fa-stack-2x"></i> -->
                    </span>
                    <h4 class="service-heading">...In Award Winning Style</h4>
                    <p class="text-muted">Peter our lead designer has gone through hundreds of prototypes to make sure you can travel around on your greenB, knowing you are the envy of your peers!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Meet The Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member peter">
                        <img src="img/team/sterling-archer.png" class="img-responsive img-circle" alt="">
                        <h4>Peter</h4>
                        <p class="text-muted">Lead Designer</p>
                        <ul class="list-inline social-buttons">
                            <p>Peter is the Lead Designer and co-founder of greenB, with years of valuable experience as a designer at an air-conditioning company.</p>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member paul">
                        <img src="img/team/cyil-figgis.png" class="img-responsive img-circle" alt="">
                        <h4>Paul</h4>
                        <p class="text-muted">Lead Engineer</p>
                        <ul class="list-inline social-buttons">
                            <p>Paul is the brains behind the GreenB. He built the very first greenB out of his home garage 8 years go, and hasn't stopped refining since.</p>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member cheryl">
                        <img src="img/team/cheryl-carol.png" class="img-responsive img-circle" alt="">
                        <h4>Cheryl</h4>
                        <p class="text-muted">Marketing and Communications</p>
                        <ul class="list-inline social-buttons">
                            <p>Cheryl is the Marketing and Communcations Manager at GreenB, she deliver top of the line service, and ensures customers always ride away happy.</p>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">The GreenB team is extremely dedicated to providing you with the best cycling experience possible. We hope you enjoy our product as much as we do!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Get in touch</h2>
                    <h3 class="section-subheading text-muted">Fill out the form below to get in contact.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <div class="btn-wrap login">
                                    <a href="#sentModal" data-toggle="modal">
                                      <div class="btn btn-1e">Send</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Personal Details Modal -->
    <?php include('partials/saleModal.php'); ?>

    <!-- Message Sent Modal -->
    <?php include('partials/sentModal.php'); ?>

    <!-- Video Modal -->
    <div class="saleModal modal fade" id="videoModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <iframe width="560" height="315" src="//www.youtube.com/embed/rQ6Kh5dIx08" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>

<?php include('footer.php'); ?>
