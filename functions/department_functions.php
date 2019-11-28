<?php 
include 'db_connect.php';
session_start();

function add_department($department_name, $department_desc){

    $conn = db_connect();

    $sql = "INSERT INTO department(department_name, department_desc)VALUES ('$department_name','$department_desc')";

    $result = $conn->query($sql);

    if($result == false){
        die($conn->connect_error);
        echo "<div class = 'alert alert-danger'><strong>Cannot Add User</strong>";
    }else{
        header("location:./department_list.php");
    }

}

function display_departments(){
    $conn = db_connect();
    $sql = "SELECT * FROM department";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        $row = array();
        while($rows = $result->fetch_assoc()){
            $row[] = $rows;
        }return $row;
    }else{
        die($conn->connect_error);
        echo "ERROR DISPLAYING STUDENTS";
    }
}

function delete_department($department_id){
    $conn = db_connect();

    $sql = "DELETE FROM department WHERE department_id = '$department_id'";

    $result = $conn->query($sql);

    if($result == false){
        die($conn->connect_error);
    }else{
        header("location:./department_list.php");
    }
    

}
function edit_department($name,$desc,$id){
    $conn = db_connect();
    $sql = "UPDATE department set department_name = '$name', department_desc = '$desc' WHERE department_id = '$id'";

    $result = $conn->query($sql);
    if($result == false){
        die('Error editing department'.$conn->connect_error);
    }else{
        header("location:./department_list.php");
    }
}
function get_one_department($id){
    $conn = db_connect();
    
    $sql = "SELECT * FROM department WHERE department_id = '$id'";
    $result = $conn->query($sql);

    if($result == false){
        die('cannot retrive user data from database'.$conn->connect_error);
    }else{
        return $result->fetch_assoc();
    }
}








?>