<?php
function songLengthToMinSec($time){
    $result = date('i:s',$time);
    return $result;
}
function myAutoloader($class) {
    require('classes/' . $class . '.php');
}
?>