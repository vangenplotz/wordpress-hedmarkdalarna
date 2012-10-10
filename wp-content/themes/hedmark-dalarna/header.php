<!doctype html>  

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
	
	<head>
		<meta charset="utf-8">
		
		<title><?php wp_title(''); ?></title>
		
		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
				
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->
		<script type='text/javascript' src='http://hedmark-dalarna.vangenplotz.no/wp-includes/js/jquery/jquery.js'></script> 
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
			
		<!-- drop Google Analytics Here -->
		<!-- end analytics -->
		
	</head>
	
	<body <?php body_class(); ?>>
	
		<div id="container">
		<div class="topbar">
			<div class="wrap">				
				<div class="last clearfix search">
					<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">						
						<input type="text" class="field" name="s" id="s" placeholder="Søk i nettstedet<?php //esc_attr_e( 'Search', 'twentyeleven' ); ?>" />
						<input type="submit" class="submit" name="submit" id="searchsubmit" value="" /><? //php esc_attr_e( 'Search', 'twentyeleven' ); ?>
					</form>
				</div>
				<?php bones_top_nav(); ?>
			</div>
		</div>
		
		<div id="wrap" class="wrap clearfix">

		<div id="header" class="threecol clearfix">

			<header class="header" role="banner">
				<div class="left-top">
				</div>
					
				<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
				<p id="logo"><a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" title="logo" alt="logo"/></a></p>				
				
				<!-- if you'd like to use the site description you can un-comment it below -->
				<?php // bloginfo('description'); ?>					
				
				<div class="left">					
					<nav role="navigation">
						<?php bones_main_nav(); ?>
					</nav>
				</div>
				<div class="sponsors">
					<img src="<?php echo get_template_directory_uri(); ?>/images/sponsors.jpg" />
				</div>
			</header> <!-- end header -->
		</div> <!-- end #header -->
	
