<?php
include_once('includes/page_top.php');
$content = renderStaticPage($lang['main_heading'], $lang['home_description'], $content);
echo $content;
include_once('templates/footer.html');

