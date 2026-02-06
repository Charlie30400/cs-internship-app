<?php
include '../../db/dbConnection.php';

$update = $_GET['id'];
$sql = "DELETE FROM student WHERE stud_Record= '$update'";
$exe = mysqli_query($conn, $sql);

if ($exe == TRUE) {
    header('Location:../../../sections/student/display-Students.php');
}
