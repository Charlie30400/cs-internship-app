<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../style/form.css">
    <title>Student Registration</title>

    <style>
        .icon {
            margin-left: 35%;
            margin-bottom: 35px;
        }
    </style>
</head>
<?php
require "../../config/db/dbConnection.php";

$update = $_GET['id'];


if (isset($update)) {

    $sql = "SELECT * FROM student WHERE stud_Record = '$update'";
    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($result);
    if ($queryResult > 0) {
        while ($row = $result->fetch_assoc()) {
            $stud_Record = $row['stud_Record'];
            $stud_ID = $row['stud_ID'];
            $stud_Name = $row['stud_Name'];
            $stud_Gender = $row['stud_Gender'];
            $stud_Dod = $row['stud_Dod'];
            $stud_Phone = $row['stud_Phone'];
            $stud_Term = $row['stud_Term'];
            $stud_Email = $row['stud_Email'];
            $stud_Address = $row['stud_Address'];
            $stud_Major = $row['stud_Major'];
            //For testing 
            //echo $result;
            //echo "( $queryResult)";
        }
    }
}
?>

<?php
require '../../style/template/Header.html';

?>

<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <div>
                            <h2 class="frm-Title">Update Student Data</h2>
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50%" height="50%" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form autocomplete="off" action="../../config/edit/Update/send-update-student-data.php" method="POST">
                            <input type='hidden' id='stud_Record' name='stud_Record' value='<?php echo $stud_Record; ?>'>
                            <input type="text" name="stud_ID" placeholder="Enter Student ID" class="form-control md-2" value='<?php echo $stud_ID; ?>'>
                            <input type="text" name="stud_Name" placeholder="Enter Student Name" class="form-control md-2" value='<?php echo $stud_Name; ?>'>
                            <select id="stud_Gender" name="stud_Gender" class="form-control md-2">
                                <option value='Male' <?php if ($stud_Gender == "M") echo "SELECTED"; ?>>Male</option>
                                <option value='Female' <?php if ($stud_Gender == "F") echo "SELECTED"; ?>>Female</option>
                                <option value='Trans-Female' <?php if ($stud_Gender == "TF") echo "SELECTED"; ?>>Trans-Female</option>
                                <option value='Trans-Male' <?php if ($stud_Gender == "TM") echo "SELECTED"; ?>>Trans-Male</option>
                                <option value='Other' <?php if ($stud_Gender == "O") echo "SELECTED"; ?>>Other</option>
                                <option value='None' <?php if ($stud_Gender == "N") echo "SELECTED"; ?>>None</option>

                            </select>

                            <input type="date" name="stud_Dod" placeholder="Enter Date of Birth" class="form-control md-2" value='<?php echo $stud_Dod; ?>'>
                            <input type="tel" name="stud_Phone" placeholder="Enter Phone Number" class="form-control md-2" value='<?php echo $stud_Phone; ?>'>
                            <select name="stud_Term" id="stud_Term" class="form-control md-2">
                                <?php

                                include '../../config/db/dbConnection.php';

                                $sql = "SELECT * FROM academicterms";
                                if ($result = mysqli_query($conn, $sql)) {
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<option value=" . $row['termName'] . "";
                                            if ($stud_Term == $row['termName']) echo " SELECTED ";
                                            echo " >" . $row['termName'] . "</option>";
                                        }
                                    } else {
                                        echo "Error:" . $conn->error;
                                    }
                                }

                                ?>
                            </select>
                            <input type="text" name="stud_Email" placeholder="Enter Student Email" class="form-control md-2" value='<?php echo $stud_Email; ?>'>
                            <input type="text" name="stud_Address" placeholder="Enter Address" class="form-control md-2" value='<?php echo $stud_Address; ?>'>
                            <input type="text" name="stud_Major" placeholder="Enter Major" class="form-control md-2" value='<?php echo $stud_Major; ?>'>
                    </div>

                    <button class="btn btn-primary" name="btnUpdate">UPDATE </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>