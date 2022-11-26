<?php
include "vendor/autoload.php";

use Models\Student;
use MongoDB\BSON\ObjectID;
$client = new MongoDB\Client('mongodb://localhost:27017');
$connection = $client->local->students;
/* foreach ($result as $student) {
    var_dump($student);
} */

$mustache = new Mustache_Engine([
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/templates')
]);

$details = $_GET['details'] ?? null;


if ($details==1){
	$details  = "Added Student Record!";
}
if ($details==2){
	$details  = "Updated Student Record!";
}

if ($details==3){
	$details  = "Deleted Student Record!";
}