<?php
include_once('includes/page_top.php');
require_once 'data_access/fill_songs_page.php';
// rendering the heading and description of the page using renderStaticPage function from functions.php
$content = renderStaticPage($lang['song_heading'], $lang['song_description'], $content);
// creating array of key value pairs to feed to parseTemplate function.
$tableHeader = array(
    "{{SONG_TITLE}" => $lang['song_title'],
    "{{ARTIST_NAME}}" => $lang['artist_name'],
    "{{SONG_DURATION}}" => $lang['song_duration']
);
// loading contents of songsTable in $content variable
$content .= file_get_contents('templates/songsTable.html');
// parsing the template
$content = parseTemplate($content, $tableHeader);
// replacing the parsed template content in the body of the artist page
$content = str_replace('{{TABLE_BODY}}', $result, $content);
echo $content;
include_once('templates/footer.html');
?>