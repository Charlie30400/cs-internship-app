<!--https://www.tutorialrepublic.com/php-tutorial/php-mysql-crud-application.php-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../style/Table.css">

    <style>
        h2 {
            margin-left: 40%;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: #e0f2f1;
        }
    </style>

</head>
<?php require '../../style/template/Header.html'; ?>

<body class="bg-dark">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2> Company Data</h2>
                    <br>
                    <?php
                    // Include config file
                    require_once "../../config/db/dbConnection.php";

                    // Attempt select query execution
                    $sql = "SELECT * FROM company";
                    if ($result = mysqli_query($conn, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            echo '<table class="table table-bordered table-striped">';
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>#</th>";
                            echo "<th>COMPANY</th>";
                            echo "<th>TYPE</th>";
                            echo "<th>STATUS</th>";
                            echo "<th>BOSS</th>";
                            echo "<th>DESCRIPTION</th>";
                            echo "<th>Phone</th>";
                            echo "<th>Email</th>";
                            echo "<th>Address</th>";
                            echo "<th>Review</th>";
                            echo "<th>WebPage</th>";
                            echo "<th>ACTIONS</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['comp_ID'] . "</td>";
                                echo "<td>" . $row['comp_Name'] . "</td>";
                                echo "<td>" . $row['comp_Type'] . "</td>";
                                echo "<td>" . $row['comp_Status'] . "</td>";
                                echo "<td>" . $row['comp_Boss'] . "</td>";
                                echo "<td>" . $row['comp_Descrip'] . "</td>";
                                echo "<td>" . $row['comp_Phone'] . "</td>";
                                echo "<td>" . $row['comp_Email'] . "</td>";
                                echo "<td>" . $row['comp_Address'] . "</td>";
                                echo "<td>" . $row['comp_Review'] . "</td>";
                                echo "<td>" . $row['comp_WP'] . "</td>";
                                echo "<td>";
                                echo '<a href="./company-Registration.php?id=' . $row['comp_ID'] . '" class="mr-3" title="Create Report" data-toggle="tooltip"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                                <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z"/>
                                <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                              </svg></a>';
                                echo '<a href="update-Company-Data.php?id=' . $row['comp_ID'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                echo '<a href="../../config/edit/delete/delete-Company.php?id=' . $row['comp_ID'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else {
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else {
                        echo "Oops! Something went wrong. Please try again later.";
                    }

                    // Close connection
                    mysqli_close($conn);
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>