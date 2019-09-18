
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update Record - HRMS</title>
    <link rel="stylesheet" href="../css/sidenav.css">
    <script src="../js/sidenav.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/insert.css">
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
      <form class="insert-form" action="../controller/update.php" method="post">
        <h1>Update Record</h1>
        <div class="txtb">
          <input type="text" name="name" id="txtName" value="" placeholder="Name" required>
        </div>
        <div class="txtb">
          <input type="text" name="fathername" id="txtFatherName" value="" placeholder="Father's Name" required>
        </div>
        <div class="txtb">
          <input type="date" name="dob" id="dob" value="" required>
        </div>
        <div class="txtb">
          <input type="text" name="university" id="txtUniversity" value="" placeholder="University/College" required>
        </div>
        <div class="txtb">
          <input type="text"  name="program" id="txtProgram" value="" placeholder="Program" required>
        </div>
        <div class="txtb">
          <input type="tel" pattern="[0-9]{10}" name="contact_guardian" id="txtGuardianContact"   placeholder="Guardian's Contact" required>
        </div>
        <div class="txtb">
          <input type="tel" pattern="[0-9]{10}" name="contact" id="txtContact"  placeholder="Student's Contact" required>
        </div>
        <input type="submit" class="logbtn" name="" value="Update">
        <a href="../views/update.php"><span id="home"class="logbtn">Back</span></a>
        <a href="../index.php"><span id="home"class="logbtn">Home</span></a>
      </form>
    </div>

    <?php
      session_start();

        $name=$_SESSION['name'];
        $fname=$_SESSION['fathername'];
        $dob=$_SESSION['dob'];
        $program=$_SESSION['program'];
        $university=$_SESSION['university'];
        $gcontact=  $_SESSION['gcontact'];
        $contact=$_SESSION['contact'];
        echo "<script type='text/javascript'>
          document.getElementById('txtName').value='{$name}';
          document.getElementById('txtFatherName').value='{$fname}';
          document.getElementById('dob').value='{$dob}';
          document.getElementById('txtUniversity').value='{$university}';
          document.getElementById('txtProgram').value='{$program}';
          document.getElementById('txtGuardianContact').value='{$gcontact}';
          document.getElementById('txtContact').value='{$contact}';
        </script>";

     ?>
  </body>
</html>
