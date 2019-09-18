<?php
  session_start();
  if(!isset($_SESSION['token'])){
    header('Location: views/login.php');
    exit();
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index - HRMS</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootsrap/css/bootsrap.min.css">
  </head>
  <body>
    <div class="container">
      <div id="insert" class="row">
        <a href="views/insert.php">Insert New Entry</a>
      </div>
      <div id="update" class="row">
        <a href=views/update.php>Update Old Entry</a>
      </div>
      <div id="delete" class="row">
        <a href="views/delete.php">Delete Entry</a>
      </div>
      <div id="view" class="row">
        <a href="views/view.php">View Records</a>
      </div>
      <div id="view" class="row">
        <a href="controller/logout.php" style="color:red;">Log Out</a>
      </div>
    </div>
  </body>
</html>
