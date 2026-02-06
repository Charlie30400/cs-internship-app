<?php

require_once '../../db/dbConnection.php';

$data = array(array(

    'stud_Record' => $_POST['stud_Record'],
    'stud_ID' => $_POST['stud_ID'],
    'stud_Name' => $_POST['stud_Name'],
    'stud_Gender' => $_POST['stud_Gender'],
    'stud_Dod' => $_POST['stud_Dod'],
    'stud_Phone' => $_POST['stud_Phone'],
    'stud_Term' => $_POST['stud_Term'],
    'stud_Email' => $_POST['stud_Email'],
    'stud_Address' => $_POST['stud_Address'],
    'stud_Major' => $_POST['stud_Major']
));

foreach ($data as $value) {

    $sql = "INSERT INTO student(stud_Record,stud_ID,stud_Name,stud_Gender,
            stud_Dod,stud_Phone,stud_Term,stud_Email,stud_Address,stud_Major)
            VALUES('$value[stud_Record]','$value[stud_ID]','$value[stud_Name]',
            '$value[stud_Gender]','$value[stud_Dod]','$value[stud_Phone]',
            '$value[stud_Term]','$value[stud_Email]',
           '$value[stud_Address]','$value[stud_Major]')";
    $result = mysqli_query($conn, $sql);
    if ($result) {

        header("Location:../../../sections/student/Display-Students.php");
        exit();
    } else {
        echo "\nError:" . $sql . "<br>" . $conn->error;
    }
}
