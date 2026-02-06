<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Update Company Data">
    <meta name="keywords" content="Internship-App, Update Company Data">
    <meta name="author" content="Carlos Ernesto Rodríguez Méndez">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../style/Form.css">
    <title> Update Company</title>
    <style>

    </style>
</head>
<?php
require "../../config/db/dbConnection.php";

$update = $_GET['id'];
if (isset($update)) {
    $sql = "SELECT * FROM company WHERE comp_ID = '$update'";
    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($result);
    if ($queryResult > 0) {
        while ($row = $result->fetch_assoc()) {
            $comp_ID = $row['comp_ID'];
            $comp_Name = $row['comp_Name'];
            $comp_Type = $row['comp_Type'];
            $comp_Status = $row['comp_Status'];
            $comp_Boss = $row['comp_Boss'];
            $comp_Descrip = $row['comp_Descrip'];
            $comp_Phone = $row['comp_Phone'];
            $comp_Email = $row['comp_Email'];
            $comp_Address = $row['comp_Address'];
            $comp_Review = $row['comp_Review'];
            $comp_WP = $row['comp_WP'];
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
                        <div>
                            <h2 class="frm-Title">Update Company Data</h2>
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50%" height="50%" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16" id="icon">
                                    <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                                    <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <button onclick="location.href='../department/department-Registration.php'" class="btn btn-primary" type="button"> Add Company</button>
                    <div class="card-body">
                        <form method="POST" action="../../config/edit/update/update-company-data.php">
                            <input type='hidden' id='comp_ID' name='comp_ID' value='<?php echo $comp_ID; ?>'>
                            <input type="text" name="comp_Name" placeholder="Enter Company Name" class="form-control md-2" value='<?php echo $comp_Name; ?>'>
                            <input type="text" name="comp_Type" placeholder="Enter Company Name" class="form-control md-2" value='<?php echo $comp_Type; ?>'>
                            <select id="comp_Status" name="comp_Status" class="form-control md-2">
                                <option value='Active' <?php if ($comp_Status == "Active") echo "SELECTED"; ?>>Active</option>
                                <option value='Inactive' <?php if ($comp_Status == "Inactive") echo "SELECTED"; ?>>Inactive</option>
                            </select>
                            <input type="text" name="comp_Boss" placeholder="Enter Company Boss Name" class="form-control md-2" value='<?php echo $comp_Boss; ?>'>
                            <input type="text" name="comp_Descrip" placeholder="Enter Company Description" class="form-control md-2" value='<?php echo $comp_Descrip; ?>'>
                            <input type="tel" name="comp_Phone" placeholder="Enter Company Phone" class="form-control md-2" value='<?php echo $comp_Phone; ?>'>
                            <input type="text" name="comp_Email" placeholder="Enter Company Email" class="form-control md-2" value='<?php echo $comp_Email; ?>'>
                            <input type="text" name="comp_Address" placeholder="Enter company address" class="form-control md-2" value='<?php echo $comp_Address; ?>'>
                            <input type="text" name="comp_Review" placeholder="Enter Review" class="form-control md-2" value='<?php echo $comp_Review; ?>'>
                            <input type="text" name="comp_WP" placeholder="Enter Company WebPage" class="form-control md-2" value='<?php echo $comp_WP; ?>'>
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