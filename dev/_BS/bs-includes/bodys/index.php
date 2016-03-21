<?php
print Container::_wOpen();
//$btn = makeButton($label,$size); //
//drawJumbotron('Hi',$btn);
Jumbotron::draw('Jumbotron'.Label::make('Label'),'A lightweight, flexible component that can optionally extend the entire viewport to showcase key content on your site.');
Label::draw('Label');
Label::draw('Primary','primary');

print Container::_wClose();
?>
