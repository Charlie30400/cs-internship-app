<!--Error no esta impriendo la pagina display-Students.php. Luego que se envia la data-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Student Registration">
    <meta name="keywords" content="Internship-App, Student Registration">
    <meta name="author" content="Carlos Ernesto Rodríguez Méndez">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../style/Form.css">
    <title>Student Registration</title>


</head>
<?php require '../../style/template/Header.html';
include '../../config/db/dbConnection.php'; ?>


<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card mt-5">
                        <div class="card-header">
                            <div>
                                <h2 class="frm-Title">Add Student</h2>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50%" height="50%" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" autocomplete="off" action="../../config/edit/send/send-student-data.php">
                                <input type="text" name="stud_ID" placeholder="Enter Student ID" class="form-control md-2">
                                <input type="text" name="stud_Name" placeholder="Enter Student Name" class="form-control md-2">
                                <select name="stud_Gender" class="form-control md-2">
                                    <?php echo "<option value='' disabled selected hidden>Choose Gender</option>"; ?>
                                    <option name="stud_Gender" value="M">Male </option>
                                    <option name="stud_Gender" value="F"> Female</option>
                                    <option name="stud_Gender" value="NB">Non-binary </option>
                                    <option name="stud_Gender" value="TF">Trans-Female </option>
                                    <option name="stud_Gender" value="TM">Trans-Male </option>
                                    <option name="stud_Gender" value="O">Other </option>
                                    <option name="stud_Gender" value="None">None </option>
                                </select>
                                <input type="date" name="stud_Dod" placeholder="Enter Date of Birth" class="form-control md-2">
                                <input type="tel" name="stud_Phone" placeholder="Enter Phone Number" class="form-control md-2"><br>
                                <select name="stud_Term" class="form-control md-2">
                                    <?php include '../../config/functions/Select.php';
                                    echo SelectTerms($conn); ?>
                                </select>
                                <input type="text" name="stud_Email" placeholder="Enter Student Email" class="form-control md-2">
                                <input type="text" name="stud_Address" placeholder="Enter Address" class="form-control md-2">
                                <input type="text" name="stud_Major" placeholder="Enter Major" class="form-control md-2">
                        </div>
                        <button class="btn btn-primary" type="submit" name="btnSubmit"> SEND </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>