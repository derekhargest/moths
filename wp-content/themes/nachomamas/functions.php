<?php

	function tcf_scripts() {
		wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	}

	add_action( 'wp_enqueue_scripts', 'tcf_scripts' );

	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/theme.js', array ( 'jquery' ), 1.12, true);

	function register_my_menu() {
		register_nav_menu('header-menu',__( 'Main Navigation' ));
		register_nav_menu('header-menu-home',__( 'Home Page Navigation' ));
		register_nav_menu('mobile-menu',__( 'Mobile Navigation' ));
	}

	add_action( 'init', 'register_my_menu' );


	function tcf_widgets_init() {

		register_sidebar( array(
			'name' => 'Woocommerce Dropdown Cart',
			'id' => 'wc_dropdown_cart',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '',
			'after_title' => '',
		) );
	}

	add_action( 'widgets_init', 'tcf_widgets_init' );

	// function tcf_widgets_init() {

		 // register_sidebar( array(
		  //	'name'          => 'Private Dining Gallery',
		  //	'id'            => 'gallery_private_dining',
		 // 	'before_widget' => '<div class="page-gallery">',
		  //	'after_widget'  => '</div>',
		  //	'before_title'  => '<h2>',
		  //	'after_title'   => '</h2>',
	  //	) );

		 // register_sidebar( array(
		 // 'name'          => 'Photos Gallery',
		 // 'id'            => 'gallery_photos',
		 // 'before_widget' => '<div class="page-gallery">',
		 // 'after_widget'  => '</div>',
		 // 'before_title'  => '<h2>',
		 // 'after_title'   => '</h2>',
	 // ) );



 	// }

	// add_action( 'widgets_init', 'tcf_widgets_init' );

	add_theme_support( 'post-thumbnails' );

	wp_deregister_script('jquery');

	wp_register_script('jquery', '', '', '', true);

	add_filter( 'loop_shop_columns', 'wc_loop_shop_columns', 3, 10 );

/*
 * Return a new number of maximum columns for shop archives
 * @param int Original value
 * @return int New number of columns
 */
function wc_loop_shop_columns( $number_columns ) {
 return 3;
}

remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );

add_filter( 'woocommerce_product_add_to_cart_text' , 'custom_woocommerce_product_add_to_cart_text' );
function custom_woocommerce_product_add_to_cart_text() {
    global $product;
    $product_type = $product->product_type;
    switch ( $product_type ) {
case 'variable':
            return __( 'See More', 'woocommerce' );
        break;
}
}

function wc_remove_related_products( $args ) {
	return array();
}
add_filter('woocommerce_related_products_args','wc_remove_related_products', 10);

add_action( 'init', 'jk_remove_wc_breadcrumbs' );
function jk_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );      	// Remove the description tab
    unset( $tabs['reviews'] ); 			// Remove the reviews tab
    unset( $tabs['additional_information'] );  	// Remove the additional information tab

    return $tabs;

}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 24;' ), 20 );

?>
