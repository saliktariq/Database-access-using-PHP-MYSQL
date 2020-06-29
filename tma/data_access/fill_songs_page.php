<?php
include('includes/sql_queries.php');
$connection = createConnection();
$sqlQuery = $sql['songs_list'];
$dataArray = queryDB($connection, $sqlQuery);
$result = '';
if ($dataArray === false) {
    exit("Query failed"); //Remember to confirm (exit without message) with tutor before submitting
}


foreach ($dataArray as $key => $value) {
    $result .= '<tr><td>' . htmlentities($value['title']) . '</td><td>' . htmlentities($value['name']) . '</td><td>' . htmlentities(songLengthToMinSec($value['duration'])) . '</td></tr>';
}



