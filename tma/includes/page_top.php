<?php
/*
 * This file updates the page header along with total songs and active artist information.
 */
require_once('data_access/artist_songs_count.php');
$content = file_get_contents('templates/header.html');
// Replacing the html {{LABELS}} from templates with actual data.
$content = str_replace('{{TITLE}}', $lang['page_title'], $content);
$content = str_replace('{{COUNT}}', $result, $content);
?>