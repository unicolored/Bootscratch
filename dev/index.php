<?php
// Tells Bootscratch to build pages when refreshing this index.
define('BS_AUTO_BUILD', false);

global $myWebsite;

$metaData = array(
  'title' => 'Bootscratch',
  'description' => 'Make static site with PHP and ready Components',
  'lang' => 'en',
  '_prodCss' => 'css/style.min.css',
  '_prodJs' => 'js/script.min.js',
  '_prodImgFolder' => 'img',
);

/** Loads the Bootscratch Environment */
require( dirname( __FILE__ ) . '/_BS/bs-builder.php' );
?>
