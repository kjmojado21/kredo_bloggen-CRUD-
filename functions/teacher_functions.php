<?php 
include 'db_connect.php';
session_start();

function display_one_teacher($id){
    $connection = db_connect();
    $sql = "SELECT * FROM teachers WHERE teacher_id = '$id'";
    
    if($connection->query($sql) == FALSE){
        die('cannot retrieve user');
    }else{
        return $connection->query($sql)->fetch_assoc();
    }
}
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