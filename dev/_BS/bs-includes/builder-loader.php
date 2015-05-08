<?php
/*
 * Chargement des classes MVC
 */

// We should define class and models to add components in the body
class bodyScratch {
  //var $page = 'index';

  function render($page = 'index') {
    require BODYS . "/" . $page .".php";
  }
}

function metaData($data = false) {
  global $metaData;
  print $metaData[$data];
}
function metaHead() {
  $metaHead = '
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="stylesheet" href="css/fromscratch.css">
  ';
  print $metaHead;
}
function metaFoot() {
  return false;
}
?>
