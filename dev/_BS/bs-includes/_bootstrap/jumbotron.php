<?php
/*
 * JUMBOTRON
 *
 */
class Jumbotron extends Components {
  static $class = 'jumbotron';
  static $wrapper = 'div';
  static $labelWrapper = 'h1';
  static $descriptionWrapper = 'p';

  // Make the component as classic markup like in Bootstrap docs
  function make($label,$description) {
    $result  .= $label ? "\t".'<'.self::$labelWrapper.'>'.$label.'</'.self::$labelWrapper.'>'."\n" : false;
    $result  .= $description ? "\t".'<'.self::$descriptionWrapper.'>'.$description.'</'.self::$descriptionWrapper.'>' : false;

    return self::_wOpen().$result.self::_wClose(); // remplacer par une méthode de Components
  }
  // Render the Components
  function draw($label=false,$description=false) {
    print self::make($label,$description); // remplacer par une méthode de Components
  }
}
?>
