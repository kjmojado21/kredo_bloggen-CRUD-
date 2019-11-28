<?php 
include 'db_connect.php';
session_start();

function add_subject($subject_name,$subject_desc){
    $conn = db_connect();
    $sql = "INSERT INTO subject (subject_name,subject_description) VALUES ('$subject_name','$subject_desc')";
    $result = $conn->query($sql);

    if($result == false){
        die($conn->connect_error);
        echo "Error Adding New Subject";
    }
    else{
        echo "<div class = 'alert alert-success'><strong>Subject Added Successfully</strong></div>";
    
    }

}

function view_all_subject(){
    $conn = db_connect();
    $sql = "SELECT * FROM subject";

    $result = $conn->query($sql);

    if($result->num_rows>0){
        $row = array();
        while($rows = $result->fetch_assoc()){
            $row[]= $rows;
        }
        return $row;
    }else{
        die($conn->connect_error);
        echo "<div class = 'alert alert-danger'><strong>No Subjects Available</strong>.<a href ='add_subject.php'>Add here!</a></div>";
    }
}
function view_one_subject($subjID){
    $conn = db_connect();
    $sql = "SELECT * FROM subject WHERE subject_id = '$subjID'";

    $result = $conn->query($sql);

    if($result == false){
        die($conn->connect_error);
        echo "<div class = 'alert alert-danger'><strong>Error!</strong> Retrieving Subject Details</div>";
    }
    else{
        return $result->fetch_assoc();
    }

}
function edit_subject($subject_name, $subject_desc,$subjID){
    $conn = db_connect();
    $sql = "UPDATE subject SET subject_name = '$subject_name', subject_description = '$subject_desc' WHERE subject_id = '$subjID'";
    $result = $conn->query($sql);

    if($result == false){
        die($conn->connect_error);
        echo "<div class = 'alert alert-danger'><strong>Error Editing Subject</strong></div>";
    }else{
        header("location: ./subject_list.php");
    }
}
function delete_subject($subjectID){
    $conn = db_connect();
    $sql = "DELETE FROM subject WHERE subject_id = '$subjectID'";
    $result = $conn->query($sql);

    if($result == false){
        die($conn->connect_error);
        echo "<div class = 'alert alert-warning'></strong>ERROR DELETING USER!</strong></div>";
    }else{
        header("location:./subject_list.php");
    }

}







?>