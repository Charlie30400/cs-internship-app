<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Update Internship">
    <meta name="keywords" content="Internship-App,Update Internship">
    <meta name="author" content="Carlos Ernesto Rodríguez Méndez">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../style/Form.css">
    <title>Internship Registration</title>
    <style>
        form {
            margin-top: 25px;
        }
    </style>
</head>
<?php
require "../../config/db/dbConnection.php";
$update = $_GET['id'];
if (isset($update)) {

    $sql = "SELECT * FROM   internship WHERE internshipID = '$update'";
    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($result);
    if ($queryResult > 0) {
        while ($row = $result->fetch_assoc()) {
            $internshipID = $row['internshipID'];
            $student = $row['student'];
            $company = $row['company'];
            $department = $row['department'];
            //For testing 
            //echo $result;
            //echo "( $queryResult)";
        }
    }
}
?>

<?php require '../../style/template/Header.html'; ?>

<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="frm-Title">Update Internship Data</h2>
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50%" height="50%" fill="currentColor" class="bi bi-folder-plus" viewBox="0 0 16 16">
                                <path d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2zm5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672z" />
                                <path d="M13.5 10a.5.5 0 0 1 .5.5V12h1.5a.5.5 0 1 1 0 1H14v1.5a.5.5 0 1 1-1 0V13h-1.5a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z" />
                            </svg>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="../../config/edit/update/update-internship-data.php">
                            <input type='hidden' id='internshipID' name='internshipID' value='<?php echo $internshipID; ?>'>
                            <select name="student" class="form-control md-2">
                                <?php

                                include '../../config/db/dbConnection.php';
                                $sql = "SELECT * FROM student";
                                if ($result = mysqli_query($conn, $sql)) {
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {

                                            echo "<option value=" . $row['stud_Name'] . "";
                                            if ($student == $row['stud_Name']) echo " SELECTED ";
                                            echo " >" . $row['stud_Name'] . "</option>";
                                        }
                                    } else {
                                        echo "Error:" . $conn->error;
                                    }
                                }
                                ?>
                            </select><br>
                            <select name="company" class="form-control md-2">
                                <?php

                                $sql = "SELECT * FROM company";
                                if ($result = mysqli_query($conn, $sql)) {
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<option value=" . $row['comp_Name'] . "";
                                            if ($company == $row['comp_Name']) echo " SELECTED ";
                                            echo " >" . $row['comp_Name'] . "</option>";
                                        }
                                    } else {
                                        echo "Error:" . $conn->error;
                                    }
                                }
                                ?>
                            </select><br>
                            <select name="department" class="form-control md-2">
                                <?php
                                $sql = "SELECT * FROM department";
                                if ($result = mysqli_query($conn, $sql)) {
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {

                                            echo "<option value=" . $row['dep_Name'] . "";
                                            if ($department == $row['dep_Name']) echo " SELECTED ";
                                            echo " >" . $row['dep_Name'] . "</option>";
                                        }
                                    } else {
                                        echo "Error:" . $conn->error;
                                    }
                                }

                                ?>
                            </select>
                    </div>
                    <button class="btn btn-primary" name="btnSave">Save </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>