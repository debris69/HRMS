<?php
session_start();
$id=$_SESSION['id'];
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
  $query="update tblStudent set Student_name='{$name}',Father_name='{$fathername}'
  ,Guardian_contact='{$gcontact}',DOB='{$dob}',University='{$university}'
  ,Program='{$program}',Contact='{$contact}' where Student_id={$id}";

  if($connection->query($query)==TRUE){
    unset($_SESSION['id']);
    echo "<h1 style='text-align: center; color:#3ae374;'>Record Updated</h1>";
    include('../views/update.php');
  }
  else{
    echo "<h1 style='text-align: center; color:#c23616;'> Failed to update".mysqli_error()." </h1> </br>";
    include('../views/update.php');
  }
}
 ?>
