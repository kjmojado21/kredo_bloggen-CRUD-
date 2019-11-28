<?php 
include 'db_connect.php';
session_start();
function add_student($firstname,$lastname,$username,$password,$email,$subjects){
    $conn = db_connect();

    $sql = "INSERT INTO students (first_name,last_name,username,password,email,subjects)VALUES('$firstname','$lastname','$username','$password','$email','$subjects')";
    
    $result = $conn->query($sql);

    if($result == false){
        die('Error Adding Student'.$conn->connect_error);
    }else{
        echo "<br>";
        echo "<div class = 'alert alert-success'><strong>Student Added Successfully!</strong></div>";
    }
}

function display_all_student(){
    $conn = db_connect();

    $sql = "SELECT * FROM students";

    $result = $conn->query($sql);

    if($result->num_rows>0){
        $row = array();
        while($rows = $result->fetch_assoc()){
            $row[] = $rows;
        }
        return $row;
    }else{
        die('No Students Available'.$conn->connect_error);
    }
}

function display_one_user($userID){
    $conn = db_connect();
    $sql = "SELECT * FROM students WHERE student_id = '$userID'";
    $result = $conn->query($sql);

    if($result == false){
        die('cannot retrieve user data'.$conn->connect_error);
    }else{
        return $result->fetch_assoc();
    }

}
function edit_student($id,$fname,$lname,$username,$password,$email,$subjects){
    $conn = db_connect();
    
    $sql = "UPDATE students SET first_name = '$fname',last_name = '$lname', username = '$username', password = '$password',
    email = '$email', subjects = '$subjects' WHERE student_id = '$id'";

    $result = $conn->query($sql);

    if($result == false){
        die('Cannot Update Student'.$conn->connect_error);
    }else{
        header('location:./student_list.php');
    }

}
function delete_student($userID){
    $conn = db_connect();
    $sql = "DELETE FROM students WHERE student_id = '$userID'";
    $result = $conn->query($sql);

    if($result == false){
        die('Error Deleting Student'.$conn->connect_error);
    }else{
        header('location:./student_list.php');
    }

}
function display_student_subject(){
    $conn = db_connect();
    $sql = "SELECT * FROM subject";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        $row = array();
        while($rows = $result->fetch_assoc()){
            $row[] = $rows;
        }
        return $row;
    }else{
        die('error to retrieve subjects'.$conn->connect_error);
    }
}
function display_it_students(){
    $conn = db_connect();
    $sql = "SELECT * FROM students WHERE subjects = '11'";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        $row = array();
        while($rows = $result->fetch_assoc()){
            $row[] = $rows;
        }
        return $row;
    }else{
        die($conn->connect_error);
        echo "No Enrolled students";
    }
}
function display_english_students(){
    $conn = db_connect();
    $sql = "SELECT * FROM students WHERE subjects = '14'";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        $row = array();
        while($rows = $result->fetch_assoc()){
            $row[] = $rows;
        }
        return $row;
    }else{
        die($conn->connect_error);
        echo "No Enrolled students";
    }
}

function upload_photo($id,$name){
    $conn = db_connect();
    $name = $_FILES['pic']['name'];
    $targetDir = 'uploads/';
    $target_file = $targetDir.basename($_FILES['pic']['name']);

    $sql = "UPDATE students SET student_pic = '$name' WHERE student_id = '$id'";

    $result = $conn->query($sql);

    if($result == false){
        die('unable to upload photo'.$conn->connect_error);
    }else{
        move_uploaded_file($_FILES['pic']['tmp_name'],$target_file);
        header('location: student_list.php');
         
    }



}







?>