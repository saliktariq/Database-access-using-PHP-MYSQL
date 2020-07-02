<?php
/*
 * This page is responsible for data access for songs from the database
 */
include('includes/sql_queries.php');
// Creating database connection PDO object
$connection = createConnection();
$sqlQuery = $sql['songs_list'];
// Querying database making use of queryDB() function written in functions.php
$dataArray = queryDB($connection, $sqlQuery);
$result = '';
if ($dataArray === false) {
    exit("Query failed"); // Exit with message in case query fails
}
// following foreach loop fills the songs page entries
foreach ($dataArray as $key => $value) {
    $result .= '<tr><td>' . htmlentities($value['title']) . '</td><td>' . htmlentities($value['name']) . '</td><td>' . htmlentities(songLengthToMinSec($value['duration'])) . '</td></tr>';
}
?>