<?php
if ( !isset($bs_builder) ) {

	$bs_builder = true;

	require_once( dirname(__FILE__) . '/bs-load.php' );

	bs();

	require_once( BSINC . '/builder-loader.php' );

	/* Maintenant on affiche le site */
	require_once( BSINC . '/builder-render.php' );

	/* Et là, on le construit dans sa version Html statique */
	require_once( BSINC . '/builder-z.php' );
}
?>
