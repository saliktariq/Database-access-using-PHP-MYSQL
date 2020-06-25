<?php
class MyPDO extends PDO {
    public function __construct($dsn, $username, $passwd, $options)
    {
        parent::__construct($dsn, $username, $passwd, $options);
    }
}