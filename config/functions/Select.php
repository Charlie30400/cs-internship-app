<?php

function SelectTerms($conn)
{
    $sql = "SELECT * FROM academicterms";
    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='' disabled selected hidden>Choose Term</option>";
                echo "<option value=" . $row['termName']  . " >" . $row['termName'] . "</option>";
            }
        }
    }
    $conn->close();
}

function SelectStudents($conn)
{
    $sql = "SELECT * FROM student ";
    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='' disabled selected hidden>Choose student </option>";
                echo "<option value=" . $row['stud_Name']  . " >"
                    . $row['stud_Name'] . "</option>";
            }
        } else {
            echo "Error:" . $conn->error;
        }
    }
}

function SelectCompany($conn)
{
    $sql = "SELECT * FROM  company";
    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='' disabled selected hidden>Choose company</option>";
                echo "<option value=" . $row['comp_Name']  . " >" . $row['comp_Name'] . "</option>";
            }
        } else {
            echo "Error:" . $conn->error;
        }
    }
}

function SelectDepartment($conn)
{
    $sql = "SELECT * FROM  department";
    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='' disabled selected hidden>Choose department</option>";
                echo "<option value=" . $row['dep_Name']  . " >" . $row['dep_Name'] . "</option>";
            }
        } else {
            echo "Error:" . $conn->error;
        }
    }
}
