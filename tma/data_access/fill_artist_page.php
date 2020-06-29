<?php
include('includes/sql_queries.php');
$connection = createConnection();
$sqlQuery = $sql['active_artist_list'];
$dataArray = queryDB($connection, $sqlQuery);
if ($dataArray === false) {
    exit("Query failed"); //Remember to confirm (exit without message) with tutor before submitting
}
$result = '';
foreach ($dataArray as $key => $value) {
    $result .= '<tr><td>' . htmlentities($value['name']) . '</td><td>' . htmlentities($value['noOfSongs']) . '</td></tr>';
}





