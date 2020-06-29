<?php
require_once('data_access/artist_songs_count.php');
$content = file_get_contents('templates/header.html');
$content = str_replace('{{TITLE}}', $lang['page_title'], $content);
$content = str_replace('{{COUNT}}', $result, $content);