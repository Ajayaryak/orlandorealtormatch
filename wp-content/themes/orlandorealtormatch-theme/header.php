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
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
	<?php wp_head(); ?>
    <link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/animate.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/fonts/stylesheet.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>

	<div class="footsocial">
		<?php 
		 if ( is_active_sidebar( 'sidebar-9' ) ) :
			dynamic_sidebar( 'sidebar-9' );
			endif; 
		?>	
	</div>

<div class="header_box"><!--header start-->
   <div class="header" data-spy="affix" data-offset-top="10">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-4 col-md-8"><div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a></div></div>
		    <div class="col-lg-4 col-sm-8 col-md-4 col-lg-push-2">
            <?php if ( is_active_sidebar( 'sidebar-8' ) ) :
				dynamic_sidebar( 'sidebar-8' );
				endif; 
			?>
			</div>
		</div></div>
    </div> </div>
