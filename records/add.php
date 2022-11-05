<?php

include ("../init.php");

$template = $mustache->loadTemplate('add.mustache');
echo $template->render();

try {
    $insertOneResult = $collection->insertOne([
        'studentId' => 'test',
        'firstName' => 'test',
        'lastName' => 'test',
        'birthdate' => 'test',
        'address' => 'test',
        'program' => 'test',
        'contactNumber' => 'test',
        'emergencyContact' => 'test'
     ]);
}

catch (Exception $e) {
    error_log($e->getMessage());
}