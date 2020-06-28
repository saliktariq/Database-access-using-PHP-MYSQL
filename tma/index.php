<?php
require_once('includes/functions.php');
require_once('includes/sql_queries.php');
require_once('includes/config.inc.php');
require_once('lang/'.$config['language'].'.php');
spl_autoload_register('MyAutoloader');

if(!isset($_GET['page'])){
    $id = 'home';
} else {
    $id = $_GET['page'];
}

switch($id){
    case 'home':
        include 'views/home.php';
        break;

    case 'artists':
        include 'views/artists.php';
        break;

    case 'songs':
        include 'views/songs.php';
        break;

    default:
        include'views/404.php';
}

?>
