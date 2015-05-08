<?php
/*
 * Where the magic happens
 * Fonctions de maintenance, d'encadrement de Bootsratch
 */

function bs() {
  return "Hi, i'm ".HAYT;
}

function renderLayout($thisOne) {
  $plzLoad = LAYOUTS.'/'.$thisOne.'.php';
  if ( file_exists( $plzLoad ) ) {
    require $plzLoad;
  }
  else {
    bs_error("Missing file",$plzLoad );
  }

}
?>
