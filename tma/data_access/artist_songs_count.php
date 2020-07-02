<?php
/*
 * This file queries the database to fetch total number of ACTIVE artists and total songs in the database
 */
include('includes/sql_queries.php');
// $sqlQuery1 contains the query to retrieve total number of active artists. The actual SQL is located in sql_queries.php file
$sqlQuery1 = $sql['total_active_artists'];
// $sqlQuery2 contains the query to retrieve total number of songs. The actual SQL is located in sql_queries.php file
$sqlQuery2 = $sql['total_songs'];
// @variable $sql contains array for SQL queries
$sql = array(
    $sqlQuery1,
    $sqlQuery2
);
// Creating database connection PDO object
$connection = createConnection();
$result = $lang['total_active_artists'];
// Following for loop will query the database twice once for each sql query.
for ($query = 0; $query < 2; $query++) {
    $dataArray = queryDB($connection, $sql[$query]);
    if ($dataArray === false) {
        exit("Query failed");
    } else {
        if ($sql[0]) {
            foreach ($dataArray as $key => $value) {
                if (isset($value['noOfArtists'])) {
                    $result .= $value['noOfArtists'];
                }

            }

        }
        foreach ($dataArray as $key => $value) {
            if (isset($value['totalSongs'])) {
                $result .= $lang['total_songs'] . $value['totalSongs'];
            }

        }
    }
}
?>




