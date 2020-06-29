<?php
include_once('includes/page_top.php');
$content = renderStaticPage($lang['error_heading'], $lang['error_description'], $content);
echo $content;
include_once('templates/footer.html');