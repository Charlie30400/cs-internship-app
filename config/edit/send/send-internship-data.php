<?php
require '../../db/dbConnection.php';


//student Data
$student  = $_POST['student'];
$company = $_POST['company'];
$department = $_POST['department'];

$sql = "INSERT INTO internship(student,company,department )
 VALUES('$student','$company','$department')";


//echo ($sql);
if ($conn->query($sql) == TRUE) {
    echo "\nNew record created successfully";
    header("location:../../../sections/internships/display-Internships.php");
    exit();
} else {
    echo "\nError:" . $sql . "<br>" . $conn->error;
}
