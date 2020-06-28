<?php
include_once('includes/page_top.php');
$templateData = array(
    "{{HEADING}}"=>$lang['main_heading'],
    "{{CONTENT}}"=>$lang['home_description']
);
$content .= file_get_contents('templates/page.html');
$content =  parseTemplate($content,$templateData);


echo $content;
?>

