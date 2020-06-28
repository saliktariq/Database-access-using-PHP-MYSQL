<?php
require('../includes/functions.php');
require('../includes/sql_queries.php');
$connection = createConnection();
$sqlQuery = $sql['active_artist_list'];
$dataArray = queryDB($connection,$sqlQuery);

if($dataArray === false){
    exit("Query failed"); //Remember to confirm (exit without message) with tutor before submitting
}
$artistData = '';
$songData = '';

print_r($dataArray);


