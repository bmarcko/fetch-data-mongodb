<?php

include ("../init.php");

$template = $mustache->loadTemplate('edit.mustache');
echo $template->render(compact('result'));