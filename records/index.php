<?php
include ("../init.php");

$template = $mustache->loadTemplate('index.mustache');
echo $template->render(compact('result'));