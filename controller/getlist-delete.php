<?php
  include('../views/delete.php');

  $name = $_POST['name'];
  $id = $_POST['id'];
  include('connection.php');
  if(mysqli_connect_errno()){
    echo "Failed to connect to server ".mysqli_connect_error()."</br>";
  }
  else{
    if($id != ''){
      $query="delete from tblStudent where Student_id='{$id}'";
      if($connection->query($query)==TRUE){
        header('Location: ../views/delete.php');
      }
      else{
        echo "<h1 style='text-align: center; color:#c23616;'>Failed to delete record".mysqli_error()." </h1> </br>";
        include('../views/delete.php');
      }
      }

    else{
      $query= "select * from tblStudent where Student_name like '{$name}%'";
      $result= $connection->query($query);
      if(mysqli_num_rows($result) > 0){
        echo "<style> th{
          text-align: center;
          padding: 10px;
        }
        tr{

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
