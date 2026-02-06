<?php
require '../../db/dbConnection.php';

//Department Data

$dep_Name = $_POST['dep_Name'];
$dep_Type = $_POST['dep_Type'];
$dep_Status = $_POST['dep_Status'];
$dep_Boss = $_POST['dep_Boss'];
$dep_Phone = $_POST['dep_Phone'];
$dep_Email = $_POST['dep_Email'];
$dep_Descrip = $_POST['dep_Descrip'];
$dep_Review = $_POST['dep_Review'];

$dep_sql = "INSERT INTO department(dep_Name,dep_Type,dep_Status,dep_Boss,dep_Phone,dep_Email,dep_Descrip,dep_Review)
        VALUES('$dep_Name','$dep_Type','$dep_Status','$dep_Boss','$dep_Phone','$dep_Email','$dep_Descrip','$dep_Review')";
//echo $dep_Descrip;


if ($conn->query($dep_sql) == TRUE) {
    echo "\nNew record created successfully";
    header("location:../../../sections/department/display-Department-Data.php");
    exit();
} else {
    echo "\nError:" . $sql . "<br>" . $conn->error;
}
