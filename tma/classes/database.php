<?php
require('../includes/config.inc.php');
require('MyPDO.php');
class Database{

    protected $connection = null;

public function __construct(){
    try {
        $db_host = $config['db_host'];
        $db_name = $config['db_name'];
        $db_user = $config['db_user'];
        $db_pass = $config['db_pass'];
        $charset = $config['charset'];
        $db_port = $config['port'];
        $pdo_options = $config['pdo_options'];
        $dsn = 'mysql:host=' . $db_host . ';dbname=' . $db_name. ';port='.$db_port;

        $this->connection = new MyPDO($dsn, $db_user, $db_pass,$pdo_options);
        $this->connection->exec("SET CHARACTER SET $charset"); //https://coursesweb.net/php-mysql/pdo-select-query-fetch

        //learnt this at: https://www.digitalocean.com/community/tutorials/how-to-use-the-pdo-php-extension-to-perform-mysql-transactions-in-php-on-ubuntu-18-04
    }
    catch(PDOException $e){
        $this->connection = null;

        die($e->getMessage());
        //learnt this at: https://stackoverflow.com/questions/5175357/extending-pdo-class
    }

}

public function getData($sql){
    try{
        $result = $this->connection->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }

}

}
?>