<?php

require_once "oop.php" ;

$result="" ;

if(isset($_POST['btn'])){

   $result =  oop::addstudent() ;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add student page </title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/anwar.css">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Student Information</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

            <li class="nav-item active">
                <a class="nav-link" href="AddStudent.php">Add Student</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ViewStudent.php">View Student</a>
            </li>
        </ul>
    </div>
</nav>



<div class="container">
    <div class="row">
        <div class="offset-3 col-sm-6">

            <form action="" method="post">

              <?php if($result)  {  ?>

                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong><?php echo $result;?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <?php  }  ?>



                <div align="center" class="text-success">
                    <h2>  Student From</h2>
                </div>

                <div class="form-group">
                    <label>Student Name : </label>
                    <input type="text" name="student_name" class="form-control" >

                </div>

                <div class="form-group">
                    <label> Student Email : </label>
                    <input type="text" name="student_email" class="form-control" >
                </div>

                <div class="form-group">
                    <label>Student Phone : </label>
                    <input type="text" name="student_phone" class="form-control" >
                </div>

                <div class="form-group">

                    <input type="submit" name="btn" class="btn btn-success btn-block" value="Submit Student Details ">
                </div>


            </form>

        </div>
    </div>
</div>










<script src="js/jquery-3.4.1.js"></script>
<script src="js/poppers.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>


</body>
</html>

