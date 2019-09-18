<?php
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  include('connection.php');
  if (mysqli_connect_errno())
    echo "Failed to connect to server ".mysqli_connect_error()."</br>";
  else{
    $query = "insert into tblAdmin values('{$username}','$password')";

    if($connection->query($query)==TRUE){
      echo "<h1 style='text-align: center; color:#3ae374;'>User Registered</h1>";
      include('../views/login.php');
    }
    else{
      echo "<h1 style='text-align: center; color:#c23616;'> Failed to Register </h1> </br>";
      include('../views/register.html');
    }
  }
 ?>
