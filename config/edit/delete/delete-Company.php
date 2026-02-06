<?php
include '../../db/dbConnection.php';

$update = $_GET['id'];
$sql = "DELETE FROM company WHERE comp_ID = '$update'";
$exe = mysqli_query($conn, $sql);

if ($exe == TRUE) {
    header('Location:../../../sections/company/display-company-Data.php');
}
