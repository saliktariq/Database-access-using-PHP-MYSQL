<?php
/*
 * This page is responsible for data access for Active artists from the database
 */
include('includes/sql_queries.php');
 // Creating database connection PDO object
$connection = createConnection();
// Querying database making use of queryDB() function written in functions.php
$sqlQuery = $sql['active_artist_list'];
$dataArray = queryDB($connection, $sqlQuery);
if ($dataArray === false) {
    exit("Query failed"); // in case the query fails, exit with a message
}
$result = '';
// following foreach loop fills the active artist page entries
foreach ($dataArray as $key => $value) {
    $result .= '<tr><td>' . htmlentities($value['name']) . '</td><td>' . htmlentities($value['noOfSongs']) . '</td></tr>';
}
?>




