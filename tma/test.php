<?php
require('includes/sql_queries.php');
require_once ('includes/functions.php');


$sqlQuery1 = $sql['total_active_artists'];
$sqlQuery2 = $sql['total_songs'];

$connection = createConnection();
$dataArray = queryDB($connection,$sqlQuery2);

foreach($dataArray as $key=>$value){
    echo $value['totalSongs'];
}