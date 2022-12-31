<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <title><?php echo $this->data['title']; ?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="<?php echo $this->data['description']; ?>" name="description">
        <meta content="<?php echo $this->data['keywords']; ?>" name="keywords">
        <base href="<?php echo base_url(); ?>">

        <link rel="apple-touch-icon" sizes="57x57" href="asset/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="asset/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="asset/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="asset/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="asset/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="asset/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="asset/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="asset/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="asset/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="asset/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="asset/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="asset/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="asset/favicon/favicon-16x16.png">
        <link rel="manifest" href="asset/favicon/manifest.json">
        <meta name="application-name" content="W3Codify">
        <meta name="msapplication-TileColor" content="#ffc107">
        <meta name="msapplication-TileImage" content="asset/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffc107">

        <meta property="og:image" content="<?php echo base_url(); ?>asset/images/final-logo.png">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="436">
        <meta property="og:image:height" content="228">
        <meta property="og:title" content="<?php echo $this->data['title']; ?>">
        <meta property="og:description" content="<?php echo $this->data['description']; ?>">
        
        <meta name="google-site-verification" content="w-Eqq5Fl-jM00fW1TJcZeOpmIyU1DOEUYX5Nx0Eyrw0" />

        <link rel="canonical" href="<?php echo base_url(); ?>">
        <meta name="robots" content="index,follow">

        <!-- bootstrap -->
        <link rel="stylesheet" href="asset/service/bootstrap/bootstrap.min.css">
        <!-- Icon Font css -->
        <link rel="stylesheet" href="asset/service/css/all.css">
        <!-- Themify icon Css -->
        <link rel="stylesheet" href="asset/service/css/themify-icons.css">

        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="asset/service/css/style.css">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-9DRQWPT02H"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        
        gtag('config', 'G-9DRQWPT02H');
        </script>
        
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MQ3235C');</script>
        <!-- End Google Tag Manager -->

    </head>

    <body id="top-header">

        <!-- LOADER TEMPLATE -->
        <div id="page-loader">
        <div class="loader-icon fa fa-spin colored-border"></div>
        </div>
        <!-- /LOADER TEMPLATE -->

        <div class="logo-bar d-none d-md-block d-lg-block bg-light">
        <div class="container">
            <div class="row">
            <div class="col-lg-2">
                <div class="logo d-none d-lg-block">
                <!-- Brand -->
                <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url(); ?>">
                    <h2 class="mb-0">W3CODIFY</h2>
                </a>
                </div>
            </div>

            <div class="col-lg-8 justify-content-end ml-lg-auto d-flex col-12 col-md-12 justify-content-md-center">
                <div class="top-info-block d-inline-flex">
                <div class="icon-block">
                    <i class="ti-mobile"></i>
                </div>
                <div class="info-block">
                    <h5 class="font-weight-500">+91 98679 14626</h5>
                    <p>Call Free</p>
                </div>
                </div>

                <div class="top-info-block d-inline-flex">
                <div class="icon-block">
                    <i class="ti-email"></i>
                </div>
                <div class="info-block">
                    <h5 class="font-weight-500">w3codify@gmail.com</h5>
                    <p>Email Us</p>
                </div>
                </div>
                <div class="top-info-block d-inline-flex">
                <div class="icon-block">
                    <i class="ti-time"></i>
                </div>
                <div class="info-block">
                    <h5 class="font-weight-500">Mon-Sat (24 hours) </h5>
                    <p>Sunday Closed</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- NAVBAR
            ================================================= -->
        <div class="main-navigation" id="mainmenu-area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary main-nav navbar-togglable rounded-radius">

            <a class="navbar-brand d-lg-none d-block" href="<?php echo base_url(); ?>">
                <h4 class="h3 mb-0">W3CODIFY</h4>
            </a>
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>

            <!-- Collapse -->
            <div class="collapse navbar-collapse has-dropdown" id="navbarCollapse">
                <!-- Links -->
                <ul class="navbar-nav ">
                <li class="nav-item dropdown">
                    <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>">Home</a>
                    <!-- <ul class="dropdown-menu" aria-labelledby="navbarWelcome">
                    <li><a class="dropdown-item" href="index.html">Home-1</a></li>
                    <li><a class="dropdown-item" href="index-2.html">Home-2</a></li>
                    <li><a class="dropdown-item" href="index-3.html">Home-3</a></li>
                    <li><a class="dropdown-item" href="index-4.html">Home-4</a></li>

                    <li class="dropdown dropdown-submenu dropright">
                        <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>

                        <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                        <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                        <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                        </ul>
                    </li>

                    <li class="dropdown dropdown-submenu dropleft">
                        <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>

                        <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                        <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                        <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                        </ul>
                    </li>
                    </ul> -->
                </li>
                <!-- <li class="nav-item ">
                    <a href="about.html" class="nav-link js-scroll-trigger">
                    About
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="service.html" class="nav-link js-scroll-trigger">
                    Services
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="pricing.html" class="nav-link js-scroll-trigger">
                    Pricing
                    </a>
                </li> -->

                <li class="nav-item ">
                    <a href="<?php echo base_url(); ?>code-optimize" class="nav-link js-scroll-trigger">
                    Code Optimizer
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">
                    Contact
                    </a>
                </li>
                </ul>

                <ul class="ml-lg-auto list-unstyled m-0">
                <li><a class="btn btn-white btn-circled" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">Get a Quick, Free Quote</a></li>
                </ul>
            </div> <!-- / .navbar-collapse -->
            </nav>
        </div> <!-- / .container -->
        </div>



            <!-- HERO
            ================================================== -->
            <section class="banner-area py-7">
                <!-- Content -->
                <div class="container">
                    <div class="row  align-items-center">
                        <div class="col-md-12 col-lg-6 text-center text-lg-left">
                            <div class="main-banner">
                                <!-- Heading -->
                                <h1 class="display-4 mb-4 font-weight-normal">
                                    Online Website and Application Designing Organization
                                </h1>

                                <!-- Subheading -->
                                <p class="lead mb-4">
                                W3Codify is organization that aimed at helping companies promote new products and business launches. Give Your customers human feeling touch Like Never Before.
                                </p>

                                <p class="lead mb-4">No credit card required. Available on
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">Mac</a>,
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">Windows</a>,
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">iOS</a>, &amp;
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">Android</a>.
                                </p>

                                <!-- Button -->
                                <p class="mb-0">
                                    <a class="btn btn-primary btn-circled" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">
                                        Get Started
                                    </a>
                                    <!-- <a href="#!" class="btn">
                                        See Pricing
                                    </a> -->
                                </p>

                                
                            </div>
                        </div>

                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="banner-img-block">
                                <img src="asset/images/banner-art.svg" alt="banner-img" class="img-fluid">
                            </div>
                        </div>
                    </div> <!-- / .row -->
                </div> <!-- / .container -->

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header" style="background-color: #ffc107;">
                        <h3 class="modal-title" id="exampleModalLongTitle">Get a Quick, Free Quote for your next Dream Project with the Best Team!</h3>
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button> -->
                    </div>
                    <div class="modal-body">
                        <p class="pt-2"><strong>Hi There!</strong>
                            <br>
                            If you planning to create your own website or application then you are right place.
                            <br>
                            Select any option mentioned below to reach us now.
                        </p>
                        <div class="container-fluid p-3">
                            <div class="row">
                                <div class="col-md-4"><a href="tel:+919867914626" target="_blank"><img src="https://img.icons8.com/fluency/96/null/phone-message.png" alt="Call +91-98679-14626"/></a></div>
                                <div class="col-md-4"><a href="mailto:w3codify@gmail.com" target="_blank"><img src="https://img.icons8.com/fluency/96/null/gmail.png" alt="Send Mail"/></a></div>
                                <div class="col-md-4"><a href="https://api.whatsapp.com/send?phone=9867914626&text=W3Codify (Customer Enquiry)" target="_blank"><img src="https://img.icons8.com/fluency/96/null/whatsapp.png" alt="Chat on WhatsApp"/></a></div>
                            </div>
                        </div>
                        <p>Thanks & Regards,<br><strong>W3Codify</strong></p>
                        <hr>
                        <p class="text-center"><strong>Privacy Policy:</strong> We hate spam and promise to keep your information safe.</p>
                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                    </div>
                </div>
                </div>
            </section>


        <section class="section bg-grey" id="feature">
                <div class="container">
                    <div class="row justy-content-center">
                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <div class="text-center feature-block">
                                <div class="img-icon-block mb-4">
                                    <i class="ti-thumb-up"></i>
                                </div>
                                <h4 class="mb-2">The right advice</h4>
                                <p>Our team are experts in matching you with the right provider.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <div class="text-center feature-block">
                                <div class="img-icon-block mb-4">
                                    <i class="ti-cup"></i>
                                </div>
                                <h4 class="mb-2">Recognised for excellence</h4>
                                <p>We've been awarded for our high rate of customer satisfaction.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <div class="text-center feature-block">
                                <div class="img-icon-block mb-4">
                                    <i class="ti-wallet"></i>
                                </div>
                                <h4 class="mb-2">Compare the best</h4>
                                <p>We only compare market leaders with a reputation for service quality.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <div class="text-center feature-block">
                                <div class="img-icon-block mb-4">
                                    <i class="ti-dashboard"></i>
                                </div>
                                <h4 class="mb-2">Premium Services</h4>
                                <p>We only compare market leaders with a reputation for service quality.</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- / .container -->
            </section>



            <!-- SERVICE-1
            ================================================== -->
            <section class="bg-grey" id="service">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-4">
                            <div class="service-img">
                                <img src="asset/images/blog-lg.jpg" alt="" class="img-fluid">
                            </div>
                        </div>

                        <div class="col-lg-6 pl-4">
                            <div class="service-content">
                                <h1>Get a better deal and start saving money today</h1>
                                <p>We compare hundreds of leading products and plans across many categories to bring you the best value for money.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section service-wrap">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-8 offset-lg-4">
                            <div class="carousel slide " id="service-carousel" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="service-block media">
                                                        <div class="service-icon">
                                                            <i class="ti-reload"></i>
                                                        </div>
                                                        <div class="service-inner-content media-body">
                                                            <h4>Backup System</h4>
                                                            <p>Our team are experts in matching you with the right provider.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="service-block media">
                                                        <div class="service-icon">
                                                            <i class="ti-cloud"></i>
                                                        </div>
                                                        <div class="service-inner-content media-body">
                                                            <h4>Cloud Hosting</h4>
                                                            <p>Our team are experts in matching you with the right provider.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="service-block media">
                                                        <div class="service-icon">
                                                            <i class="ti-world"></i>
                                                        </div>
                                                        <div class="service-inner-content media-body">
                                                            <h4>Web hosting</h4>
                                                            <p>Our team are experts in matching you with the right provider.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="service-block media">
                                                        <div class="service-icon">
                                                            <i class="ti-server"></i>
                                                        </div>
                                                        <div class="service-inner-content media-body">
                                                            <h4>Office Cloud</h4>
                                                            <p>Our team are experts in matching you with the right provider.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="pl-3">Want to know more about this? <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">Contact us</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <section class="section" id="services-2">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 text-center">
                            <div class="section-heading">
                                <!-- Heading -->
                                <h2 class="section-title mb-2 text-white">
                                    Web Services
                                </h2>

                                <!-- Subheading -->
                                <p class="mb-5 text-white">
                                    Rappo can be used to create anything from a small marketing page to a sophisticated website.
                                </p>
                            </div>
                        </div>
                    </div> <!-- / .row -->

                    <div class="row">
                        <div class="col-lg-4 col-sm-6 col-md-6 mb-30">
                            <div class="web-service-block">
                                <i class="ti-light-bulb"></i>
                                <h3>Creative Design</h3>
                                <p>Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had .</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-md-6 mb-30">
                            <div class="web-service-block">
                                <i class="ti-desktop"></i>
                                <h3>Web Development</h3>
                                <p>Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had .</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-md-6 mb-30">
                            <div class="web-service-block">
                                <i class="ti-announcement"></i>
                                <h3>Digital Marketing</h3>
                                <p>Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had .</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 col-md-6 ">
                            <div class="web-service-block">
                                <i class="ti-layers-alt"></i>
                                <h3>Graphic Design</h3>
                                <p>Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had .</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-md-6 ">
                            <div class="web-service-block">
                                <i class="ti-mobile"></i>
                                <h3>App Development</h3>
                                <p>Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had .</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-md-6 ">
                            <div class="web-service-block">
                                <i class="ti-settings"></i>
                                <h3>Wordpress Installation</h3>
                                <p>Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had .</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <section class="section" id="pricing">
                <!-- Content -->
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 text-center">
                            <div class="section-heading">
                                <!-- Heading -->
                                <h2 class="section-title">
                                    Services We Provide
                                </h2>

                                <!-- Subheading -->
                                <p>
                                    Rappo can be used to create anything from a small marketing page to a sophisticated website.
                                </p>
                            </div>
                        </div>
                    </div> <!-- / .row -->

                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-sm-6 col-md-6">
                            <div class="pricing-box">
                            <h3>Static & Dynamic Website</h3>
                                <!-- <div class="price-block">
                                    <h2><small>$</small>13<span>monthly</span></h2>
                                </div> -->

                                <ul class="price-features list-unstyled">
                                    <li>Unlimited Domain</li>
                                    <li>Unmetered Bandwidth</li>
                                    <li>Free SSL Certificate </li>
                                    <li>20 Email Subscription</li>
                                    <li>SSD Hosting</li>
                                </ul>

                                <a href="javascript:void(0)" class="btn btn-primary btn-circled" data-toggle="modal" data-target="#exampleModalCenter">Request Now</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-md-6">
                            <div class="pricing-box">
                                <h3>Online E-Commerce Website</h3>
                                <!-- <div class="price-block">
                                    <h2><small>$</small>23<span>monthly</span></h2>
                                </div> -->

                                <ul class="price-features list-unstyled">
                                    <li>Unlimited Domain</li>
                                    <li>Unmetered Bandwidth</li>
                                    <li>Free SSL Certificate </li>
                                    <li>20 Email Subscription</li>
                                    <li>SSD Hosting</li>
                                </ul>

                                <a href="javascript:void(0)" class="btn btn-primary btn-circled" data-toggle="modal" data-target="#exampleModalCenter">Request Now</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-8 col-md-6">
                            <div class="pricing-box ">
                                <h3>Andriod & IOS Application</h3>
                                <!-- <div class="price-block">
                                    <h2><small>$</small>33<span>monthly</span></h2>
                                </div> -->

                                <ul class="price-features list-unstyled">
                                    <li>Unlimited Domain</li>
                                    <li>Unmetered Bandwidth</li>
                                    <li>Free SSL Certificate </li>
                                    <li>20 Email Subscription</li>
                                    <li>SSD Hosting</li>
                                </ul>

                                <a href="javascript:void(0)" class="btn btn-primary btn-circled" data-toggle="modal" data-target="#exampleModalCenter">Request Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <section class="section" id="projects-wrap">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section-heading">
                                <h1 class="text-white">We are trying to deliver 100% quality product and success their business to achieve ultimate goal.</h1>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <p class="lead text-white">We are providing best service since 1990 to present , committed to best service delivery.Nullam metus enim, placerat in lacus vel, porttitor egestas libero. Etiam ex risus, feugiat eget accumsan eu, sagittis eu urna. In eget ultrices metus. Nunc accumsan </p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="projects" class="section-bottom">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                            <div class="single-project">
                                <img src="asset/images/process-1.jpg" alt="" class="img-fluid">
                                <div class="project-content">
                                    <h4>Project Research</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eligendi consequuntur veniam quod</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                            <div class="single-project">
                                <img src="asset/images/process-2.jpg" alt="" class="img-fluid">
                                <div class="project-content">
                                    <h4>Project Demostration</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eligendi consequuntur veniam quod</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-8 ">
                            <div class="single-project">
                                <img src="asset/images/process-3.jpg" alt="" class="img-fluid">
                                <div class="project-content">
                                    <h4>Development & Delivery</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eligendi consequuntur veniam quod</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <!-- <section class="section" id="section-testimonial">
            <div class="container">
            <div class="row align-items-center">
                    <div class="col-lg-4 col-sm-12 col-md-12">
                        <div class="section-heading testimonial-heading">
                            <h1>What they say <br>about us</h1>
                            <p>Numquam doloribus impedit at consectetur molestiae tempora ratione possimus in veniam aperiam, eum consequuntur, unde. Earum ullam molestiae suscipit saepe sunt recusandae.</p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-12 col-md-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="test-inner ">
                                <div class="test-author-thumb d-flex">
                                    <img src="images/client/test-1.jpg" alt="Testimonial author" class="img-fluid">
                                    <div class="test-author-info">
                                        <h4>Will Barrow</h4>
                                        <h6>Sunrise Paradise Hotel</h6>
                                    </div>
                                </div>

                                    Quas ut distinctio tenetur animi nihil rem, amet dolorum totam. Ab repudiandae tempore qui fugiat amet ipsa id omnis ipsam, laudantium! Dolorem.

                                    <i class="fa fa-quote-right"></i>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="test-inner ">
                                <div class="test-author-thumb d-flex">
                                    <img src="images/client/test-2.jpg" alt="Testimonial author" class="img-fluid">
                                    <div class="test-author-info">
                                        <h4>Will Barrow</h4>
                                        <h6>Sunrise Paradise Hotel</h6>
                                    </div>
                                </div>

                                    Quas ut distinctio tenetur animi nihil rem, amet dolorum totam. Ab repudiandae tempore qui fugiat amet ipsa id omnis ipsam, laudantium! Dolorem.

                                    <i class="fa fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="test-inner ">
                                <div class="test-author-thumb d-flex">
                                    <img src="images/client/test-3.jpg" alt="Testimonial author" class="img-fluid">
                                    <div class="test-author-info">
                                        <h4>Will Barrow</h4>
                                        <h6>Sunrise Paradise Hotel</h6>
                                    </div>
                                </div>

                                    Quas ut distinctio tenetur animi nihil rem, amet dolorum totam. Ab repudiandae tempore qui fugiat amet ipsa id omnis ipsam, laudantium! Dolorem.

                                    <i class="fa fa-quote-right"></i>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="test-inner ">
                                <div class="test-author-thumb d-flex">
                                    <img src="images/client/test-4.jpg" alt="Testimonial author" class="img-fluid">
                                    <div class="test-author-info">
                                        <h4>Will Barrow</h4>
                                        <h6>Sunrise Paradise Hotel</h6>
                                    </div>
                                </div>

                                    Quas ut distinctio tenetur animi nihil rem, amet dolorum totam. Ab repudiandae tempore qui fugiat amet ipsa id omnis ipsam, laudantium! Dolorem.

                                    <i class="fa fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="test-inner">
                                <div class="test-author-thumb d-flex">
                                    <img src="images/client/test-5.jpg" alt="Testimonial author" class="img-fluid">
                                    <div class="test-author-info">
                                        <h4>Will Barrow</h4>
                                        <h6>Sunrise Paradise Hotel</h6>
                                    </div>
                                </div>

                                    Quas ut distinctio tenetur animi nihil rem, amet dolorum totam. Ab repudiandae tempore qui fugiat amet ipsa id omnis ipsam, laudantium! Dolorem.

                                    <i class="fa fa-quote-right"></i>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="test-inner">
                                <div class="test-author-thumb d-flex">
                                    <img src="images/client/test-6.jpg" alt="Testimonial author" class="img-fluid">
                                    <div class="test-author-info">
                                        <h4>Will Barrow</h4>
                                        <h6>Sunrise Paradise Hotel</h6>
                                    </div>
                                </div>

                                    Quas ut distinctio tenetur animi nihil rem, amet dolorum totam. Ab repudiandae tempore qui fugiat amet ipsa id omnis ipsam, laudantium! Dolorem.

                                    <i class="fa fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- <section class="section" id="blog">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 text-center">
                        <div class="section-heading">
                            <h2 class="section-title">
                                Read our latest news
                            </h2>

                            <p>
                                Our duty towards you is to share our experience we're reaching in our work path with you.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-box">
                            <div class="blog-img-box">
                                <img src="images/blog/blog-1.jpg" alt="" class="img-fluid blog-img">
                            </div>
                            <div class="single-blog">
                                <div class="blog-content">
                                    <h6> 17 October 2018</h6>
                                    <a href="#!">
                                        <h3 class="card-title">Top tips to speed up your site in a speedy time</h3>
                                    </a>
                                    <p>There are many variations of passages Lorem Ipsum available, but majority have ama suffered altratio. the lorem.</p>
                                    <a href="#!" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="blog-box">
                            <div class="blog-img-box">
                                <img src="images/blog/blog-2.jpg" alt="" class="img-fluid blog-img">
                            </div>
                            <div class="single-blog">
                                <div class="blog-content">
                                    <h6> 17 October 2018</h6>
                                    <a href="#!">
                                        <h3 class="card-title">Brand your site value with marketing strategies</h3>
                                    </a>

                                    <p>There are many variations of passages Lorem Ipsum available, but majority have ama suffered altratio. the lorem.</p>
                                    <a href="#!" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-8">
                        <div class="blog-box">
                            <div class="blog-img-box">
                                <img src="images/blog/blog-3.jpg" alt="" class="img-fluid blog-img">
                            </div>
                            <div class="single-blog">
                                <div class="blog-content">
                                    <h6> 17 October 2018</h6>
                                    <a href="#!">
                                        <h3 class="card-title">Website Optimization is very essential for site speed</h3>
                                    </a>
                                    <p>There are many variations of passages Lorem Ipsum available, but majority have ama suffered altratio. the lorem.</p>
                                    <a href="#!" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="section pt-0 pb-0">
            <div class="section-heading text-center">
                <h2 class="section-title">Experience the best workflow with us</h2>
            </div>
            <img alt="W3Codify" src="asset/images/footer-banner.svg" width="100%" decoding="async" data-nimg="1" loading="lazy">
        </section>

        <footer class="section " id="footer" style="padding: 20px 0px;">
        <div class="overlay footer-overlay"></div>
        <!--Content -->
        <div class="container">
            <!-- <div class="row justify-content-start">
            <div class="col-lg-6 col-sm-12">
                <div class="footer-widget">
                <a href="index.html" class="footer-brand text-white">
                    W3CODIFY
                </a>
                <p>W3Codify is organization that aimed at helping companies promote new products and business launches. Give Your customers human feeling touch Like Never Before.</p>
                </div>
            </div>

            <div class="col-lg-3 ml-lg-auto col-sm-12">
                <div class="footer-widget">
                <h3>Account</h3>
                <ul class="footer-links ">
                    <li>
                    <a href="#!">
                        Terms and conditions
                    </a>
                    </li>
                    <li>
                    <a href="#!">
                        Privacy policy
                    </a>
                    </li>
                    <li>
                    <a href="#!">
                        Affiliate services
                    </a>
                    </li>
                    <li>
                    <a href="#!">
                        Help and support
                    </a>
                    </li>
                    <li>
                    <a href="#!">
                        Frequently Asked Question
                    </a>
                    </li>
                </ul>
                </div>
            </div>


            <div class="col-lg-2 col-sm-6">
                <div class="footer-widget">
                <h3>About</h3>
                <ul class="footer-links">
                    <li>
                    <a href="about.html">
                        About Us
                    </a>
                    </li>
                    <li>
                    <a href="service.html">
                        Services
                    </a>
                    </li>
                    <li>
                    <a href="pricing.html">
                        Pricing
                    </a>
                    </li>
                    <li>
                    <a href="project.html">
                        Recent Projects
                    </a>
                    </li>

                    <li>
                    <a href="contact.html">
                        Contact
                    </a>
                    </li>
                </ul>
                </div>
            </div>

            <div class="col-lg-2 col-sm-6">
                <div class="footer-widget">
                <h3>Socials</h3>
                <ul class="list-unstyled footer-links">
                    <li><a href="https://www.facebook.com/themefisher"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                    <li>
                    <a href="https://www.twitter.com/themefisher"><i class="fab fa-twitter"></i>Twitter
                    </a></li>
                    <li><a href="https://www.pinterest.com/themefisher/"><i class="fab fa-pinterest-p"></i>Pinterest
                    </a></li>
                    <li><a href="https://themefisher.com/"><i class="fab fa-linkedin"></i>linkedin
                    </a></li>
                    <li><a href="https://www.youtube.com/channel/UCx9qVW8VF0LmTi4OF2F8YdA"><i class="fab fa-youtube"></i>YouTube
                    </a></li>
                </ul>
                </div>
            </div>
            </div> -->


            <!-- <div class="row text-right pt-5"> -->
            <div class="row text-right">
            <div class="col-lg-12">
                <div class="overflow-hidden">
                <!-- Copyright -->
                <p class="footer-copy">
                    Copyright &copy; <script>var CurrentYear = new Date().getFullYear()
                    document.write(CurrentYear)
                </script>. Designed &amp; Developed by <a href="https://royson-1997.github.io/royson-1997/" target="_blank">Royson G</a>
                </p>
                </div>
            </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
        </footer>


        <!--  Page Scroll to Top  -->

        <a id="scroll-to-top" class="scroll-to-top js-scroll-trigger" href="#top-header">
        <i class="fa fa-angle-up"></i>
        </a>

        <!-- jQuery -->
        <script src="asset/service/js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="asset/service/bootstrap/bootstrap.min.js"></script>

        <script src="asset/service/js/script.js"></script>

        </body>
</html>