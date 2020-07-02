<?php
/*
 * This file updates the language setting in the config.inc.php file as per user choice.
 */
include('config.inc.php');
if (isset($_POST['chooseLanguage'])) { //checking if chooseLanguage drop down menu selection has been made
    $newValue = "'" . htmlentities($_POST['chooseLanguage']) . "'"; //cleansing the retrieved data and putting in single quotes
    $oldValue = "'" . $config['language'] . "'";
    $readConfig = file_get_contents('config.inc.php'); //accessing config file to read the value of language selection
    $file = fopen('config.inc.php', "r+") or die("Unable to open file, check permissions.");  // open config file in r+ (read and write) mode
    $readConfig = str_replace($oldValue, $newValue, $readConfig); // make appropriate changes to config['language'] variable
    fwrite($file, $readConfig); // write the changes
    fclose($file); // close the file
}
header("Location: ../index.php"); // redirect back to homepage
//exit();
?>