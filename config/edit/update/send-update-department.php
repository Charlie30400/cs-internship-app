<?php
require '../../db/dbConnection.php';


$dep_ID = $_POST['dep_ID'];
$dep_Name = $_POST['dep_Name'];
$dep_Type = $_POST['dep_Type'];
$dep_Status = $_POST['dep_Status'];
$dep_Boss = $_POST['dep_Boss'];
$dep_Phone = $_POST['dep_Phone'];
$dep_Email = $_POST['dep_Email'];
$dep_Descrip = $_POST['dep_Descrip'];
$dep_Review = $_POST['dep_Review'];



$sql =  " UPDATE  department SET dep_Name =  '$dep_Name', dep_Type='$dep_Type', dep_Status='$dep_Status', dep_Boss= '$dep_Boss',
    dep_Phone=  '$dep_Phone', dep_Email='$dep_Email',dep_Descrip = '$dep_Descrip',  dep_Review= '$dep_Review' WHERE dep_ID ='$dep_ID'";


if ($conn->query($sql) == TRUE) {
    echo "\nUpdate successfully";
    header('Location:../../../sections/department/display-Department-Data.php');
    exit();
} else {
    echo "\nError:" . $sql . "<br>" . $conn->error;
}
