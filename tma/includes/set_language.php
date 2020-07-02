<?php
/*
 * This file updates the language of the site
 */
session_abort(); // Destroying the old session to clear session variable
session_start(); // Creating new session to set the session language
$_SESSION['language'] = $_POST['chooseLanguage'];
    header("Location: ../index.php");

?>