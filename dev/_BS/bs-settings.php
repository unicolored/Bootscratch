<?php
/**
 * Used to set up and fix common variables and include
 * the WordPress procedural and class library.
 *
 * Allows for some configuration in wp-config.php (see default-constants.php)
 *
 * @internal This file must be parsable by PHP4.
 *
 * @package WordPress
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
