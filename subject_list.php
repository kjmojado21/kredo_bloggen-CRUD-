<?php
include 'functions/subject_functions.php';


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
                <a name="" id="" class="btn btn-outline-primary btn-block" href="index.php" role="button">Homepage</a>
                <br>
                <a name="" id="" class="btn btn-outline-primary btn-block " href="add_subject.php" role="button">Add New Subject</a>
                <br>
                <a name="" id="" class="btn btn-outline-primary btn-block disabled" href="student_list.php" role="button">View Subject List</a>
                <br>

                <hr>
                <a name="" id="" class="btn btn-outline-primary btn-block " href="logout" role="button">Log Out</a>


            </div>


            <div class="col-9">
                <?php
                $rows = view_all_subject();

                echo "<div class = 'alert alert-danger'>LIST OF ALL KREDO SUBJECTS </div>";

                foreach ($rows as $key => $row) {
                    $subjectID = $row['subject_id'];
                    echo "<div class = 'card w-25 float-left'>";
                            echo "<div class = 'card-header bg-secondary  text-light text-center'>";
                                echo "<h4 class = 'card-title lead'>".$row['subject_name']."</h4>";

                            echo "</div>";

                            echo "<div class = 'card-body'>";
                                echo "<p class = 'card-text lead text-center'>".$row['subject_description']."</p>";
                                echo "<a class = 'text-success' href = 'edit_subject.php?subject_id=$subjectID'><i class='fas fa-angle-double-right fa-2x float-right'></i></a>";
                                echo "<br>";
                                echo "<br>";
                                echo "<a class = 'text-danger' href = 'delete_subject.php?subject_id=$subjectID'><i class='fas fa-book-dead fa-2x float-right'></i></a>";


                            echo "</div>";
                        echo "</div>";
                      


                    // echo "<div class = 'alert alert-success text-uppercase p-4'>Subject Name: <br>" . $row['subject_name'] .

                        "<a href = 'subject_profile.php?subject_id=$subjectID'><i class='fas fa-angle-double-right float-right fa-2x'></a></i>
                <a href = 'delete_subject.php?subject_id=$subjectID'><i class='fas  float-right mr-3 fa-2x'></i></a></div>";
                }




                ?>


            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>