<?php @session_start();?>
<!doctype html>
<?php include 'php/text.php';?>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>SEO - SEO Index Page</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900%7COpen+Sans:400,700,700i" rel="stylesheet">

		<link rel="icon" type="image/png" href="favicon.ico">
		<!-- Place favicon.ico in the root directory -->
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">

		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/animate.css">
		<link rel="stylesheet" href="assets/css/iconfont.css">
		<link rel="stylesheet" href="assets/css/magnific-popup.css">
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="assets/css/rev-settings.css">

		<!--For Plugins external css-->
		<link rel="stylesheet" href="assets/css/plugins.css" />

		<!--Theme custom css -->
		<link rel="stylesheet" href="assets/css/style.css">

		<!--Theme Responsive css-->
		<link rel="stylesheet" href="assets/css/responsive.css" />
	</head>
    
<body>
<?php $_SESSION['token'] = md5(microtime()); ?>

    <script type="text/javascript">
        (function() {
            var options = {
                facebook: "351215899184325", // Facebook page ID
                whatsapp: "<?php echo $PhoneName.$Phone;?>", // WhatsApp number
                call_to_action: "Message us", // Call to action
                button_color: "#8b3e0e", // Color of button
                position: "left", // Position may be 'right' or 'left'
                order: "facebook,whatsapp", // Order of buttons
            };
            var proto = document.location.protocol,
                host = "getbutton.io",
                url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>
    
<!-- Header Area Start Here -->
<div class="header header-transparent nav-sticky">
    <!-- header section -->
    <header class="xs-header header-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="xs-logo-wraper">
                    <a href="index.html" class="xs-logo">
                        <img src="assets/images/logo-transparent-header.png" alt="" class="logo-transparent">
                        <img src="assets/images/logo.png" alt="" class="logo-sticky">
                    </a>
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <nav class="xs-menus align-to-right">
                    <div class="nav-header">
                        <a class="nav-brand" href="index.html"></a>
                        <div class="nav-toggle"></div>
                    </div>
                    <div class="nav-menus-wrapper">
                        <ul class="nav-menu align-to-right">
                            <li><a href="#">HOME</a>
                                <ul class="nav-dropdown xs-icon-menu clearfix">
                                    <li class="single-menu-item">
                                        <a href="index.html"><i class="icon icon-home2"></i> Home 1</a>
                                    </li>
                                    <li class="single-menu-item">
                                        <a href="index-2.html"><i class="icon icon-home2"></i> Home 2</a>
                                    </li>
                                    <li class="single-menu-item">
                                        <a href="index-3.html"><i class="icon icon-home2"></i> Home 3</a>
                                    </li>
                                    <li class="single-menu-item">
                                        <a href="index-4.html"><i class="icon icon-home3"></i> One Page Style</a>
                                    </li>
                                    <li class="single-menu-item">
                                        <a href="index-5.html"><i class="icon icon-home3"></i> One Page Style Two</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">PAGES</a>
                                <div class="megamenu-panel xs-icon-menu">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="single-menu-item">
                                                <a href="about.html"><i class="icon icon-briefcase"></i>About</a>
                                            </div>
                                            <div class="single-menu-item">
                                                <a href="case-studies.html"><i class="icon icon-line-chart"></i>Case Studies</a>
                                            </div>
                                            <div class="single-menu-item">
                                                <a href="case-details.html"><i class="icon icon-agenda3"></i>Case Details</a>
                                            </div>
                                            <div class="single-menu-item">
                                                <a href="faq.html"><i class="icon icon-question-circle"></i>FAQ</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="single-menu-item">
                                                <a href="team.html"><i class="icon icon-folder2"></i>Team</a>
                                            </div>
                                            <div class="single-menu-item">
                                                <a href="map.html"><i class="icon icon-chat"></i>Map</a>
                                            </div>
                                            <div class="single-menu-item">
                                                <a href="shop.html"><i class="icon icon-shopping-cart-1"></i>Shop</a>
                                            </div>
                                            <div class="single-menu-item">
                                                <a href="shop-single.html"><i class="icon icon-wallet"></i>Shop Single</a>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="single-menu-item">
                                                <a href="404.html"><i class="icon icon-padlock-1"></i>404</a>
                                            </div>    
                                            <div class="single-menu-item">
                                                <a href="pricing.html"><i class="icon icon-direction"></i>Pricing</a>
                                            </div>
                                            <div class="single-menu-item">
                                                <a href="typography.html"><i class="icon icon-agenda-1"></i>Typography</a>
                                            </div>  
                                            <div class="single-menu-item">
                                                <a href="testimonial.html"><i class="icon icon-users"></i>Testimonial</a>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">SERVICES</a>
                                <ul class="nav-dropdown xs-icon-menu clearfix">
                                    <li class="single-menu-item">
                                        <a href="email-marketing.html"><i class="icon icon-envelope2"></i> Email Marketing</a>
                                    </li>
                                    <li class="single-menu-item">
                                        <a href="offline-seo.html"><i class="icon icon-dart-board"></i> Offline SEO</a>
                                    </li>
                                    <li class="single-menu-item">
                                        <a href="social-media-marketing.html"><i class="icon icon-like"></i> Social Media Marketing</a>
                                    </li>
                                    <li class="single-menu-item">
                                        <a href="lead-generation.html"><i class="icon icon-stats-3"></i> Lead Generation</a>
                                    </li>
                                    <li class="single-menu-item">
                                        <a href="growth-hacking.html"><i class="icon icon-stats-4"></i> Growth Hacking</a>
                                    </li>
                                    <li class="single-menu-item">
                                        <a href="search-engine-optimization.html"><i class="icon icon-search2"></i> Search Engine Optimization</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">BLOG</a>
                                <ul class="nav-dropdown xs-icon-menu clearfix">
                                    <li class="single-menu-item">
                                        <a href="blog-grid-with-sidebar.html"><i class="icon icon-file-2"></i>Blog Grid Sidebar</a>
                                    </li>
                                    <li class="single-menu-item">
                                        <a href="blog-list.html"><i class="icon icon-file-2"></i>Blog List</a>
                                    </li>
                                    <li class="single-menu-item">
                                        <a href="blog-single.html"><i class="icon icon-contract"></i>Blog single</a>
                                    </li>    
                                </ul>
                            </li>
                            <li><a href="contact.html">CONTACT</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-lg-2 col-md-6">
                <ul class="xs-menu-tools">
                    <li>
                        <a href="#modal-popup-1" class="languageSwitcher-button xs-modal-popup">
                            <span class="xs-flag" style="background-image: url(assets/images/flags/006-united-states.svg);"></span>
                            <span class="lang-title">EN</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="offset-side-bar"><i class="icon icon-online-shopping-cart"></i></a>
                    </li>
                    <li>
                        <a href="#modal-popup-2" class="navsearch-button xs-modal-popup"><i class="icon icon-search"></i></a>
                    </li>
                </ul>
            </div>
        </div><!-- .row END -->
        <div class="navSidebar-wraper clearfix">
            <div class="single-navicon">
                <a href="#" class="navSidebar-button"><i class="icon icon-menu-1"></i></a>
            </div>
        </div><!-- .navSidebar-wraper END -->
    </div><!-- .container END -->
</header>    <!-- End header section -->
</div>