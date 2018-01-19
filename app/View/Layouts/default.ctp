<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<?php echo $this->Html->css("style"); ?>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
		<!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
		<?php echo $this->Html->css("bootstrap.min"); ?>
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <!-- Nivo slider CSS
		============================================ -->
    <link rel="stylesheet" href="/css/nivo-slider.css">
    <link rel="stylesheet" href="/css/preview.css">
    <!-- form input select CSS
		============================================ -->
    <link rel="stylesheet" href="/css/prism.css">
    <link rel="stylesheet" href="/css/chosen.css">
    <!-- perspectiveRules CSS
		============================================ -->
    <link rel="stylesheet" href="/css/perspectiveRules.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="/css/normalize.css">
    <!-- lightbox CSS
		============================================ -->
    <link rel="stylesheet" href="/css/lightbox.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="/css/main.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="/css/meanmenu.min.css">
    <!-- Video CSS
		============================================ -->
    <link rel="stylesheet" href="/css/jquery.mb.YTPlayer.css">
    <!-- Custom Fonts CSS
		============================================ -->
    <link rel="stylesheet" href="/css/custon-icon.css">
    <!-- animated headlines CSS
		============================================ -->
    <link rel="stylesheet" href="/css/animated-headlines.css">
    <!-- switcher CSS
		============================================ -->
    <link rel="stylesheet" href="/css/color-switcher.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
		<script src="/js/vendor/modernizr-2.8.3.min.js"></script>
		
		 <!-- Color Css Files
		============================================ -->
    <link rel="alternate stylesheet" type="text/css" href="/switcher/color-one.css" title="color-one" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="/switcher/color-two.css" title="color-two" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="/switcher/color-three.css" title="color-three" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="/switcher/color-four.css" title="color-four" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="/switcher/color-five.css" title="color-five" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="/switcher/color-six.css" title="color-six" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="/switcher/color-seven.css" title="color-seven" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="/switcher/color-eight.css" title="color-eight" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="/switcher/color-nine.css" title="color-nine" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="/switcher/color-ten.css" title="color-ten" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="/switcher/pattren1.css" title="pattren1" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="/switcher/pattren2.css" title="pattren2" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="/switcher/pattren3.css" title="pattren3" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="/switcher/pattren4.css" title="pattren4" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="/switcher/pattren5.css" title="pattren5" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="/switcher/background1.css" title="background1" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="/switcher/background2.css" title="background2" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="/switcher/background3.css" title="background3" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="/switcher/background4.css" title="background4" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="/switcher/background5.css" title="background5" media="screen" />

</head>
<body>
	<div id="container">
		<!--[if lt IE 8]>
				<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<!--Header Start-->
		<div class="as-mainwrapper">
				<div class="header-area pd-30">
						<div class="container">
								<div class="row">
										<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
												<div class="logo">
														<a href="/"><img src="/img/logo/logo.png" alt="" />
														</a>
												</div>
										</div>
										<div class="col-lg-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
												<div class="header-phone">
														<div class="header-phone-icon">
																<i class="fa fa-phone"></i>
														</div>
														<div class="header-phone-details">
																<h5>+88 (019) 620 673 09</h5>
																<p>We are open 9 am - 10pm</p>
														</div>
												</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
												<div class="header-envalupe">
														<div class="header-envalupe-icon">
																<i class="fa fa-envelope" aria-hidden="true"></i>
														</div>
														<div class="header-envalupe-details">
																<h5>uttaraitpark@gmail.com</h5>
																<p>We are open 9 am - 10pm</p>
														</div>
												</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
												<div class="header-social-media">
														<ul class="header-social-icon">
																<li><a class="one" href="#"><i class="fa fa-facebook"></i></a>
																</li>
																<li><a class="two" href="#"><i class="fa fa-twitter"></i></a>
																</li>
																<li><a class="three" href="#"><i class="fa fa-linkedin"></i></a>
																</li>
																<li><a class="four" href="#"><i class="fa fa-youtube"></i></a>
																</li>
																<li><a class="five" href="#"><i class="fa fa-google-plus"></i></a>
																</li>
														</ul>
												</div>
										</div>
								</div>
						</div>
				</div>
				<!--Header End-->
				<!--Main Menu Start-->
				<div class="main-menu-super-area sicker-menu">
						<div class="main-header-area">
								<div class="container">
										<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<div class="main-menu-nav">
																<ul class="menu-nav">
																	<li><a href="/">Home</a></li>
																	<li><a href="/about">About</a></li>
																	<li><a href="/videos">Video</a></li>
																	<li><a href="/blogs">Blog</a></li>
																	<li><a href="/histories">Sold History</a></li>
																	<li><a href="/fangs">Listings</a></li>
																	<li><a href="/">Networks</a></li>
																</ul>
														</div>
												</div>
										</div>
								</div>
						</div>
				</div>
		<!--Main Menu End-->
		<!-- Mobile Menu start -->
		<div class="mobile-menu-area">
			<div class="container">
					<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="mobile-menu">
											<nav id="dropdown">
													<ul class="mobile-menu-nav">
														<li><a href="/">Home</a></li>
														<li><a href="/about">About</a></li>
														<li><a href="/videos">Video</a></li>
														<li><a href="/blogs">Blog</a></li>
														<li><a href="/histories">Sold History</a></li>
														<li><a href="/fangs">Listings</a></li>
														<li><a href="/">Networks</a></li>
													</ul>
											</nav>
									</div>
							</div>
					</div>
			</div>
	</div>
	<!-- Mobile Menu end -->

		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>

	<!--Footer Start -->
	<div class="hdream-footer-area pd-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 custom-footer-overlay">
                        <div class="footer-logo-wrap">
                            <div class="footer-logo">
								<h2>About Us</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing industry.It takes time and money to build or purchase.</p>
                            </div>
                            <div class="footer-address-details">
                                <ul class="get-in-touch">
                                    <li><i class="fa fa-home" aria-hidden="true"></i> Sector: #11, Road No: #17, House No: 06, Dhaka-1230, Bangladesh.</li>
                                    <li><i class="fa fa-phone-square" aria-hidden="true"></i> +01962067309, 01955239099</li>
                                </ul>
                            </div>
                            <div class="footer-social-media">
                                <ul class="footer-social-icon">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="latest-news">
                                    <h4>Latest News</h4>
                                    <ul class="latest-news-nav">
                                        <li>
                                            <div class="latest-news-img">
                                                <img src="/img/footer/1.jpg" alt="" />
                                            </div>
                                            <div class="latest-news-details">
                                                <h5><a href="#">Dream House Plans</a></h5>
                                                <p>Lorem Ipsum is simply dummy text</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="latest-news-img">
                                                <img src="/img/footer/2.jpg" alt="" />
                                            </div>
                                            <div class="latest-news-details">
                                                <h5><a href="#">Dream House Plans</a></h5>
                                                <p>Lorem Ipsum is simply dummy text</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="latest-news-img">
                                                <img src="/img/footer/3.jpg" alt="" />
                                            </div>
                                            <div class="latest-news-details">
                                                <h5><a href="#">Dream House Plans</a></h5>
                                                <p>Lorem Ipsum is simply dummy text</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="latest-post">
                                    <h4>Latest Post</h4>
                                    <ul class="latest-post-nav">
                                        <li>
                                            <div class="latest-post-img">
                                                <img src="/img/footer/4.jpg" alt="" />
                                            </div>
                                            <div class="latest-post-details">
                                                <h5><a href="#">Dream House Plans</a></h5>
                                                <p>Lorem Ipsum is simply dummy text</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="latest-post-img">
                                                <img src="/img/footer/5.jpg" alt="" />
                                            </div>
                                            <div class="latest-post-details">
                                                <h5><a href="#">Dream House Plans</a></h5>
                                                <p>Lorem Ipsum is simply dummy text</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="latest-post-img">
                                                <img src="/img/footer/6.jpg" alt="" />
                                            </div>
                                            <div class="latest-post-details">
                                                <h5><a href="#">Dream House Plans</a></h5>
                                                <p>Lorem Ipsum is simply dummy text</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="quick-contact">
                                    <h4>Quick Contact</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing industry.It takes time and money to build or purchase.</p>
                                    <div class="contact-form-quick">
                                        <input class="email-ft" type="email" placeholder="Type your E-mail address...">
                                        <textarea class="message2" name="message2" placeholder="Write here..."></textarea>
                                        <button type="submit" value="send">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="fotter-bottom-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="copy-right">
						<p>Copyright &#169; 2017 <a href="http://uttaraitpark.com/">uttaraitpark</a> All rights reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Footer end -->

	</div>
</body>

<!-- jquery
============================================ -->
<script src="/js/vendor/jquery-1.12.0.min.js"></script>
<!-- bootstrap JS
============================================ -->
<script src="/js/bootstrap.min.js"></script>
<!-- wow JS
============================================ -->
<script src="/js/wow.min.js"></script>
<!-- price-slider JS
============================================ -->
<script src="/js/jquery-price-slider.js"></script>
<!-- Nivo slider JS
============================================ -->
<script src="/js/jquery.nivo.slider.js"></script>
<!-- meanmenu JS
============================================ -->
<script src="/js/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
============================================ -->
<script src="/js/owl.carousel.min.js"></script>
<!-- scrollUp JS
============================================ -->
<script src="/js/jquery.scrollUp.min.js"></script>
<!-- slick JS
============================================ -->
<script src="/js/jquery.sticky.js"></script>
<!-- form input select JS
============================================ -->
<script src="/js/chosen.jquery.js"></script>
<script src="/js/prism.js"></script>
<script src="/js/init.js"></script>
<!-- isotope JS
============================================ -->
<script src="/js/waypoints.min.js"></script>
<script src="/js/jquery.counterup.min.js"></script>
<!-- isotope JS
============================================ -->
<script src="/js/isotope.pkgd.min.js"></script>
<!-- sliphover JS
============================================ -->
<script src="/js/jquery.directional-hover.min.js"></script>
<!-- logosDistort JS
============================================ -->
<script src="/js/jquery.particleground.min.js"></script>
<script src="/js/jquery.logosDistort.js"></script>
<!-- Video Player JS
============================================ -->
<script src="/js/jquery.mb.YTPlayer.js"></script>
<!-- animated headlines JS
============================================ -->
<script src="/js/animated-headlines.js"></script>
<!-- lightbox JS
============================================ -->
<script src="/js/lightbox.min.js"></script>
<!-- animated headlines JS
============================================ -->
<script src="/js/textilate.js"></script>
<!-- lettering JS
============================================ -->
<script src="/js/lettering.js"></script>
<!-- plugins JS
============================================ -->
<script src="/js/plugins.js"></script>
<!-- styleswitch JS
============================================ -->
<script src="/js/styleswitch.js"></script>
<!-- main JS
============================================ -->
<script src="/js/main.js"></script>


