<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!--=== TITLE ===-->  
    <title><?php wp_title(); ?> - <?php bloginfo( 'name' ); ?></title>
     
    <!--=== WP_HEAD() ===-->
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
	<div class="header">
	    <div class="container">
	      <div class="navbar">
	        <div class="logo">
	        	<a href="<?php bloginfo('url'); ?>">
	        		<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" width="125px" />
	        	</a>	          
	        </div>
	        <nav>
	          <?php wp_nav_menu( array(
				    'theme_location' => 'top-menu',
				    'menu_id' => 'MenuItems',
				    'container' => 'ul',			    
				) );?>
	          
	        </nav>
	        	
			<a href="<?php echo wc_get_cart_url() ?>">
	        	<img src="<?php bloginfo('template_directory'); ?>/images/cart.png" width="30px" height="30px">
	        </a>
	        <img src="<?php bloginfo('template_directory'); ?>/images/menu.png" class="menu-icon" onclick="menutoggle()">
	      </div>	      
	    </div>
	</div>