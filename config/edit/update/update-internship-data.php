<?php
require '../../db/dbConnection.php';

$internshipID = $_POST['internshipID'];
$student = $_POST['student'];
$company = $_POST['company'];
$department = $_POST['department'];


$sql =  " UPDATE  internship SET student =  '$student', company='$company', department='$department'  WHERE internshipID ='$internshipID'";

//echo ($sql);
if ($conn->query($sql) == TRUE) {
    header('Location:../../../sections/internships/display-Internships.php');
    exit();
} else {
    echo "\nError:" . $sql . "<br>" . $conn->error;
}
