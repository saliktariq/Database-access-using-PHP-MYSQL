<?php
include_once('includes/page_top.php');
$templateData = array(
    "{{HEADING}}"=>$lang['artist_heading'],
    "{{CONTENT}}"=>$lang['artist_description']
);
$content .= file_get_contents('templates/page.html');
$content =  parseTemplate($content,$templateData);
//generating table heading
$tableHeader = array(
    "{{ARTIST_NAME}}" => $lang['artist_name'],
    "{{NO_OF_SONGS}}" => $lang['no_of_songs']
);
$content .= file_get_contents('templates/table.html');
$content = parseTemplate($content,$tableHeader);

echo $content;
?>

