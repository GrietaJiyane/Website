<?php

// Make the page validate
ini_set('session.use_trans_sid', '0');

// Create a random string, leaving out 'o' to avoid confusion with '0'
$char = strtoupper(substr(str_shuffle('abcdefghjkmnpqrstuvwxyz'), 0, 4));

// Concatenate the random string onto the random numbers
// The font 'Anorexia' doesn't have a character for '8', so the numbers will only go up to 7
// '0' is left out to avoid confusion with 'O'
$str = rand(1, 7) . rand(1, 7) . $char;

// Begin the session
session_start();

// Set the session contents
$_SESSION['captcha_id'] = $str;

?>
<!DOCTYPE html>
<html lang="en">
    <head>


    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','//connect.facebook.net/en_US/fbevents.js');

        fbq('init', '344154465708488');
        fbq('track', "PageView");
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"src="https://www.facebook.com/tr?id=344154465708488&ev=PageView&noscript=1"/>
    </noscript>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>App Your Event - World Class Software</title>

        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- custom css (blue color by default) -->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
       
        <!-- font awesome for icons -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- flex slider css -->
        <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
        <!-- animated css  -->
        <link href="css/animate.css" rel="stylesheet" type="text/css" media="screen">
        <!--google fonts-->
        
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <!--owl carousel css-->
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
        <link href="css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
        <!--mega menu -->
        <link href="css/yamm.css" rel="stylesheet" type="text/css">
        <!--popups css-->
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!--sky form pro css-->
        <link href="sky-form/css/sky-forms.css" rel="stylesheet">
    </head>
    <body>

        <div class="top-bar-dark">            
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 hidden-xs">
                        <ul class="list-inline socials-simple">
                            <li><a target="_blank" href="https://www.facebook.com/App-Your-Event-612342072122044/timeline/"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="https://twitter.com/appyourevent"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://za.linkedin.com/company/app-your-event"><i class="fa fa-linkedin"></i></a></li>
                            <li><a target="_blank" href="mailto:hello@appyourevent.co"><i class="fa fa-envelope"></i></a></li>

                        </ul>
                    </div>
                    <div class="col-sm-8 text-right">
                        <ul class="list-inline top-dark-right">                      
                            <li class="hidden-sm hidden-xs"><i class="fa fa-envelope"></i> hello@appyourevent.co</li>
                            <li class="hidden-sm hidden-xs"><i class="fa fa-phone"></i> +27 (0)11 568 2564</li>
                            <li><a class="topbar-icons" href="#"><span><i class="fa fa-search top-search"></i></span></a></li>
                        </ul>
                        <div class="search">
                            <form role="form">
                                <input type="text" class="form-control" autocomplete="off" placeholder="Write something and press enter">
                                <span class="search-close"><i class="fa fa-times"></i></span>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div><!--top-bar-dark end here-->
        <!--navigation -->
        <!-- Static navbar -->
        <div class="navbar navbar-default navbar-static-top yamm sticky" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" style="height:30px" href="index.html"><img style="float:left;" src="http://res.cloudinary.com/appyourevent/image/upload/v1447408446/logo-transparent_pz6wr1.png" alt=""><p style="float: left;">AppYourEvent<p></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown">
                            <a href="index.html">Home</a>
                        </li>


                        <!--menu Portfolio li end here-->
                        <li class="dropdown">
                            <a href="about.html">About</a>
                        </li>

                        <!--menu pages li end here-->
                        <li class="dropdown">
                            <a href="services.html">Features</a>
                        </li> <!--menu Shop li end here-->

                        <!--menu home li end here-->
                        <li class="dropdown">
                            <a href="clients.html">Clients</a>
                        </li>

                        <!--mega menu-->
                        <li class="dropdown yamm-fw active">
                            <a href="contact-advanced.php">Contact</a>
                        </li> <!--menu Features li end here-->
                        <!--mega menu end-->    


                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--container-->
        </div><!--navbar-default-->
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Contact Us</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>Contact Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div><!--breadcrumbs-->
        <div class="divide60"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-8 margin30 sky-form-columns">
                    <h3 class="heading">Contact info</h3>
                    <p>
                        Do you have a question? If so please contact us. 
                    </p>
                    <form action="sky-form/php_files/demo-contacts-process.php" method="post" id="sky-form" class="sky-form">
				
				
				<fieldset>					
					<div class="row">
						<section class="col col-6">
							<label class="label">Name</label>
							<label class="input">
								<i class="icon-append fa fa-user"></i>
								<input type="text" name="name" id="name">
							</label>
						</section>
						<section class="col col-6">
							<label class="label">E-mail</label>
							<label class="input">
								<i class="icon-append fa fa-envelope-o"></i>
								<input type="email" name="email" id="email">
							</label>
						</section>
					</div>
					
					<section>
						<label class="label">Subject</label>
						<label class="input">
							<i class="icon-append fa fa-tag"></i>
							<input type="text" name="subject" id="subject">
						</label>
					</section>
					
					<section>
						<label class="label">Message</label>
						<label class="textarea">
							<i class="icon-append fa fa-comment"></i>
							<textarea rows="4" name="message" id="message"></textarea>
						</label>
					</section>
					
					<section>
						<label class="label">Enter characters below:</label>
						<label class="input input-captcha">
                                                    <img src="sky-form/captcha/image.php?<?php echo time(); ?>" width="100" height="35" alt="Captcha image" />
							<input type="text" maxlength="6" name="captcha" id="captcha">
						</label>
					</section>
					
					<section>
						<label class="checkbox"><input type="checkbox" name="copy"><i></i>Send a copy to my e-mail address</label>
					</section>
				</fieldset>
				
				<footer>
					<button type="submit" class="btn border-black btn-lg">Send message</button>
				</footer>
				
				<div class="message">
					<i class="fa fa-check"></i>
					<p>Your message was successfully sent!</p>
				</div>
			</form>	
        				
                </div>
                <div class="col-md-4">
                    <h3 class="heading">Contact info</h3>
                    <ul class="list-unstyled contact contact-info">
                        <li><p><strong><i class="fa fa-map-marker"></i> Address:</strong> 
11th Floor, Sinosteel Plaza,
159 Rivonia Road, Sandton, 2000
 South Africa</p></li> 
                        <li><p><strong><i class="fa fa-envelope"></i> Mail Us:</strong> <a href="mailto:hello@appyourevent.co">hello@appyourevent.co</a></p></li>
                        <li> <p><strong><i class="fa fa-phone"></i> Phone:</strong> +27 (0)11 568 2564</p></li>
                    </ul>
                    <div class="divide40"></div>
                    <h4>Get social</h4>
                    <ul class="list-inline social-1">
                        <li><a href="https://www.facebook.com/App-Your-Event-612342072122044/timeline/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/appyourevent"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div><!--contact advanced container end-->
        <div class="divide60"></div>
          <div id="map-canvas"></div>
        <footer id="footer">
            <div class="container">

                <div class="row">
                    <div class="col-md-3 col-sm-6 margin30">
                        <div class="footer-col">
                            <h3>About Us</h3>
                            <p>
                                App Your Event's innovative technology translates to a better attendee experience, reduced costs, increased revenue, and more than anything, an easier planning experience for you.
                            </p>
                            <ul class="list-inline social-1">
                                <li><a href="https://www.facebook.com/App-Your-Event-612342072122044/timeline/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/appyourevent"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>                        
                    </div><!--footer col-->
                    <div class="col-md-3 col-sm-6 margin30">
                        <div class="footer-col">
                            <h3>Contact</h3>

                            <ul class="list-unstyled contact">
                                <li><p><strong><i class="fa fa-map-marker"></i> Address:</strong> 11th Floor, Sinosteel Plaza,
159 Rivonia Road, Sandton, 2000
 South Africa</p></li> 
                                <li><p><strong><i class="fa fa-envelope"></i> Mail Us:</strong> <a href="mailto:hello@appyourevent.co">hello@appyourevent.co</a></p></li>
                                <li> <p><strong><i class="fa fa-phone"></i> Phone:</strong> +27 (0)11 568 2564</p></li>
                            </ul>
                        </div>                        
                    </div><!--footer col-->
                    <div class="col-md-3 col-sm-6 margin30">
                        <div class="footer-col">
                            <h3>Featured Work</h3>
                            <ul class="list-inline f2-work">
                                <li><a href="juicy-portfolio.html#cbp=ajax/project1.html"><img src="http://res.cloudinary.com/appyourevent/image/upload/v1447408451/MTN_Logo_Smllr_vs4ldv.png" class="img-responsive" alt=""></a></li>
                                <li><a href="juicy-portfolio.html#cbp=ajax/project2.html"><img src="http://res.cloudinary.com/appyourevent/image/upload/v1447408452/Oracle_ze3n3c.jpg" class="img-responsive" alt=""></a></li>
                                <li><a href="juicy-portfolio.html#cbp=ajax/project5.html"><img src="http://res.cloudinary.com/appyourevent/image/upload/v1447416929/HobbyX_wbdq5q.jpg" class="img-responsive" alt=""></a></li>
                                <li><a href="juicy-portfolio.html#cbp=ajax/project9.html"><img src="http://res.cloudinary.com/appyourevent/image/upload/v1447408438/App_Store_icon_1024x1024_glktfx.png" class="img-responsive" alt=""></a></li>
                                <li><a href="#"><img src="http://res.cloudinary.com/appyourevent/image/upload/v1447416929/Protea_Hotels_bzo213.jpg" class="img-responsive" alt=""></a></li>
                                <li><a href="juicy-portfolio.html#cbp=ajax/project3.html"><img src="http://res.cloudinary.com/appyourevent/image/upload/v1447416930/Sage_Pastel_tmzpsj.jpg" class="img-responsive" alt=""></a></li>
                                <li><a href="juicy-portfolio.html#cbp=ajax/project6.html"><img src="http://res.cloudinary.com/appyourevent/image/upload/v1447408456/Smart_Procurement_fzeusc.jpg" class="img-responsive" alt=""></a></li>
                                <li><a href="juicy-portfolio.html#cbp=ajax/project7.html"><img src="http://res.cloudinary.com/appyourevent/image/upload/v1447408455/SAACI_f2oa4l.jpg" class="img-responsive" alt=""></a></li>
                                <li><a href="juicy-portfolio.html#cbp=ajax/project4.html"><img src="http://res.cloudinary.com/appyourevent/image/upload/v1447408456/SES_ogwlng.jpg" class="img-responsive" alt=""></a></li>
                            </ul>
                        </div>                        
                    </div><!--footer col-->
                    <div class="col-md-3 col-sm-6 margin30">
                        <div class="footer-col">
                            <h3>Newsletter</h3>
                            <p>
                                Please enter your email address to signup for our free news letter. 
                            </p>
                            <form role="form" class="subscribe-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter email to subscribe">
                                    <span class="input-group-btn">
                            <button class="btn  btn-theme-dark btn-lg" type="submit">Ok</button>
                                    </span>
                                </div>
                            </form>
                        </div>                        
                    </div><!--footer col-->

                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="footer-btm">
                            <span>&copy;2015. App Your Event </span>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!--default footer end here-->
       <!--scripts and plugins -->
        <!--must need plugin jquery-->
        <script src="js/jquery.min.js"></script>        
        <!--bootstrap js plugin-->
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>       
        <!--easing plugin for smooth scroll-->
        <script src="js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <!--sticky header-->
        <script type="text/javascript" src="js/jquery.sticky.js"></script>
        <!--flex slider plugin-->
        <script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
        <!--parallax background plugin-->
        <script src="js/jquery.stellar.min.js" type="text/javascript"></script>
        
        
        <!--digit countdown plugin-->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <!--digit countdown plugin-->
        <script src="js/jquery.counterup.min.js" type="text/javascript"></script>
        <!--on scroll animation-->
        <script src="js/wow.min.js" type="text/javascript"></script> 
        <!--owl carousel slider-->
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>
        <!--popup js-->
        <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <!--you tube player-->
        <script src="js/jquery.mb.YTPlayer.min.js" type="text/javascript"></script>
        
        
        <!--customizable plugin edit according to your needs-->
        <script src="js/custom.js" type="text/javascript"></script>
         <!--sky form plugin js-->
        <script src="sky-form/js/jquery.form.min.js" type="text/javascript"></script>
        <script src="sky-form/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="js/sky-forms-custom.js" type="text/javascript"></script>
             <!--gmap js-->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript">
        
            var myLatlng;
            var map;
            var marker;

            function initialize() { //-26.0972014,28.0572856
                myLatlng = new google.maps.LatLng(-26.0972014, 28.0572856);

                var mapOptions = {
                    zoom: 13,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false,
                    draggable: false
                };

                map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                var contentString = '<p style="line-height: 20px;"><strong>Sinosteel plazza</strong></p><p>159 Rivonia Rd & Morningside ExtensionSandtonJohannesburg2000</p>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: 'Marker'
                });

                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(map, marker);
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>

        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69197752-1', 'auto');
  ga('send', 'pageview');

</script>
        
       
    </body>
</html>
