<?php
/*
 * Where all the errors get managed
 */

function bs_error($type,$msg) {
  switch ($type) {
    case "Missing file": $response = "You must have";
  }
  print '<strong>'.$type.'</strong>' . '<pre><em>'.$response.'</em> : '.$msg.' </pre>';
}
?>
