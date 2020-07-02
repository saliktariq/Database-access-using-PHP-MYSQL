<?php
include_once('includes/page_top.php');
require_once 'data_access/fill_artist_page.php';
// rendering the heading and description of the page using renderStaticPage function from functions.php
$content = renderStaticPage($lang['artist_heading'], $lang['artist_description'], $content);

// creating array of key value pairs to feed to parseTemplate function.
$tableHeader = array(
    "{{ARTIST_NAME}}" => $lang['artist_name'],
    "{{NO_OF_SONGS}}" => $lang['no_of_songs']
);
// loading contents of artistTable in $content variable
$content .= file_get_contents('templates/artistTable.html');
// parsing the template
$content = parseTemplate($content, $tableHeader);
// replacing the parsed template content in the body of the artist page
$content = str_replace('{{TABLE_BODY}}', $result, $content);
echo $content;
include_once('templates/footer.html');
?>