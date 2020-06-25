<?php
require_once 'includes/config.inc.php';
class Database{

    protected $connection;

public function __construct(){
    try {
        $db_host = $config['db_host'];
        $db_name = $config['db_name'];
        $db_user = $config['db_user'];
        $db_pass = $config['db_pass'];
        $charset = $config['charset'];
        $dsn = 'mysql:host=' . $db_host . ';dbname=' . $db_name;

        $this->connection = new MyPDO($dsn, $db_user, $db_pass);
        $this->connection->exec("SET CHARACTER SET $charset"); //https://coursesweb.net/php-mysql/pdo-select-query-fetch
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        //learnt this at: https://www.digitalocean.com/community/tutorials/how-to-use-the-pdo-php-extension-to-perform-mysql-transactions-in-php-on-ubuntu-18-04
    }
    catch(PDOException $e){
        $this->connection = null;
        die($e->getMessage());
        //learnt this at: https://stackoverflow.com/questions/5175357/extending-pdo-class
    }

}

public function getSQLData(

}