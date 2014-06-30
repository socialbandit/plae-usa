<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
<!--    <link href="<?php //echo get_template_directory_uri(); ?>/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css">-->
    
    <!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.1.11.0.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    
    <script language="javascript">
	$(window).ready(function() {
		var wind_height= $(window).height();
		var header_top =$("#nav_top").height();
		
		if(wind_height < 750){
			$(".banner").css("height", wind_height);
		}else{
			$(".banner, .contact_bg").css("max-height", wind_height - header_top);
		}
		$(".contact_bg").css("height", wind_height + 100);
		
	});
	</script>
	
	
</head>

<body class="bg_body">
<!-- Navigation Start -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid" id="nav_top">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
     <a href="#" class="logo hidden-sm hidden-md hidden-lg col-xs-7"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" /></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<?php wp_nav_menu( array( 'menu' => 'Main-Nav-Left', 'container' => '', 'menu_class' => 'nav navbar-nav navbar-inverse col-sm-5', 'walker' => new wp_bootstrap_navwalker() ) ); ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo col-sm-2 hidden-xs"><img src="<?php header_image(); ?>" alt=""></a>
		<?php wp_nav_menu( array( 'menu' => 'Main-Nav-Right', 'container' => '', 'menu_class' => 'nav navbar-nav navbar-inverse col-sm-5' ) ); ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- Navigation End -->