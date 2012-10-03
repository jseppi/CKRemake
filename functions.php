<?php
/**
 * Tell WordPress to run ck_setup() when the 'after_setup_theme' hook is run.
 */
add_action( 'after_setup_theme', 'ck_setup' );

if ( ! function_exists( 'ck_setup' ) ):

function ck_setup() {
	register_nav_menus( 
		array(
			'primary' => 'Primary Menu'
		)

	);


	register_sidebar(
		array(
			'name' => 'Primary Sidebar',
			'id' => 'primary_sidebar',
			'before_widget' => '<div class="row widget-row"><div class="span3">',
			'after_widget' => '</div></div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		)

	);

}

endif;
?>