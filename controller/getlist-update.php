<?php
  include('../views/update.php');

  $name = $_POST['name'];
  $id = $_POST['id'];
  include('connection.php');
  if(mysqli_connect_errno()){
    echo "Failed to connect to server ".mysqli_connect_error()."</br>";
  }
  else{
    if($id != ''){
      $query="select * from tblStudent where Student_id='{$id}'";
      $result=$connection->query($query);
      if(mysqli_num_rows($result) >0){
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION['name']=$row['Student_name'];
        $_SESSION['fathername']=$row['Father_name'];
        $_SESSION['dob']=$row['DOB'];
        $_SESSION['program']=$row['Program'];
        $_SESSION['university']=$row['University'];
        $_SESSION['gcontact']=$row['Guardian_contact'];
        $_SESSION['contact']=$row['Contact'];
        $_SESSION['id']=$row['Student_id'];

        header('Location: ../views/updateform.php');
      }
    }
    else{
      $query= "select * from tblStudent where Student_name like '{$name}%'";
      $result= $connection->query($query);
      if(mysqli_num_rows($result)> 0){
        echo "<style> th{
          text-align: center;
          padding: 10px;
        }
        </style><table cellpadding='10' style='padding: 10px; background-color:#f1f1f1;
        border-radius:10px; border:1px solid #f1f1ff; position: absolute; top:80%; left: 25%;
        text-align: center; margin-bottom: 50px;'>
        <tr> <th>ID</th>
        <th>Name</th> <th>Father's Name</th> <th>Date of Birth </th>
        <th>Program</th><th>University</th> <th> Guardian's Contact</th>
        <th>Contact</th> </tr>";

        while($row = $result->fetch_assoc()){
          echo "<tr> <td>".$row['Student_id']."</td><td>"
          .$row['Student_name']."</td><td>"
          .$row['Father_name']."</td><td>"
          .$row['DOB']."</td><td>"
          .$row['Program']."</td><td>"
          .$row['University']."</td><td>"
          .$row['Guardian_contact']."</td><td>"
          .$row['Contact']."</td></tr>";
        }
        echo "</table>";
    }
    else{
      echo "<h1 style='text-align:center; color:#f1f1f1;'> No Records Found!! </h1>";
    }
  }
}
 ?>
