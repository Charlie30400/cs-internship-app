<?php
include '../../db/dbConnection.php';
$comp_ID = $_POST['comp_ID'];
$comp_Name = $_POST['comp_Name'];
$comp_Type = $_POST['comp_Type'];
$comp_Status = $_POST['comp_Status'];
$comp_Boss = $_POST['comp_Boss'];
$comp_Descrip = $_POST['comp_Descrip'];
$comp_Phone = $_POST['comp_Phone'];
$comp_Email = $_POST['comp_Email'];
$comp_Address = $_POST['comp_Address'];
$comp_Review = $_POST['comp_Review'];
$comp_WP = $_POST['comp_WP'];



$sql =  "UPDATE  company SET comp_Name =  '$comp_Name', comp_Type= '$comp_Type',
comp_Status=  '$comp_Status', comp_Boss='$comp_Boss',comp_Descrip = '$comp_Descrip',  comp_Phone= '$comp_Phone',
comp_Email='$comp_Email',comp_Address='$comp_Address',comp_Review = '$comp_Review', comp_WP ='$comp_WP' WHERE comp_ID ='$comp_ID'";

//echo ($sql);
if ($conn->query($sql) == TRUE) {
    header('Location:../../../sections/company/display-Company-Data.php');
    exit();
} else {
    echo "\nError:" . $sql . "<br>" . $conn->error;
}
