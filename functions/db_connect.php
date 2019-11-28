<?php 

function db_connect(){
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'bloggen';

    $conn = new mysqli($servername,$username,$password,$db_name);

    if($conn->connect_error){
        die('Database Connection Failed'.$conn->connect_error);
    }else{
        
        return $conn;
    }
}






?>