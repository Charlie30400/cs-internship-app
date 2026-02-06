<?php
include '../../db/dbConnection.php';

$update = $_GET['id'];
$sql = "DELETE FROM internship WHERE internshipID = '$update'";
$exe = mysqli_query($conn, $sql);

if ($exe == TRUE) {
    header('Location:../../../sections/internships/Display-Internships.php');
}
