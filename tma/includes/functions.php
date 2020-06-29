<?php

//source: Mr Ian Hollender HOE:7/8
function parseTemplate($template, $templateData) {

    foreach($templateData as $key => $value) {
        $template = str_replace($key, $value, $template);
    }
    return $template;
}




function songLengthToMinSec($time){
    $result = date('i:s',$time);
    return $result;
}
function myAutoloader($class) {
    require('classes/' . $class . '.php');
}

function createConnection(){
    include('config.inc.php');
    include('classes/MyPDO.php');
    try{
        $connection = new MyPDO($config['dsn'],$config['db_user'],$config['db_pass'],$config['pdo_options']);
    }
    catch(PDOException $e){
          $connection = null;

            die($e->getMessage());
    }
    return $connection;
}

function queryDB($link,$sql){
    $dataQ = $link->prepare($sql);
    $dataQ->execute();
    $result = array();    //source: https://stackoverflow.com/questions/26151048/loop-through-the-data-in-pdo
     while($row = $dataQ->fetch(PDO::FETCH_ASSOC)){
         $result[] = $row;
     }

    return $result;
}
?>