<?php

//* start the engine
include_once( get_template_directory() . '/lib/init.php');


//* Child theme ( do not remove )

define( 'CHILD_THEME_NAME', 'Human Genesis' );
define( 'CHILD_THEME_URL', 'http://milkshakeinteractive.com' );
define( 'CHILD_THEME_VERSION', '1.0.0' );



//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list') );


//* Add viewport meta tags for mobile
add_theme_support( 'genesis-responsive-viewport' );


//* Add support for 3-column footer
add_theme_support( 'genesis-footer-wigets', 3 );


 ?>
