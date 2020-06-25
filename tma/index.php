<?php
require_once('includes/functions.php');
require_once('includes/sql_queries.php');
spl_autoload_register('MyAutoloader');

$connection = createConnection();
echo $sql['active_artist_list'];
?>
