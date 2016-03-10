<?php
print_r($_POST);

 foreach ($_POST as $key => $value) {
 // assign to temporary variable and strip whitespace if not an array
 $temp = is_array($value) ? $value : trim($value);
 // if empty and required, add to $missing array
 if (empty($temp)) {

 ${$key} = '';
 } 
 
 // otherwise, assign to a variable of the same name as $key
 ${$key} = $temp;
 
 }