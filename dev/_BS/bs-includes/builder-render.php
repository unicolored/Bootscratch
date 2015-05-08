<?php
/*
 * The functions that manage and render the development site
 */

// We should load an application layout first
// Header, body, Footer
renderLayout("header");
bodyScratch::render();
renderLayout("footer");
?>
