<?php
include('config.inc.php');
if (isset($_POST['chooseLanguage'])) {
    $newValue = "'" . htmlentities($_POST['chooseLanguage']) . "'";
    $oldValue = "'" . $config['language'] . "'";
    $readConfig = file_get_contents('config.inc.php');
    $file = fopen('config.inc.php', "r+") or die("Unable to open file, check permissions.");
    $readConfig = str_replace($oldValue, $newValue, $readConfig);
    fwrite($file, $readConfig);
    fclose($file);
}
header("Location: ../index.php");
exit();