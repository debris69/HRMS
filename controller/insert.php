<?php
  $name=$_POST['name'];
  $fathername=$_POST['fathername'];
  $dob=$_POST['dob'];
  $university=$_POST['university'];
  $program=$_POST['program'];
  $gcontact=$_POST['contact_guardian'];
  $contact=$_POST['contact'];

  include('connection.php');
  if(mysqli_connect_errno())
    echo "Lost server connection".mysqli_connect_errno()."</br>";
  else{
    $query="insert into tblStudent(Student_name,Father_name,Guardian_contact,
    DOB,University,Program,Contact) values('{$name}','{$fathername}','{$gcontact}',
    '{$dob}','{$university}','{$program}','{$contact}')";

    if($connection->query($query)==TRUE){
      echo "<h1 style='text-align: center; color:#3ae374;'>Insertion Successful</h1>";
      include('../views/insert.php');
    }
    else{
      echo "<h1 style='text-align: center; color:#c23616;'> Insertion Failed".mysqli_error()." </h1> </br>";
      include('../views/insert.php');
    }

  }

 ?>
