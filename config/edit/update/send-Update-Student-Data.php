<?php
require '../../db/dbConnection.php';

$stud_Record = $_POST['stud_Record'];
$stud_ID = $_POST['stud_ID'];
$stud_Name = $_POST['stud_Name'];
$stud_Gender = $_POST['stud_Gender'];
$stud_Dod = $_POST['stud_Dod'];
$stud_Phone = $_POST['stud_Phone'];
$stud_Term = $_POST['stud_Term'];
$stud_Email = $_POST['stud_Email'];
$stud_Address = $_POST['stud_Address'];
$stud_Major = $_POST['stud_Major'];


$sql =  " UPDATE  student SET stud_ID =  '$stud_ID', stud_Name='$stud_Name', stud_Gender='$stud_Gender', stud_Dod= '$stud_Dod',
    stud_Phone=  '$stud_Phone', stud_Term='$stud_Term',stud_Email = '$stud_Email',  stud_Address= '$stud_Address',
    stud_Major='$stud_Major' WHERE stud_Record ='$stud_Record'";

if ($conn->query($sql) == TRUE) {
    header('Location:../../../sections/student/Display-Students.php');
    exit();
} else {
    echo "\nError:" . $sql . "<br>" . $conn->error;
}
