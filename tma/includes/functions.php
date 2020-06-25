<?php
function songLengthToMinSec($time){
    $result = date('i:s',$time);
    return $result;
}

?>