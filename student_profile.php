<?php

require 'functions/student_functions.php';

if(empty($_SESSION['user'])){
    header('location:login.php');
}else{
    
$current_user = $_SESSION['user'];


$student_id = $_GET['student_id'];

$row = display_one_user($student_id);


}





?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://kit.fontawesome.com/eb83b1af77.js" crossorigin="anonymous"></script>
    <style>
    img{
        width: 300px;
        height: 250px;
    }
    </style>
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
                    <a name="" id="" class="btn btn-outline-primary btn-block" href="student_list.php" role="button">View Students List</a>
                    <br>
                    <a name="" id="" class="btn btn-outline-primary btn-block " href="logout.php" role="button">Log Out</a>
                    
                   <br>
                    <hr>
                    <a name="" id="" class="btn btn-outline-warning btn-block " href="edit_student.php?user_id=<?php echo $student_id ?>" role="button">Edit User</a>
                    <a name="" id="" class="btn btn-outline-danger btn-block " href="delete_student.php?user_id=<?php echo $student_id ?>" role="button">Delete Student</a>

                </div>
                
                <div class="col-9">
                    <div class="card w-75 mx-auto">
                        <div class="card-header text-center">
                        <?php 
                        if(!empty($row['student_pic'])){
                            $image = $row['student_pic'];
                                echo "<img src = 'uploads/$image' class = 'rounded-circle'>";
                        }else{
                            echo '<i class="fas fa-address-card fa-10x"></i>';
                            echo "<form method = 'post' enctype = 'multipart/form-data'>";
                            echo "<input type = 'file' name = 'pic'>";
                            echo '<button type="submit" name = "upload" class="btn btn-outline-primary">Upload</button>';

                           echo "</form>";

                           if(isset($_POST['upload'])){
                               $name = $_POST['pic'];
                               upload_photo($student_id,$name);
                           }
                        }
                        
                        ?>

                        </div>
                        <div class="card-body text-center">
                            <h4 class="display-4 text-center">
                                Student Profile
                            </h4>
                            <hr>
                            <h5 class="display-4">
                           <?php 
                           echo "<p class='text-danger'>First Name:</p>"; 
                           echo $row['first_name'];
                           echo "<br>";
                           echo "<p class='text-danger'>Last Name:</p>";
                           echo $row['last_name'];
                           echo "<br>";
                           echo "<p class='text-danger'>Username :</p>";
                           echo $row['username'];
                           echo "<br>";
                           echo "<p class='text-danger'>Password:</p>";
                           echo $row['password'];
                           echo "<br>";
                           echo "<p class='text-danger'>Email:</p>";
                           echo $row['email'];
                           echo "<br>";
                           echo "<p class='text-danger'>Subject ID:</p>";
                           echo $row['subjects'];
                           
                           
                           
                           
                           ?>
                           </h5>

                        </div>
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