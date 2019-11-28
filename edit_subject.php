<?php
include 'functions/subject_functions.php';

if(empty($_SESSION['user'])){
    header('location:login.php');
}else{
    
$current_user = $_SESSION['user'];



$subject_id = $_GET['subject_id'];

$row = view_one_subject($subject_id);


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
                <a name="" id="" class="btn btn-outline-primary btn-block" href="subject_list.php" role="button">View Subject List</a>
                <br>
                <a name="" id="" class="btn btn-outline-primary btn-block " href="logout.php" role="button">Log Out</a>

            </div>
            <div class="col-9 p-5">
                <div class="card ">
                    <div class="card-header">
                        <h3 class="display-4">
                            Edit Student Profile
                        </h3>
                    </div>
                    <div class="card-body p-3">
                        <form method="post">
                            <div class="form-group">
                                <label for="">Subject Name</label>
                                <input type="text" value="<?php echo $row['subject_name'] ?>" name="sub_name" class="form-control">

                                <label for="">Subject Description</label>
                                <input type="text" name="sub_desc" value="<?php echo $row['subject_description'] ?>" class="form-control">

                                <br>

                                <button type="submit" name="save" class="btn btn-primary btn-block">Save Edit</button>
                        </form>


                    </div>
                </div>
            </div>



            <?php


            if (isset($_POST['save'])) {
                $subjectName = $_POST['sub_name'];
                $subject_desc = $_POST['sub_desc'];

                edit_subject($subjectName,$subject_desc,$subject_id);
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