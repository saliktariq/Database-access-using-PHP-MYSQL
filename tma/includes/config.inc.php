<?php

$config['db_host'] = 'mysqlsrv.dcs.bbk.ac.uk';
$config['db_name'] = 'mtariq01db';
$config['db_user'] = 'mtariq01';
$config['db_pass'] = 'bbkmysql';
$config['charset'] = 'utf8';
$config['port'] = "3306";
$config['dsn'] = 'mysql:host=' . $config['db_host'] . ';dbname=' . $config['db_name']. ';port='.$config['port'];
$config['pdo_options'] = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
]; // learnt this at https://phpdelusions.net/pdo_examples/connect_to_mysql





