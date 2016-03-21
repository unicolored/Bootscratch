<?php
/*
 * LABEL
 *
 */
class Label extends Components {
  static $class = 'label';
  static $wrapper = 'span';
  static $wrapper_class = 'default';

  // Make the component as classic markup like in Bootstrap docs
  function make($label,$wrapper_class=false) {
    $result  .= $label ? $label : false;
    $wrapper_class = $wrapper_class != false ? $wrapper_class : self::$wrapper_class;
    return self::wrapComponent($result,self::$class.'-'.$wrapper_class);
  }
  // Render the Components
  function draw($label=false,$wrapper_class=false) {
    print self::make($label,$wrapper_class);
  }
}
?>
