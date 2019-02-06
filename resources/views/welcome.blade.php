<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>{{$title}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600,700,800,300italic,400italic' rel='stylesheet' type='text/css'>

    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Londrina+Solid" rel="stylesheet">

    <link rel="stylesheet" href="css/yalp.css">

    <link rel="stylesheet" href="css/vendor.css">

    <link rel="stylesheet" href="css/themes/default.css" title="default" media="screen" id="theme-css">
    <link rel="stylesheet" href="css/themes/turquoise.css" title="turquoise" media="screen">
    <link rel="stylesheet" href="css/themes/carrot.css" title="carrot" media="screen">
    <link rel="stylesheet" href="css/themes/violet.css" title="violet" media="screen">
    <link rel="stylesheet" href="css/themes/sunflower.css" title="sunflower" media="screen">
    <link rel="stylesheet" href="css/themes/wisteria.css" title="wisteria" media="screen">
</head>
<body data-spy="scroll" data-target=".navbar-collapse">
<div class="page-wrapper">
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a
            href="http://browsehappy.com/">upgrade
        your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- < PRELOADER >..............
    Preloader full screen
    ................................ -->
    <div id="front-loader">
        <div id="loader">
            <!-- <img class="logo logo-xl" src="img/logo.png" alt="Yalp" /> -->
            <div class="logo t">
                <span class="letter">Y</span><span class="letter">a</span><span class="letter">l</span><span class="letter">p</span>
            </div>
        </div>
    </div>

    <!-- < NAVIGATION >..................
    ................................ -->
    <nav id="main-navigation" class="navbar navbar-fixed-top main-navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#main-header" class="scrollto navbar-brand">
                    <!-- <img class="logo logo-lg" src="img/logo.png" alt="Yalp" /> -->
                    <span class="logo t">{{$title}}</span>
                </a>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">

                    @foreach($nav as $key => $link)

                        <li><a href="{{$link}}">{{$key}}</a></li>



                    @endforeach

                </ul>
            </div>
        </div>
    </nav>

    <!-- < HEADER >.................
    ................................ -->
    <header id="main-header" class="main-header image-header">
        <div class="color-overlay">
            <div class="container">
                <div class="header-content row">
                    <div class="col-sm-6">
                        <h1>  {{ $header['heading'] }} </h1>

                        <p>
                            {{ $header['tagline'] }}
                        </p>

                        <a class="simple-button scrollto" href="#download"><span
                                    class="fa-download"></span>Download App</a>
                    </div>

                    <div class="col-sm-6 pos-relative">
                        <img src="img/header/m1.png" class="mockup mockup-back" data-wow-delay="0s" data-wow-duration="2s" alt=""/>
                        <img src="img/header/m2.png" class="mockup mockup-front" data-wow-delay="1.5s" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- < Why us >.................
    ................................ -->
    <div class="content-wrapper">
        <!-- < About >.................
        ................................ -->
        <section id="about" class="section">
            <div class="container">
                <div class="section-heading center">
                    <h2>About Yalp</h2>
                    <h5><b>Know us</b></h5>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="widget widget-icon-text">
                                <div class="widget-icon">
                                    <i class="fa-flash"></i>
                                </div>

                                <div class="widget-text">
                                    <div class="widget-text-inner">
                                        <h4 class="widget-text-title">Simple to use</h4>

                                        <div class="widget-text-content">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis metus
                                            vitae ligula elementum ut luctus lorem facilisis.
                                        </div>

                                        <div class="widget-text-readmore">
                                            <a href="" class="btn btn-link">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="widget widget-icon-text">
                                <div class="widget-icon">
                                    <i class="fa-fire"></i>
                                </div>

                                <div class="widget-text">
                                    <div class="widget-text-inner">
                                        <h4 class="widget-text-title">Powerful</h4>

                                        <div class="widget-text-content">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis metus
                                            vitae ligula elementum ut luctus lorem facilisis.
                                        </div>

                                        <div class="widget-text-readmore">
                                            <a href="" class="btn btn-link">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="widget widget-icon-text">
                                <div class="widget-icon">
                                    <i class="fa fa-gears"></i>
                                </div>

                                <div class="widget-text">
                                    <div class="widget-text-inner">
                                        <h4 class="widget-text-title">Easy customizable</h4>

                                        <div class="widget-text-content">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis metus
                                            vitae ligula elementum ut luctus lorem facilisis.
                                        </div>

                                        <div class="widget-text-readmore">
                                            <a href="" class="btn btn-link">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="whyus" class="section">
            <div class="color-overlay overlay-4 alpha-75 squared">
                <div class="container">
                    <div class="section-heading center dark">
                        <h2>Why Yalp?</h2>
                        <h5><b>Learn to love.</b> Here are the reasons to love Yalp</h5>
                    </div>
                    <div class="section-content">
                        <div class="row align-middle">
                            <div class="col-md-6">
                                <div class="devices-wrapper">
                                    <img src="img/section/why-1.png" alt="" class="animate slideInLeft device-bottom" data-wow-delay="1s" />
                                    <img src="img/section/why-2.png" alt="" class="animate slideInLeft" data-wow-delay="0.5s" />
                                    <img src="img/section/why-3.png" alt="" class="animate slideInLeft" data-wow-delay="0s" data-animation="floating" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled icon-list icon-list-lg">
                                    <li>
                                        <i class="fa-flash"></i>
                                        <div>
                                            <h4>Simple to use</h4>
                                            <p>Lorem ipsum dolor sit amet, <span class="bold italic">consectetur adipisicing elit</span>. Aperiam dolorem eos, esse est et facilis illum inventore iste iure laborum nam necessitatibus nulla officiis.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="fa-fire"></i>
                                        <div>
                                            <h4>Powerful</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi atque blanditiis corporis <span class="bold italic">debitis dignissimos earum</span>, molestias nemo nulla quidem recusandae reiciendis.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="fa-gear"></i>
                                        <div>
                                            <h4>Easy customizable</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad blanditiis commodi cupiditate <span class="bold italic">delectus distinctio dolorem</span> doloremque earum explicabo.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="fa-lightbulb-o"></i>
                                        <div>
                                            <h4>Creative design</h4>
                                            <p>Animi aperiam aspernatur autem commodi consectetur, dicta dolorum ducimus eveniet explicabo fugit, <span class="bold italic">libero necessitatibus non</span> perferendis quam quia, quo rerum tempora veritatis. </p>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="fa-code"></i>
                                        <div>
                                            <h4>Light code</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi deserunt earum eum, <span class="bold italic">id impedit laborum magni</span> nam nobis nulla obcaecati.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="fa-file-text-o"></i>
                                        <div>
                                            <h4>Well documented</h4>
                                            <p>Accusamus adipisci, aspernatur assumenda cupiditate dolorem eligendi illum libero magni <span class="bold italic">nihil officiis optio quidem</span>, quisquam unde. Dolores est iusto obcaecati quisquam vel!</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- < Features >............
        ............................ -->
        <section id="features" class="section">
            <div class="container">
                <div class="section-heading center">
                    <h2>Features</h2>
                    <h5><b>Show off</b> how beautiful your app is.</h5>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-4 features-left">
                            <div class="feature">
                                <div class="feature-icon">
                                    <i class="fa-flash"></i>
                                </div>

                                <div class="fetaure-details">
                                    <h4>Simple to use</h4>
                                    <small>Designed for <span class="bold">simplicity</span></small>
                                    <p>Lorem ipsum dolor sit amet, ed do eiusmod <span class="bold">tempor incididunt</span> ut labore et dolore magna</p>
                                </div>
                            </div>

                            <div class="feature">
                                <div class="feature-icon">
                                    <i class="fa-fire"></i>
                                </div>

                                <div class="fetaure-details">
                                    <h4>Powerful</h4>
                                    <small><span class="bold">Make more</span> than image</small>
                                    <p>Lorem ipsum dolor sit amet, ed do eiusmod <span class="bold">tempor incididunt</span> ut labore et dolore magna.</p>
                                </div>
                            </div>

                            <div class="feature">
                                <div class="feature-icon">
                                    <i class="fa-gear"></i>
                                </div>

                                <div class="fetaure-details">
                                    <h4>Easy customizable</h4>
                                    <small><span class="bold">Completely easy</span> to personalize</small>
                                    <p>Lorem ipsum dolor sit amet, ed do eiusmod <span class="bold">tempor incididunt</span> ut labore et dolore magna</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 features-center">
                            <img src="img/section/features.png" alt="Features">
                        </div>

                        <div class="col-md-4 features-right">
                            <div class="feature">
                                <div class="feature-icon">
                                    <i class="fa-lightbulb-o"></i>
                                </div>

                                <div class="fetaure-details">
                                    <h4>Creative</h4>
                                    <small><span class="bold">Clean</span> and unique design</small>
                                    <p>Lorem ipsum dolor sit amet, ed do eiusmod <span class="bold">tempor incididunt</span> ut labore et dolore magna.</p>
                                </div>
                            </div>

                            <div class="feature">
                                <div class="feature-icon">
                                    <i class="fa-code"></i>
                                </div>

                                <div class="fetaure-details">
                                    <h4>Light code</h4>
                                    <small><span class="bold">Code</span> made for humans</small>
                                    <p>Lorem ipsum dolor sit amet, ed do eiusmod <span class="bold">tempor incididunt</span> ut labore et dolore magna.</p>
                                </div>
                            </div>

                            <div class="feature feature-highlight">
                                <div class="feature-icon">
                                    <i class="fa-file-text-o"></i>
                                </div>

                                <div class="fetaure-details">
                                    <h4>Well documented</h4>
                                    <small><span class="bold">Detailed</span> implementation instructions</small>
                                    <p>Lorem ipsum dolor sit amet, ed do eiusmod <span class="bold">tempor incididunt</span> ut labore et dolore magna.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- < Testimonials >............
        ............................ -->
        <section id="testimonials" class="section image-cover parallax">
            <div class="color-overlay alpha-50 overlay-4 dotted">
                <div class="container">
                    <div class="section-heading center dark">
                        <h2>Testimonials</h2>
                        <h5>What our <b>registered users</b> are saying</h5>
                    </div>
                    <div class="section-content">
                        <div id="testimonials-slides" class="owl-carousel">
                            <div class="testimonial-item">
                                <div class="testimonial-image">
                                    <img src="img/clients/1.jpg" alt="">
                                </div>

                                <div class="testimonial-message bubble">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aut consectetur dignissimos dolor doloribus earum excepturi incidunt itaque maiores molestias natus pariatur, quasi quis soluta unde vel veritatis? Eligendi, voluptatibus.</p>
                                </div>

                                <div class="testimonial-author">
                                    <b>Jane Doe</b> - Awesome Company
                                </div>
                            </div>

                            <div class="testimonial-item">
                                <div class="testimonial-image">
                                    <img src="img/clients/2.jpg" alt="">
                                </div>

                                <div class="testimonial-message bubble">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut odio quas repellat repudiandae, ullam voluptatum. Ab, assumenda enim, est ex facilis id magnam numquam pariatur quaerat quia quisquam reprehenderit sit?</p>
                                </div>

                                <div class="testimonial-author">
                                    <b>John Doe</b> - Awesome Company
                                </div>
                            </div>

                            <div class="testimonial-item">
                                <div class="testimonial-image">
                                    <img src="img/clients/3.jpg" alt="">
                                </div>

                                <div class="testimonial-message bubble">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto assumenda blanditiis minima optio quidem recusandae velit. At consequuntur esse fugiat iste mollitia nam, omnis perspiciatis quo vel vero vitae.</p>
                                </div>

                                <div class="testimonial-author">
                                    <b>John Doe</b> - Awesome Company
                                </div>
                            </div>

                            <div class="testimonial-item">
                                <div class="testimonial-image">
                                    <img src="img/clients/4.jpg" alt="">
                                </div>

                                <div class="testimonial-message bubble">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid aperiam aspernatur cum dolor dolorum ex excepturi exercitationem officia omnis perspiciatis porro quia, quisquam, quod repellendus saepe soluta ullam ut!</p>
                                </div>

                                <div class="testimonial-author">
                                    <b>Elizabeth Doe</b> - Awesome Company
                                </div>
                            </div>

                            <div class="testimonial-item">
                                <div class="testimonial-image">
                                    <img src="img/clients/5.jpg" alt="">
                                </div>

                                <div class="testimonial-message bubble">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab ad aperiam, assumenda atque cum et harum iste itaque iusto necessitatibus nisi nulla, quae quas reiciendis saepe tempora totam voluptatem.</p>
                                </div>

                                <div class="testimonial-author">
                                    <b>Loraine Doe</b> - Awesome Company
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- < Screenshots >............
        ............................ -->
        <section id="screenshots" class="section">
            <div class="container-fluid">
                <div class="section-heading center">
                    <h2>Screenshots</h2>
                    <h5>A <b>picture</b> is worth a thousand words</h5>
                </div>
                <div class="section-content">
                    <div id="screenshots-slides" class="owl-carousel">
                        <a href="img/screenshots/1.jpg" data-lightbox-gallery="g1"><img src="img/screenshots/1.jpg" alt=""></a>
                        <a href="img/screenshots/2.jpg" data-lightbox-gallery="g1"><img src="img/screenshots/2.jpg" alt=""></a>
                        <a href="img/screenshots/3.jpg" data-lightbox-gallery="g1"><img src="img/screenshots/3.jpg" alt=""></a>
                        <a href="img/screenshots/4.jpg" data-lightbox-gallery="g1"><img src="img/screenshots/4.jpg" alt=""></a>
                        <a href="img/screenshots/5.jpg" data-lightbox-gallery="g1"><img src="img/screenshots/5.jpg" alt=""></a>
                        <a href="img/screenshots/6.jpg" data-lightbox-gallery="g1"><img src="img/screenshots/6.jpg" alt=""></a>
                        <a href="img/screenshots/7.jpg" data-lightbox-gallery="g1"><img src="img/screenshots/7.jpg" alt=""></a>
                        <a href="img/screenshots/8.jpg" data-lightbox-gallery="g1"><img src="img/screenshots/8.jpg" alt=""></a>
                        <a href="img/screenshots/9.jpg" data-lightbox-gallery="g1"><img src="img/screenshots/9.jpg" alt=""></a>
                        <a href="img/screenshots/10.jpg" data-lightbox-gallery="g1"><img src="img/screenshots/10.jpg" alt=""></a>
                        <a href="img/screenshots/11.jpg" data-lightbox-gallery="g1"><img src="img/screenshots/11.jpg" alt=""></a>
                        <a href="img/screenshots/12.jpg" data-lightbox-gallery="g1"><img src="img/screenshots/12.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- < Price >............
        ............................ -->
        <section id="price" class="section">
            <div class="container">
                <div class="section-heading center">
                    <h2>Affordable prices</h2>
                    <h5><b>Choose a subscription</b> that's right for you</h5>
                </div>
                <div class="section-content">
                    <div class="pricing pricing-on-light">
                        <div class="pricing-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="lnr lnr-user"></div>
                            <h4 class="pricing-title">Individuals</h4>

                            <p class="pricing-sentence">Single user license</p>

                            <div class="pricing-price">
                                <span class="pricing-anim pricing-anim-1">
                                    <span class="pricing-currency">$</span>9<small>98</small>
                                </span>
                                <span class="pricing-anim pricing-anim-2">
                                    <span class="pricing-time"> /year</span>
                                </span>
                            </div>
                            <ul class="pricing-feature-list">
                                <li><b>Secure data</b> transfer</li>
                                <li><b>Personalization</b> options</li>
                                <li class="inactive-feature">Social media integration</li>
                                <li class="inactive-feature">Support and updates</li>
                                <li class="inactive-feature">Offline work</li>
                                <li class="inactive-feature">Analytics</li>
                            </ul>
                            <button class="btn btn-default btn-lg">
                                <i class="fa-shopping-cart"></i>
                                Choose plan
                            </button>
                        </div>

                        <div class="pricing-item col-lg-4 col-md-4 col-sm-6 col-xs-12 best-value">
                            <div class="lnr lnr-store"></div>
                            <h4 class="pricing-title">Business</h4>

                            <p class="pricing-sentence">Our most popular plan</p>

                            <div class="pricing-price">
                                <span class="pricing-anim pricing-anim-1">
                                    <span class="pricing-currency">$</span>299<small>98</small>
                                </span>
                                <span class="pricing-anim pricing-anim-2">
                                    <span class="pricing-time"> /month</span>
                                </span>
                            </div>
                            <ul class="pricing-feature-list">
                                <li><b>Secure data</b> transfer</li>
                                <li><b>Personalization</b> options</li>
                                <li><b>Social media</b> integration</li>
                                <li class="inactive-feature">Support and updates</li>
                                <li class="inactive-feature">Offline work</li>
                                <li class="inactive-feature">Analytics</li>
                            </ul>
                            <button class="btn btn-pricing animate pulse">
                                <i class="fa-shopping-cart"></i>
                                Choose plan
                            </button>
                        </div>

                        <div class="pricing-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="lnr lnr-apartment"></div>
                            <h4 class="pricing-title">Enterprise</h4>

                            <p class="pricing-sentence">Absolutely everything you need</p>

                            <div class="pricing-price">
                                <span class="pricing-anim pricing-anim-1">
                                    <span class="pricing-currency">$</span>999<small>98</small>
                                </span>
                                <span class="pricing-anim pricing-anim-2">
                                    <span class="pricing-time"> /year</span>
                                </span>
                            </div>
                            <ul class="pricing-feature-list">
                                <li><b>Secure data</b> transfer</li>
                                <li><b>Personalization</b> options</li>
                                <li><b>Social media</b> integration</li>
                                <li><b>Support</b> and updates</li>
                                <li><b>Offline</b> work</li>
                                <li><b>Analytics</b></li>
                            </ul>
                            <button class="btn btn-default btn-lg">
                                <i class="fa-shopping-cart"></i>
                                Choose plan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- < Download >............
        ............................ -->
        <section id="download" class="section image-cover parallax">
            <div class="color-overlay overlay-4">
                <div class="container">
                    <div class="section-heading dark center">
                        <h2>Download</h2>
                        <h5>Get the <b>app</b></h5>
                    </div>
                    <div class="section-content text-center">
                        <button class="btn btn-lg btn-download android">
                            <i class="fa-apple"></i>
                            <span>
                        Download on the
                        <b>App Store</b>
                    </span>
                        </button>
                        <button class="btn btn-lg btn-download ios">
                            <i class="fa-android"></i>
                            <span>
                        Android app on
                        <b>Google Play</b>
                    </span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- < CONTACT US >............
        ............................ -->
        <section id="contactus" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12 contact-left">
                        <div class="section-heading center">
                            <h2>Meet us</h2>

                            <p><b>The creative way</b> to present your app</p>
                        </div>

                        <p class="bold us">Adipisci, animi deleniti earum et exercitationem nemo placeat porro saepe sequi sunt. Aspernatur consectetur et harum maiores nobis perspiciatis possimus? Illo, molestiae!</p>

                        <p class="us">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, architecto consequatur corporis cum dignissimos.</p>

                        <ul class="list-unstyled icon-list icon-list-md">
                            <li>
                                <i class="fa-map-marker"></i>
                                <div>
                                    <span>1234 Street Name</span>
                                    <span>City Name</span>
                                    <span>Your country</span>
                                </div>
                            </li>
                            <li>
                                <i class="fa-phone"></i>
                                <div>
                                    <span>(123) 456-7890</span>
                                    <span>(123) 987-6543</span>
                                </div>
                            </li>
                            <li>
                                <i class="fa-envelope-o"></i>
                                <div>
                                    <span><a href="mailto:yourmail@domain.com">yourmail@domain.com</a></span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-6 col-xs-12 contact-right">
                        <div class="section-heading center">
                            <h2>Drop us a line</h2>

                            <p><b>Send us your message</b> or just say hello</p>
                        </div>

                        <form id="contact-form" method="post" class="contact-form expanded" action="srv/contact.php">
                            <div id="form-message" class="form-message alert hidden"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Your Name" name="ContactForm[name]" id="contact_form_name" class="form-control" required>
                                </div>

                                <div class="col-md-6">
                                    <input type="email" placeholder="Valid Email Address" name="ContactForm[email]" id="contact_form_email" class="form-control" required>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" placeholder="Subject" name="ContactForm[subject]" id="contact_form_subject" class="form-control" required>
                                </div>

                                <div class="col-md-12">
                                    <textarea placeholder="Your Message" rows="8" name="ContactForm[message]" id="contact_form_message" class="form-control" required></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label for="contact_form_copyme"><input id="contact_form_copyme" name="ContactForm[copyme]" type="checkbox" value="1"/>
                                            Send a copy to my email
                                        </label>
                                    </div>
                                    <div class="submit-wrapper">
                                        <button id="contact-submit" data-loading-text="Sending..." name="submit" type="submit" class="btn btn-submit btn-lg">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- < COUNTERS >............
        ............................ -->
        <section id="counters" class="counters st-2 section image-cover parallax">
            <div class="container">
                <div class="row">
                    <div class="col col-md-4">
                        <div class="counter">
                            <h3>1<small>K</small></h3>
                            <i class="lnr lnr-cloud-download"></i>
                        </div>
                        <p>Downloads this year</p>
                    </div>
                    <div class="col col-md-4">
                        <div class="counter">
                            <h3 class="number">3<small>K</small></h3>
                            <i class="lnr lnr-smile"></i>
                        </div>
                        <p>Happy users</p>
                    </div>
                    <div class="col col-md-4">
                        <div class="counter">
                            <h3 class="number">2<small>K</small></h3>
                            <i class="lnr lnr-thumbs-up"></i>
                        </div>
                        <p>Likes</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- < SUBSCRIBE >............
        ............................ -->
        <section id="subscribe" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-left"><h2>Yalp official <b>Newsletter</b></h2></div>
                    <div class="col-sm-6 col-right">
                        <form id="subscribe-form" method="post" class="subscribe-form expanded" action="srv/subscribe.php">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-message alert hidden text-left">hello</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="SubscribeForm[email]" placeholder="Valid email" required>
                                </div>
                                <div class="col-sm-4">
                                    <button id="subscribe-submit" data-loading-text="Sending..." name="submit" type="submit" class="btn btn-submit btn-lg">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- < FOOTER >.................
    ................................ -->
    <footer id="site-footer" class="site-footer section narrow">
        <div class="container">
            <a href="#main-header" class="scrollto logo-a">
                <!-- <img class="logo logo-lg" src="img/logo.png" alt="Yalp" /> -->
                <span class="logo t">Yalp</span>
            </a>

            <p class="footer-phrase">Don't wait - <b>Get Yalp</b> now!</p>

            <p class="copyright">
                &copy; 2016 Yalp, <em>by</em> <a class="brand bold" href="http://www.5studios.net">5Studios.net</a>
            </p>

            <hr>
            <ul class="social-icons list-unstyled">
                <li class="social-icon"><a href=""><i class="fa-facebook facebook has-circle"></i></a></li>
                <li class="social-icon"><a href=""><i class="fa-twitter twitter has-circle"></i></a></li>
                <li class="social-icon"><a href=""><i class="fa-google-plus googleplus has-circle"></i></a></li>
                <li class="social-icon"><a href=""><i class="fa-youtube youtube has-circle"></i></a></li>
                <li class="social-icon"><a href=""><i class="fa-pinterest pinterest has-circle"></i></a></li>
            </ul>
        </div>
    </footer>
</div>

<!-- FOR DEMO PURPOSES ONLY -->
<div class="header-selector selector-closed" id="header-selector">
    <span class="tab">
        <i class="fa-cog fa-spin"></i>
    </span>

    <h3>Home page variants</h3>
    <ul class="list list-unstyled clearfix">
        <li><a href="index.html">Image</a></li>
        <li><a href="solid-header.html">Solid color</a></li>
        <li><a href="video-header.html">Video</a></li>
        <li><a href="typed-header.html">Typed</a></li>
    </ul>

    <h4>Configure color scheme</h4>
    <ul class="color-scheme list-unstyled clearfix">
        <li class="default"><i data-rel="default" class="bg styleswitch"><i class="sm"></i></i></li>
        <li class="turquoise"><i data-rel="turquoise" class="bg styleswitch"><i class="sm"></i></i></li>
        <li class="violet"><i data-rel="violet" class="bg styleswitch"><i class="sm"></i></i></li>
        <li class="wisteria"><i data-rel="wisteria" class="bg styleswitch"><i class="sm"></i></i></li>
        <li class="carrot"><i data-rel="carrot" class="bg styleswitch"><i class="sm"></i></i></li>
        <li class="sunflower"><i data-rel="sunflower" class="bg styleswitch"><i class="sm"></i></i></li>
    </ul>

    <p><small>Or construct your own</small></p>
    <form action="themes/select/" class="form" id="theme-selector">
        <div id="color-picker-1" class="input-group input-group-sm colorpicker-component">
            <input value="#ffffff" type="text" class="form-control" name="Pallete[color1]" required />
            <span class="input-group-addon"><i></i></span>
        </div>
        <div id="color-picker-2" class="input-group input-group-sm colorpicker-component">
            <input value="#e6ecf2" type="text" class="form-control" name="Pallete[color2]" required/>
            <span class="input-group-addon"><i></i></span>
        </div>
        <div id="color-picker-3" class="input-group input-group-sm colorpicker-component">
            <input value="#fe3f51" type="text" class="form-control" name="Pallete[color3]" required/>
            <span class="input-group-addon"><i></i></span>
        </div>
        <div id="color-picker-4" class="input-group input-group-sm colorpicker-component">
            <input value="#008ed6" type="text" class="form-control" name="Pallete[color4]" required/>
            <span class="input-group-addon"><i></i></span>
        </div>

        <div class="clearfix"></div>
        <button class="btn btn-default btn-pallete btn-primary" data-loading-text="Generating schema..." id="theme-submit" type="submit">Change scheme</button>
    </form>
</div>
<!-- ENDDEMO  -->

<script src="js/lib.js"></script>
<script src="js/yalp.js"></script>
</body>
</html>
