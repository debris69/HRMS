<?php
  session_start();
  if(!isset($_SESSION['token'])){
    header('Location: ../views/login.php');
    exit();
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete - HRMS</title>
    <link rel="stylesheet" href="../css/delete.css">
    <link rel="stylesheet" href="../css/sidenav.css">
    <script src="../js/sidenav.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  </head>
  <body>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="../views/insert.php">Insert</a>
      <a href="../views/update.php">Update</a>
      <a href="../views/delete.php">Delete</a>
      <a href="../views/view.php">View</a>
      <a href="../controller/logout.php">Logout</a>
</div>

<span onclick="openNav()"> <button class="btnmenu"><i class="fa fa-bars"></i></button> </span>
    <div id="main">
      <form class="update-form" action="../controller/getlist-delete.php" method="post">
        <h1>Find Record</h1>
        <div class="txtb">
          <input type="text" name="name" id="txtName" value="" placeholder="Name">
        </div>
        <div class="txtb">
          <input type="text" name="id" id="txtID" value="" placeholder="Student's ID (to directly delete)">
        </div>
        <input type="submit" class="logbtn" name="" value="Submit">
        <a href="../index.php"><span id="home"class="logbtn">Home</span></a>
      </form>
    </div>
  </body>
</html>
