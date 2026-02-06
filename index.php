<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="StudentJobPracticeForm">
  <meta name="keywords" content="StudentJobPracticeForm">
  <meta name="author" content="Carlos Ernesto Rodríguez Méndez">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .img2 {
      float: left;
      margin-left: 10%;
    }

    .title {
      margin-left: 45%;
      color: #e0f2f1;
    }

    .text-content {
      float: right;
      color: #e0f2f1;

    }

    .text-footer {
      margin-left: 20%;
      color: #e0f2f1;
    }
  </style>
</head>

<body class="bg-dark">

  <?php require './style/template/Header.html'; //Navbar
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";

  ?>
  <div class="clearfix">
    <img class="img2" src="./img/Internship-Image1.jpg" alt="image" width="45%" height="25%">
    <div class="text-content">
      <b> Who we are</b>
      <br>
      A Puerto Rico based company founded in 2022 with
      <br> the goal to help future profesionals grow.<br>
      Understanding the needs of their users in bringing<br>
      a useful tool and the search for experience or job<br>
      opportunity. We commited to facilate a safe and efective <br>
      platform for companies and students<br>
      to comunicate and interact to inspire future generations.
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <h2 class="title">Content </h2>
  <hr style="color:#e0f2f1;" />
  <?php  //Content
  require './style/template/Content.html';
  echo "<br>";
  echo "<br>";
  //Content
  ?>
  <div>
    <h1 style="text-align:center;"></h1>
    <img src="./img/Internship-Image-TeamWork.jpg" width="100%" height="400px">
    <div class="text-footer">
      InternshipApp policy to provide equal opportunities to every individual for all<br> etnic, religion, sexual orientation and gender identity.
    </div><br>
    <div class="text-footer">
      <p>Copyright 2022<br>

        <i class="fa fa-instagram"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-facebook-official"></i>
    </div>
    </p>
</body>

</html>