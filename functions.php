<?php

function register_menus() { //add your menu
    register_nav_menus(
	array(
        'header-menu' => __('Header Menu')
		)
	);
}

function wpdocs_custom_excerpt_length( $length ) { //custom excerpt
    return 20;
}

function wpdocs_excerpt_more( $more ) {
    return '...';
}


//actions
add_action( 'init', 'register_menus' );


//filters
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


?>
<?php
