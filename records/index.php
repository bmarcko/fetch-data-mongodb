<?php
include ("../init.php");
use Models\Student;


$student= new Student("","","", "", "", "", "", "");
$student->setConnection($connection);
$result = $student->getAllStudents();

$template = $mustache->loadTemplate('index.mustache');
echo $template->render(compact('result', 'details'));

?>