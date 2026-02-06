<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Update Department">
    <meta name="keywords" content="Internship-App,Update Department">
    <meta name="author" content="Carlos Ernesto Rodríguez Méndez">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../style/Form.css">
    <title>Company Registration</title>
</head>
<?php
require "../../config/db/dbConnection.php";
$update = $_GET['id'];
if (isset($update)) {
    $sql = "SELECT * FROM department WHERE dep_ID = '$update'";
    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($result);
    if ($queryResult > 0) {
        while ($row = $result->fetch_assoc()) {
            $dep_ID = $row['dep_ID'];
            $dep_Name = $row['dep_Name'];
            $dep_Type = $row['dep_Type'];
            $dep_Status = $row['dep_Status'];
            $dep_Boss = $row['dep_Boss'];
            $dep_Phone = $row['dep_Phone'];
            $dep_Email = $row['dep_Email'];
            $dep_Descrip = $row['dep_Descrip'];
            $dep_Review = $row['dep_Review'];
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
                        <h2 class="frm-Title">Update Department Data</h2>
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50%" height="50%" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16" id="icon">
                                <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                                <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                            </svg>
                        </div>
                    </div>
                    <button onclick="location.href='../company/company-Registration.php'" class="btn btn-primary" type="button"> Add Company</button>
                    <div class="card-body">
                        <form method="POST" action="../../config/edit/update/send-update-department.php">
                            <input type='hidden' id='dep_ID' name='dep_ID' value='<?php echo $dep_ID; ?>'>
                            <input type="text" name="dep_Name" placeholder="Enter department  " class="form-control md-2" value='<?php echo $dep_Name; ?>'>
                            <input type="text" name="dep_Type" placeholder="Enter Department Type" class="form-control md-2" value='<?php echo $dep_Type; ?>'>
                            <select id="dep_Status" name="dep_Status" class="form-control md-2">

                                <option value='Active' <?php if ($dep_Status == "Active") echo "SELECTED"; ?>>Active</option>
                                <option value='Inactive' <?php if ($dep_Status == "Inactive") echo "SELECTED"; ?>>Inactive</option>
                            </select>
                            <input type="text" name="dep_Boss" placeholder="Enter Department Boss" class="form-control md-2" value='<?php echo $dep_Boss; ?>'>
                            <input type="tel" name="dep_Phone" placeholder="Enter Human Resorces Email" class="form-control md-2" value='<?php echo $dep_Phone; ?>'>
                            <input type="text" name="dep_Email" placeholder="Enter Human Resources Phone" class="form-control md-2" value='<?php echo $dep_Email; ?>'>
                            <input type="text" name="dep_Descrip" placeholder="Department Description" class="form-control md-2" value='<?php echo $dep_Descrip; ?>'>
                            <input type="text" name="dep_Review" placeholder="Department Review" class="form-control md-2" value='<?php echo $dep_Review; ?>'>
                    </div>
                    <button class="btn btn-primary" name="btnSave">Save </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>