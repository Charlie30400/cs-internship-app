<?php
include '../../db/dbConnection.php';

$update = $_GET['id'];
$sql = "DELETE FROM department WHERE dep_ID= '$update'";
$exe = mysqli_query($conn, $sql);

if ($exe == TRUE) {
    header('Location:../../../sections/department/display-Department-Data.php');
}
