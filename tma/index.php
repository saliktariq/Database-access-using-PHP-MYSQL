<?php
require_once('includes/functions.php');
require_once('includes/config.inc.php');
spl_autoload_register('MyAutoloader');


$connection = new MyPDO($config['dsn'],$config['db_user'],$config['db_pass'],$config['pdo_options']);



?>
