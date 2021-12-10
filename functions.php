<?php 

function redstore_scripts_styles() { 
	//styles
	wp_enqueue_style( 'Poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap' );

	wp_enqueue_style( 'font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

    wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all' );

    //javascript
     wp_enqueue_script( 'custom', get_template_directory_uri() . '/app.js', 'jquery', 1, true ); 
 
}
add_action( 'wp_enqueue_scripts', 'redstore_scripts_styles' );

//add theme support
add_theme_support('menus');
add_theme_support('post-thumbnails');


//register some menus
register_nav_menus(
	array(
		'top-menu' => 'Top Menu',
	)
);

//Add image sizes
add_image_size('post_image', 1100, 550, false);

//Declaring WC support
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

// Widget Locations
function footerWidgetsInit(){
	register_sidebar( array(
    'name'          => 'Footer Area 3',
    'id'            => 'footer3',
    'description'   => 'Footer 3 Content Here',
    'class'         => '',
    'before_widget' => '<div class="footer-col-3">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>' 
  ));

	register_sidebar( array(
    'name'          => 'Footer Area 4',
    'id'            => 'footer4',
    'description'   => 'Footer 4 Content Here',
    'class'         => '',
    'before_widget' => '<div class="footer-col-4">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>' 
  ));
}

add_action('widgets_init', 'footerWidgetsInit');