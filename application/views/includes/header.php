<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Health Portal</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/icomoon-social.css'); ?>">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/leaflet.css'); ?>" />
		<!--[if lte IE 8]>
		    <link rel="stylesheet" href="<?php echo base_url(bootstrap/css/leaflet.ie.css); ?> "/>
		<![endif]-->
		<link rel="stylesheet" href=" <?php echo base_url('bootstrap/css/main-red.css'); ?>">
		<link rel="stylesheet" href=" <?php echo base_url('bootstrap/css/sidebar.css'); ?>">

        <script src=" <?php echo base_url('bootstrap/js/modernizr-2.6.2-respond-1.1.0.min.js'); ?>"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

        <!-- Navigation & Logo-->
		<nav class="navbar navbar-default navbar-fixed-top" style="border-radius:0;margin-bottom:0; border-bottom: solid 3px teal; letter-spacing:1px;" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" style="color: teal;" href="#">Health Portal</a>
				</div>
				<div>
					<ul class="nav navbar-nav">
						<li class="active" ><a href="#"><span class="glyphicon glyphicon-home">&nbsp;Home</span></a></li>
						<li><a href="#"><span class="glyphicon glyphicon-search">&nbsp;</span>Search</a></li>
						<li><a href="#">Articles</a></li>
						<li><a href="#">Events</a></li>
						<li><a href="#">Forums</a></li>
						<li><a href="#">About Us</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><?php echo anchor('views/modules/sign_up.php','<span class="glyphicon glyphicon-user"></span>&nbsp; Sign Up'); ?></li>
						<li><?php echo anchor('views/modules/login.php','<span class="glyphicon glyphicon-log-in"></span>&nbsp;Login'); ?></li>

					</ul>
				</div>
			</div>
		</nav>
	<!-- End of Navigation & Logo -->
