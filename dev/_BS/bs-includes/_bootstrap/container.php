<?php
/*
 * CONTAINER
 *
 */
class Container extends Components {
  static $class = 'container';
  static $wrapper = 'div';

  // Make the component as classic markup like in Bootstrap docs
  function make($label,$description) {
    $result  .= $label ? "\t".'<'.self::$labelWrapper.'>'.$label.'</'.self::$labelWrapper.'>'."\n" : false;
    $result  .= $description ? "\t".'<'.self::$descriptionWrapper.'>'.$description.'</'.self::$descriptionWrapper.'>' : false;

    return self::_wOpen()."\n".self::_wClose();
  }
  // Render the Components
  function draw($label=false,$description=false) {
    print self::make($label,$description);;
  }
}
?>
