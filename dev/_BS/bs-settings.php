<?php
/**
 * Used to set up and fix common variables and include
 * the Bootscratch class library.
 *
 */

/**
 * Stores the location of the WordPress directory of functions, classes, and core content.
 *
 * @since 1.0.0
 */
define( 'BSINC', ABSPATH . 'bs-includes' );
define( 'LAYOUTS', BSINC . '/layouts' );
define( 'BODYS', BSINC . '/bodys' );

date_default_timezone_set( 'UTC' );

// Load most of Bootscratch.
require( BSINC . '/bs-magic.php' );
require( BSINC . '/bs-errormng.php' );

require( BSINC . '/bs-bootstrap.php' );
require( BSINC . '/_bootstrap/container.php' );
require( BSINC . '/_bootstrap/jumbotron.php' );
require( BSINC . '/_bootstrap/label.php' );
