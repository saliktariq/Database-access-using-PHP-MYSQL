<?php
include_once('includes/page_top.php');
require_once 'data_access/fill_songs_page.php';
$content = renderStaticPage($lang['song_heading'], $lang['song_description'], $content);
$tableHeader = array(
    "{{SONG_TITLE}" => $lang['song_title'],
    "{{ARTIST_NAME}}" => $lang['artist_name'],
    "{{SONG_DURATION}}" => $lang['song_duration']
);
$content .= file_get_contents('templates/songsTable.html');
$content = parseTemplate($content, $tableHeader);
$content = str_replace('{{TABLE_BODY}}', $result, $content);
echo $content;
include_once('templates/footer.html');