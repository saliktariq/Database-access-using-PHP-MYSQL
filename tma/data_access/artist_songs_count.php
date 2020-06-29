<?php
include('includes/sql_queries.php');
$sqlQuery1 = $sql['total_active_artists'];
$sqlQuery2 = $sql['total_songs'];
$sql = array(
    $sqlQuery1,
    $sqlQuery2
);
$connection = createConnection();
$result = 'Total active Artist: ';
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
                $result .= ' Total Songs: ' . $value['totalSongs'];
            }

        }
    }
}








