<?php include('header.php') ?>

<body class="faq">

    <!-- Header -->
    <header>
        <div class="filter">
            <div class="container">
                <div class="intro-text">
                    <h1 class="intro-heading">FAQ</h1>
                    <h2 class="intro-lead-in">Frequently asked Questions</h2>
                </div>
            </div>
        </div>
    </header>

    <!-- Fixed 'to-top' -->
    <a href="#page-top" class="ion-chevron-up page-scroll" id="toTop"></a>

    <!-- Shop Tabs -->
    <section id="faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h4>How much does a GreenB normally cost?</h4>
                    <div>
                        <p>
                            On average $2000.
                        </p>
                    </div>
                    <h4>What should I do if I come across an Issue with my GreenB?</h4>
                    <div>
                        <p>
                            You can contact us using the live chat below, or the contact form on the homepage.
                        </p>
                    </div>
                    <h4>My Engine stopped working!</h4>
                    <div>
                        <p>
                            Contact us using the chat functions described above so we can learn more about the problem.
                        </p>
                    </div>
                    <h4>Are you guys Environmentally Friendly?</h4>
                    <div>
                        <p>
                            Yes.
                        </p>
                        <p>
                            Yes we are.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="liveChat">
        <div class="container">
            <h1>Live Chat</h1>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="" class="control-label">Name:</label><input type="text" class="form-control mb20" />
                            <label for="" class="control-label">Subject:</label><input type="text" class="form-control mb20" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <textarea class="form-control mb20" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <label for="" class="control-label">Write your query here:</label>
                            <input type="text" class="form-control mb40" />
                            <div class="btn-wrap login">
                                <a href="#sentModal" data-toggle="modal">
                                    <div class="btn btn-1e">Send</div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- Sales Modals -->
    <?php include('partials/saleModal.php'); ?>

    <?php include('partials/sentModal.php'); ?>

<?php include('footer.php'); ?>
