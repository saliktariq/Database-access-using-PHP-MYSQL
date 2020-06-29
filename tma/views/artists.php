<?php
include_once('includes/page_top.php');
require_once 'data_access/fill_artist_page.php';
$content = renderStaticPage($lang['artist_heading'], $lang['artist_description'], $content);
$tableHeader = array(
    "{{ARTIST_NAME}}" => $lang['artist_name'],
    "{{NO_OF_SONGS}}" => $lang['no_of_songs']
);
$content .= file_get_contents('templates/artistTable.html');
$content = parseTemplate($content, $tableHeader);
$content = str_replace('{{TABLE_BODY}}', $result, $content);
echo $content;
include_once('templates/footer.html');
?>