<?php
include 'functions/teacher_functions.php';



if(empty($_SESSION['user'])){
    header('location:login.php');
}else{
    
$current_user = $_SESSION['user'];

$user = display_one_teacher($current_user);

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
        .col-3 {}
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
                <h2 class=" text-center mt-3 bg-dark text-light p-3 text-uppercase lead">
                    Hello Teacher <?php echo $user['first_name'] ?>!
                </h2>


                <hr>

            </div>

            <h2 class="display-4">

            </h2>
            <div class="col-md-4 p-5 text-center">
                <i class="fas fa-user-plus fa-7x"></i> <br> <br>
                <a name="" id="" class="btn btn-outline-primary btn-block" href="add_student.php" role="button">Add Student</a>

            </div>
            <div class="col-md-4 text-center p-5">
                <i class="fas fa-book-medical fa-7x "></i><br> <br>
                <a name="" id="" class="btn btn-outline-warning btn-block" href="add_subject.php" role="button">Add Subject</a>

            </div>
            <div class="col-md-4 p-5 text-center">
                <i class="fas fa-building fa-7x"></i><br> <br>
                <a name="" id="" class="btn btn-outline-secondary btn-block" href="add_department.php" role="button">Add Department</a>

            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 text-center">
                <i class="fas fa-address-book fa-7x"></i> <br> <br>
                <a name="" id="" class="btn btn-outline-success btn-block" href="student_list.php" role="button">View Student Lists</a>
            </div>
            <div class="col-md-4 text-center">
                <i class="fab fa-leanpub fa-7x"></i> <br> <br>
                <a name="" id="" class="btn btn-outline-danger btn-block" href="subject_list.php" role="button">View Subject List</a>
            </div>
            <div class="col-md-4 text-center  ">
                <i class="far fa-list-alt fa-7x"></i> <br> <br>
                <a name="" id="" class="btn btn-outline-info btn-block" href="department_list.php" role="button">View Department List</a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12 mt-5">
                <a href="logout.php" role="button" class="btn btn-danger btn-block btn-lg">Logout</a>

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