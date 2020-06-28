<?php
$content = file_get_contents('templates/header.html');
$content = str_replace('{{TITLE}}',$lang['page_title'],$content);
$templateData = array(
    "{{HEADING}}"=>$lang['main_heading'],
    "{{CONTENT}}"=>$lang['home_description']
);
$content .= file_get_contents('templates/page.html');
$content =  parseTemplate($content,$templateData);
echo $content;
?>

