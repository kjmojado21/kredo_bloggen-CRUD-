<?php 
include 'functions/student_functions.php';

if(empty($_SESSION['user'])){
    header('location:login.php');
}else{
    
$current_user = $_SESSION['user'];


}








?>



<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>



    </style>
    <script src="https://kit.fontawesome.com/eb83b1af77.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <hr>
                <h2 class="display-2 text-center mt-3 bg-dark text-light p-3">
                    Kredo Bloggen
                </h2>
                <hr>


            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <a name="" id="" class="btn btn-outline-primary btn-block" href="index.php" role="button">HomePage</a>
                <br>
                <a name="" id="" class="btn btn-outline-primary btn-block " href="add_student.php" role="button">Add New Student</a>
                <br>
                <a name="" id="" class="btn btn-outline-primary btn-block disabled" href="student_list.php" role="button">View Students List</a>
                <br>
                <form method="post">
                    <button type="submit" name="IT_Students" class="btn btn-outline-primary btn-block">Display IT Students</button>
                </form>
                <br>
                <form method="post">
                    <button type="submit" name="eng_Students" class="btn btn-outline-primary btn-block">Display ESL Students</button>
                </form>
                <hr>
                <a name="" id="" class="btn btn-outline-primary btn-block " href="logout.php" role="button">Log Out</a>


            </div>
            <div class="col-9">
                <?php

                $rows = display_all_student();

                echo "<div class = 'alert alert-warning'>LIST OF ALL KREDO STUDENTS </div>";
                foreach ($rows as $key => $row) {
                    $student_id = $row['student_id'];

                    echo "<div class = 'alert alert-success text-uppercase p-4'>Student Last Name: <br>" . $row['last_name'] .

                        "<a href = 'student_profile.php?student_id=$student_id'><i class='fas fa-angle-double-right float-right fa-2x'></a></i>
                        <a href = 'delete_student.php?user_id=$student_id'><i class='fas fa-user-times float-right mr-3 fa-2x'></i></a></div>";
                }

                $IT = display_it_students();
                if (isset($_POST['IT_Students'])) {
                    
                    echo "<div class = 'alert alert-danger'>LIST OF ALL KREDO IT STUDENTS </div>";

                    foreach ($IT as $key => $row) {
                        echo "<div class = 'alert alert-success text-uppercase p-4'>Student Last Name: <br>" . $row['last_name'] .

                            "<a href = 'student_profile.php?student_id=$student_id'><i class='fas fa-angle-double-right float-right fa-2x'></a></i>
                        <a href = 'delete_student.php?user_id=$student_id'><i class='fas fa-user-times float-right mr-3 fa-2x'></i></a></div>";
                    }
                }
                $ESL = display_english_students();
                if (isset($_POST['eng_Students'])) {

                    foreach ($ESL as $key => $row) {
                        echo "<div class = 'alert alert-danger'>LIST OF ALL KREDO ESL STUDENTS </div>";
                        echo "<div class = 'alert alert-success text-uppercase p-4'>Student Last Name: <br>" . $row['last_name'] .

                            "<a href = 'student_profile.php?student_id=$student_id'><i class='fas fa-angle-double-right float-right fa-2x'></a></i>
                        <a href = 'delete_student.php?user_id=$student_id'><i class='fas fa-user-times float-right mr-3 fa-2x'></i></a></div>";
                    }
                }
                



                ?>

            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>