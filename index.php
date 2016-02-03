<?php 
define('ROOT_PATH', dirname(__DIR__) . '/');
header('X-UA-Compatible: IE=edge'); 
ob_start("ob_gzhandler");
error_reporting(0);
@ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset="utf-8">
<title>Our WA Parks</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="format-detection" content="telephone=no" />
<meta content='Our WA Parks believes an independent and supportive parks foundation is a way to encourage business, government and the community to help maintain and conserve parks in Western Australia.' name='description' />
<meta content='Government of Western Australia' name='author' />

<!-- social -->
<meta property="og:title" content="Our WA Parks">
<meta property="og:url" content="http://www.ourwaparks.com.au" />
<meta property="og:type" content="government">
<meta property="og:description" content="Our WA Parks believes an independent and supportive parks foundation is a way to encourage business, government and the community to help maintain and conserve parks in Western Australia.">
<meta property="og:image" content="http://www.ourwaparks.com.au/assets/img/facebook-og2.png">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">

<link href="favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<link href='http://fonts.googleapis.com/css?family=Great+Vibes:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic' rel='stylesheet' type='text/css'>

<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<!-- FONT AWESOME ICONS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<div id="wrapper">
<!-- nav -->


<nav class="navbar navbar-dark navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="#page-top">
                        <span class="logo">
                            <!--img src="assets/img/logo-ourwaparks-teal.png" alt="logo"--> OUR <span class="text-primary">WA PARKS</span> 

                        </span>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li class="page-scroll">
                            <a href="#about">About</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#feedback">Feedback</a>
                        </li>
                        <li class="page-scroll">
 			<a href="#newsletter">News</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>


<!-- // nav -->

<!-- home -->

<header class="intro-img intro-dark-bg" style="background-image: url(assets/img/our-wa-parks-bg-3.jpg)" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="intro-body" data-scrollreveal="move 0 over 1.5s">
                <div class="container">
                      <div class="intro-welcome">Welcome to</div>
                    <br>
                    <h1 class="brand-heading">
                        OUR <span class="text-primary">WA PARKS</span> 
                    </h1>
                    <!--hr class="light"-->
                  <img src="assets/img/Badge_of_the_Governor_of_Western_Australia.png" alt="Badge of the Governer of Western Australia" />
                    <div class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <h4>We all need to invest in our parks...</h4>
                            </div>
                            <div class="item">
                                <h4>Business, community, government</h4>
                            </div>
 		        <div class="item">
                                <h4>Our parks are our heritage</h4>
                            </div>

                        </div>
                    </div>
                    <div>
                         <!--a href="https://vimeo.com/136166683" class="popup-vimeo btn btn-lg btn-primary"><i class="fa fa-play"></i> PLAY VIDEO</a-->
                     <a class="watchvid btn btn-lg btn-primary" id="youtube-link" href="http://www.youtube.com/watch?v=OXhbbC3756E" target=""><i class="fa fa-play"></i> PLAY VIDEO</a>

                    </div>
                </div>
            </div>
        </header>

<!-- // home -->

<!-- about -->

<section id="about" >
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-center">About our WA Parks</h2>
                        <hr class="primary">
                        <div class="media">
  <div class="media-left">
    
      <img class="media-object thumbnail" src="assets/img/kerry-sanderson-2.jpg" alt="Her Excellency the Honourable Kerry Sanderson AO Governor of Western Australia" style="width:200px;"/>

  </div>
  <div class="media-body">
        <p>It is up to all of us to ensure the conservation of our State's wonderful national parks, marine parks and other conservation reserves continues for the enjoyment of many generations to come.
An independent and supportive parks foundation or friends association may be a way to encourage business, government and the community to help maintain and conserve our parks.</p>
<p>While there is so much work already being done to protect our plants and animals and make visitor experiences at our parks among the best in the world, we need your help to better achieve our goal of connecting people to the environment so it is valued, visited and appreciated.
</p>
<p>Her Excellency the Honourable Kerry Sanderson AO<br>Governor of Western Australia</p>

  </div>
</div>
                                              
            
                    </div>
                </div>
            </div>
        </section>

<!-- // about -->


<!-- feedback -->

<section id="feedback" class="contact-1 bg-parallax-dark nopadding" style="background-image: url(assets/img/map-background-2.jpg); background-position: 50% 50% no-repeat;" data-stellar-background-ratio="0.5">
   <div class="section-overlay">
         <div class="container">
                <div class="row">
                    <div class="col-lg-4" data-scrollreveal="enter left over 1.5s">
                        <h2>Feedback</h2>
                        <p>We value your feedback, so please get in touch to register your interest in this important initiative, find out more or simply leave your comments.</p>
                    </div>
                    <div class="col-lg-7 col-lg-offset-1" data-scrollreveal="enter right over 1.5s">
                        <br>
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Message</label>
                                    <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-lg btn-primary btn-square btn-raised">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>            </div>
</div>
        </section>


<!--// feedback -->
<!-- newsletter signup -->

<section id="newsletter" class="screen-cta text-center contact-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>News</h2>
<p>Subscribe to our mailing list</p>
<!-- Begin Signup Form -->
<div id="mc_embed_signup">
<form action="//ourwarparks.us12.list-manage.com/subscribe/post?u=c30b84598350a7217a66c00cf&amp;id=478e6f6f56" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Email Address</label>

                                    <input type="email" value="" name="EMAIL" class="email form-control" id="mce-EMAIL" placeholder="Email address" required>
                          
                                </div>

    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
     <div style="position: absolute; left: -5000px;"><input type="text" name="b_c30b84598350a7217a66c00cf_478e6f6f56" tabindex="-1" value=""></div>

<div class="row">
                                <div class="form-group col-xs-12" style="margin-top:20px;">
                                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-lg btn-primary btn-square btn-raised">
                                </div>
                            </div>


   

</form>
</div>
<p><a href="http://us12.campaign-archive2.com/home/?u=c30b84598350a7217a66c00cf&id=9617e59dcf">View archive of past newsletters</a></p>


<!--End mc_embed_signup-->
                <hr class="primary">

                <div data-scrollreveal="enter from bottom and move 150px over 1s">
                    <img src="assets/img/newsletters.png" alt="Example newsletter" class="img-responsive" style="margin: 0 auto;"/>
                </div>
            </div>
        </div>
    </div>
</section>
<!--// newsletter -->
<!-- footer -->

<footer class="footer-1">
            <div class="upper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h4><a href="http://www.govhouse.wa.gov.au/">www.govhouse.wa.gov.au</a></h4>
                        </div>
                        <div class="col-md-8">


<!-- social share -->
<div class="share-layer">
<ul class="list-inline">
	<li><h3 class="script">Share:</h3></li>
          <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://www.ourwaparks.com.au/" title="Share on Twitter" target="_blank" class="btn btn-social-light btn-facebook"><i class="fa fa-fw fa-facebook"></i></a></li>
          <li><a href="http://twitter.com/home?status=http://www.ourwaparks.com.au/" title="Share on Twitter" target="_blank" class="btn btn-social-light btn-twitter"><i class="fa fa-fw fa-twitter"></i></a></li>
          <li><a href="https://plus.google.com/share?url=http://www.ourwaparks.com.au/" title="Share on Google+" target="_blank" class="btn btn-social-light btn-google-plus"><i class="fa fa-fw fa-google-plus"></i></a></li>
</ul>
</div>
<!--// end social share -->

                        </div>

                    </div>
                </div>
            </div>
            <div class="lower">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <span class="small">Copyright &copy; 2015 - Government of Western Australia</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

<!--// feedback -->


<div class="page-scroll" data-scrollreveal="enter top after .6s"><a href="#page-top" class="scrollToTop" data-original-title="" title="" style="display: inline;"><em class="fa fa-chevron-up fa-3x"></em></a></div>

</div>

<!-- modal -->
<div class="modal modal-lg fade" data-backdrop="dynamic" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h2>Thanks for watching</h2>
                              <p>With your help, our State's wonderful natural areas can be valued, visited and appreciated into the future. We value your feedback, so please get in touch to register your interest in this important initiative, find out more or simply leave your comments.</p>
                              <p><a href="javascript:void(0);" class="btn btn-lg btn-primary btn-block"  id="gotofeedback"><i class="fa fa-commenting"></i> Leave feedback</a> </p>
		
            </div>
        </div>
    </div>
</div>
<!--// modal -->
<script src="assets/js/modernizr.custom.js"></script>
<script src="assets/js/scripts.js?v=18082015"></script>
<script src="https://www.youtube.com/iframe_api"></script>
<script>
jQuery(document).ready(function ($) {
    $('#youtube-link').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
       removalDelay: 160,
      fixedContentPos: true,
        preloader: false,
        callbacks: {
            open: function () {
                new YT.Player('player', {
                    events: {
                        'onStateChange': onPlayerStateChange
                    }
                });
            },
            close: function() {
    		$('#feedbackModal').modal('show');
    		}
        }
    });
});

function onPlayerStateChange(event) {
    switch (event.data) {
        case YT.PlayerState.ENDED:
           $.magnificPopup.close();
           $('#feedbackModal').modal('show');
            alert
            break;
    }
}

</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41704816-5', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>
