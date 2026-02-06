<?php


// $comp_data = array(
//     'comp_Name' =>  $_POST['comp_Name'],
//     'dep_Name' =>  $_POST['dep_Name'],
//     'comp_Status' =>  $_POST['comp_Status'],
//     'comp_Boss' =>  $_POST['comp_Boss'],
//     'comp_BT' =>  $_POST['comp_BT'],
//     'comp_Email' =>  $_POST['comp_Email'],
//     'comp_Address' =>  $_POST['comp_Adress'],
//     'comp_Review' =>  $_POST['comp_Review'],
//     'comp_WP' =>  $_POST['comp_WP'],

// );

require '../../db/dbConnection.php';




//Company Data
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



$comp_sql = "INSERT INTO company(comp_Name,comp_Type,comp_Status,comp_Boss,comp_Descrip,comp_Phone,comp_Email,comp_Address,comp_Review,comp_WP)
 VALUES('$comp_Name','$comp_Type','$comp_Status','$comp_Boss','$comp_Descrip','$comp_Phone','$comp_Email','$comp_Address','$comp_Review','$comp_WP')";

//echo $comp_sql;




if ($conn->query($comp_sql) == TRUE) {
    //echo "\nNew record created successfully";
    header("location:../../../sections/company/display-Company-Data.php");
    exit();
} else {
    echo "\nError:" . $sql . "<br>" . $conn->error;
}
