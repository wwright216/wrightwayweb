<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"">
    <meta name="description" content="Wade Wright's Portfolio">
    <meta name="author" content="Wade Wright">

    <title>Wright Way Web</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Site CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!--Reize iframe -->
    <script type="text/javascript">
        function resizeIframe(obj){
            var newheight=obj.contentWindow.document.body.scrollHeight;
            obj.style.height=newheight>700?'700px':newheight+'px';
        }
    </script>

</head>

<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Wright Way Web</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Portfolio</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                    <li>
                        <a href="/login">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/profile.png" alt="">
                    <div class="intro-text">
                        <h1 class="name">Wade Wright</h1>
                        <hr class="star-light">
                        <span class="skills">Web Developer</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Portfolio</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <p align="center">I have included some tools built in PHP to show my skills. Select the icons below to utilize each tool.</p>
            <br>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href= "/weather" data-target="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/weather.png" class="img-responsive" alt="Weather">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/game.png" class="img-responsive" alt="Man City Quiz">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/safe.png" class="img-responsive" alt="Login for more features">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href = "/unitConversion" data-target="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/conversion.png" class="img-responsive" alt="Unit Conversion">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="/magic" data-target="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/8ball.png" class="img-responsive" alt="Magic 8-Ball">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/contact.png" class="img-responsive" alt="Circus tent">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                        <p>Hey all! My name is Wade Wright and I am a native of the Tampa Bay area. I attended Hillsborough Community College where I obtained my AA in Computer Information Systems.</p>
                        <p>I consider myself a self-taught, independant thinking individual. The internet is such a beautiful place for us to achieve anything we desire; there is a tutorial or a video out there that can teach you just about anything.</p>
                        <p>The majority of my skills I learned from completing many courses on <a href="https://laracasts.com" target="_blank" style="color: white">Laracast</a> including <a href="https://laracasts.com/series/php-for-beginners" target="_blank"  style="color: white">The PHP Practioner</a>, <a href="https://laracasts.com/series/object-oriented-bootcamp-in-php" target="_blank"  style="color: white"> Object-Oriented Bootcamp</a>, <a href="https://laracasts.com/series/php7-up-and-running" target="_blank"  style="color: white">PHP 7 Up and Running</a>, <a href="https://laracasts.com/series/laravel-from-scratch-2017" target="_blank"  style="color: white"> Laravel 5.4 From Scratch</a> and <a href="https://laracasts.com/series/sublime-text-mastery" target="_blank"  style="color: white">Sublime Text Mastery</a>. I have also completed some courses on <a href="https://teamtreehouse.com" target="_blank" style="color: white">Team Treehouse</a>.
                        </p>
                        <p>In March 2017 I decided that it was time for me to join the Software Engineer world. I have spent a decent bit of my professional life on the Technical and Customer Support side of the technology space but have always had a passion for coding. I created this site to show what I learned in the recent past.</p>
                        <p>I am a huge soccer fan and my favorite team is Manchester City of the English Premier League (which you will notice from the Projects & Games section of the site). I enjoy outdoorsy types of things such as kayaking, hiking, camping, fishing etc. and I also LOVE to snowboard when given the opportunity.</p>
                        <br>
                        <p>This site is built on Laravel and is fully responsive. I am familiar with PHP, Python, CSS and HTML. I hope you enjoy!</p>
            </div>
        </div>
    </section>

<!-- Contact Section -->

<section id="contact">
<div class="container">
            <div class="row">
<h1 align="center">Contact Wade</h1>
<meta name="csrf-token" content="{{ csrf_token() }}">
<hr class="star-primary">
</div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
<form class="form-horizontal" method="POST" action="#" id="contactForm">
  
  <div class="form-group">
    <div class="form-group col-xs-12 floating-label-form-group controls">   
    <label for="name">Name</label> 
    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-validation-required-message="Please enter your name.">
    <p class="help-block text-danger"></p>
    </div>
  </div>
  <div class="form-group">
    <div class="form-group col-xs-12 floating-label-form-group controls">
    <label for="email">Email</label> 
    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required data-validation-required-message="Please enter a valid email address.">
    <p class="help-block text-danger"></p>
    </div>
  </div>
  <div class="form-group">
    <div class="form-group col-xs-12 floating-label-form-group controls">
    <label for="message">Message</label> 
    <textarea class="form-control" id="message" name="message" placeholder="Message" required data-validation-required-message="Please enter a message to send."></textarea>
    <p class="help-block text-danger"></p>
    </div>
  </div>
  <br>
  <div id="success"></div>
  <div class="form-group col-xs-12">
  <button type="submit" class="btn btn-success btn-lg">Send
  </button>
  </div>
</form>
</div>
</div>
</div>
</section>
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>Tampa, FL</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.linkedin.com/in/wade-wright-8bb8aa12/" class="btn-social btn-outline" target="_blank"  style="color: white"><span class="sr-only">LinkedIn</span><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="https://github.com/wwright216" class="btn-social btn-outline" target="_blank"  style="color: white"><span class="sr-only">GitHub</span><i class="fa fa-fw fa-github"></i></a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/u/0/109268109973458193568" class="btn-social btn-outline" target="_blank"  style="color: white"><span class="sr-only">Google Plus</span><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About WrightWayWeb</h3>
                        <p>This site was coded, designed, deployed and maintained by Wade Wright using the LAMP stack on a <a href="https://www.linode.com/" target="_blank">Linode</a> VPS.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Wright Way Web 2017
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                    <div class="modal-body">
                            <h2>Man City Quiz</h2>
                            <hr class="star-primary">
                            <img src="manchester-city-logo.png" class="img-responsive img-centered" alt="">
                            <div class="container">
                                <iframe src="/quiz" frameborder="0" width="100%" onload='javascript:resizeIframe(this);'>
                                </iframe>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <div class="clearfix text-center">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                    <div class="modal-body">
                            <img src="img/portfolio/contact.png" class="img-responsive img-centered" alt="">
                            <div class="container">
                                <iframe src="/contact" frameborder="0" width="100%" onload='javascript:resizeIframe(this);'>
                                </iframe>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <div class="clearfix text-center">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Login Required</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/safe.png" class="img-responsive img-centered" alt="">
                            <p>To use this section, you must <a href="/login">Click Here</a></p>
                            <p>This area has tools like creating your own ToDo List. All behind secure login.</p>
                            <button id="btnSubmit" type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Site JavaScript -->
    <script src="js/freelancer.min.js"></script>
</body>
</html>