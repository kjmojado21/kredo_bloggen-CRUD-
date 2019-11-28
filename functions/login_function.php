<?php 
include 'db_connect.php';

session_start();

function login($uname,$pword){
  
    $conn = db_connect();
    
    $sql = "SELECT * FROM teachers WHERE username = '$uname' AND password = '$pword'";

    $result = $conn->query($sql);

    if($result->num_rows == 1){
      $row = $result->fetch_assoc();
      $_SESSION['user'] = $row['teacher_id'];

      return TRUE;
    }else{
        return FALSE;
    }

}







?>