<!-- get_header('Page Name','Title')-->
<!doctype html>
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
    
<div class="wrapper-area">
<!-- Header Area Start Here -->
<header>
    
    <div class="header-style1-area">
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                   
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-12">
                        <div class="header-top-right">
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="<?php echo $PhoneRef;?>"> <?php echo $PhoneName.$Phone;?></a></li><br class="visible-sm">
                                <li ><i class="fa fa-envelope" aria-hidden="true"></i><a href="<?php echo $MailRef;?>"><?php echo $Mail;?></a></li>
                                <li ><i class="fa fa-clock-o"></i><a href=""><?php echo $Schedule;?></a></li>
                                <li ><i class="fa fa-money"></i><a href=""><?php echo $Payment;?></a></li>
                                 </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="logo-area">
                            <a href="index.php"><img class="img-responsive logoimg" src="img/logo.png" alt="logo" loading="lazy"></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="main-menu-area">
                            <nav>
                                <ul>
                                    <li> <a href="index.php">Inicio</a> </li>
                                    <li> <a href="about.php">Acerca de Nosotros</a> </li>
                                    <li> <a href="services.php">Productos</a> </li>
                                    <li> <a href="gallery.php">Galeria</a> </li>
                                    <li><a href="contact.php">Contacto</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('php/secction/menumobil.php') ?>

</header>