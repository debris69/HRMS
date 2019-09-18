<?php
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  include('connection.php');
  if (mysqli_connect_errno())
    echo "Failed to connect to server ".mysqli_connect_error()."</br>";
  else{
    $query = "select * from tblAdmin where username= '{$username}' and password= '{$password}' limit 1";
    $result = $connection->query($query);
    $result = $result->fetch_assoc();

    if($result['username']==$username && $result['password']==$password){
      session_start();
      $_SESSION['token']='x';
      header('Location: ../index.php');
    }
    else
      echo "<h1 style='text-align: center; color:#c23616;'>username or password incorrect</h1>"."</br>";
      include('../views/login.php');

  }
 ?>
