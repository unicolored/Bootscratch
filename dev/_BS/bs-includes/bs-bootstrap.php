<?php
/*
 * Fonctions qui créent les éléments markups de Twitter Bootstrap
 *
 * > make : permet de construire un composant sans l'afficher
 * > draw : affiche un composant
 */

function mkJumbotron($title = false) {

}
class Components {
  static $labelDemo = 'Hello World!';
  static $descriptionDemo = 'Lorem ipsum sicut amet etceatera lorem ipsus quota dixus.';

  // METHODS BELOW SHOULD BE IN AN EXTENDED CLASS
  // Add demo content
  function demo() {

  }

  function _wOpen() {
    $childClass = get_called_class();
    return "\n".'<'.$childClass::$wrapper.' class="'.$childClass::$class.'">'."\n";
  }
  function _wClose() {
    $childClass = get_called_class();
    return "\n".'</'.$childClass::$wrapper.'>'."\n\n";
  }
}
?>
