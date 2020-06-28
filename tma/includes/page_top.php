<?php
$content = file_get_contents('templates/header.html');
$content = str_replace('{{TITLE}}',$lang['page_title'],$content);