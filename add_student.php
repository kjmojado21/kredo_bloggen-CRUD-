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
                <div class="col-3 p-5">
                    <a name="" id="" class="btn btn-outline-primary btn-block" href="index.php" role="button">HomePage</a>
                    <br>
                    <a name="" id="" class="btn btn-outline-primary btn-block" href="student_list.php" role="button">View Students List</a>
                    <br>
                    <a name="" id="" class="btn btn-outline-primary btn-block " href="logout.php" role="button">Log Out</a>

                </div>
                <div class="col-9 p-5">
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="display-4">
                                Add A Student
                            </h3>
                        </div>
                        <div class="card-body p-3">
                            <form method="post">
                                <div class="form-group">
                                    <label for="">Student First Name</label>
                                    <input type="text" name="fname" class="form-control">

                                    <label for="">Student Last Name</label>
                                    <input type="text" name="lname" class="form-control">

                                    <label for="">Student ID</label>
                                    <input type="text" name="username" class="form-control">

                                    <label for="">Student Password</label>
                                    <input type="password" name="password" class="form-control">
                                    <label for="">Student Email</label>
                                    <input type="text" name="email" class="form-control">

                                    <label for="">Subjects</label>
                                    <select name="subjects" id="" class="form-control">
                                   <?php 
                                   $rows = display_student_subject();
                                   foreach($rows as $key => $row){
                                      
                                    echo "<option value = '".$row['subject_id']."'>".$row['subject_name']."</option>";                                   }
                                   
                                   
                                   
                                   
                                   ?>
                                    </select>  <br>

                                    <button type="submit" name="add_student"  class="btn btn-primary btn-block">Submit</button>
                                    <?php 
                                    
                                    if(isset($_POST['add_student'])){
                                        $fName = $_POST['fname'];
                                        $lName = $_POST['lname'];
                                        $uName = $_POST['username'];
                                        $pWord = $_POST['password'];
                                        $email = $_POST['email'];
                                        $subject = $_POST['subjects'];


                                        add_student($fName,$lName,$uName,$pWord,$email,$subject);

                                    }
                                    
                                    
                                    
                                    
                                    ?>
                                    
                                </div>
                        </div>
                    </div>


                    </form>
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