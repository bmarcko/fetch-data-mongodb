<?php
include "vendor/autoload.php";
$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->local->students;
$result = $collection->find();
/* foreach ($result as $student) {
    var_dump($student);
} */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Data from MongoDB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid p-3 mb-2">
    <h1 class="display-5">Student Records</h1>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>						
                    <th>Birthdate</th>
                    <th>Address</th>
                    <th>Program</th>
                    <th>Contact Number</th>
                    <th>Emergency Contact</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            foreach ($result as $detail){
                ?>
                <tr class="table-active">
                    <td><?php echo $detail['studentId']?></td>
                    <td><?php echo $detail['firstName']?></td>
                    <td><?php echo $detail['lastName']?></td>
                    <td><?php echo $detail['birthdate']?></td>
                    <td><?php echo $detail['address']?></td>
                    <td><?php echo $detail['program']?></td>
                    <td><?php echo $detail['contactNumber']?></td>
                    <td><?php echo $detail['emergencyContact']?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>