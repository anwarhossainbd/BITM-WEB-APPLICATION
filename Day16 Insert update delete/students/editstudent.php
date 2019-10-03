
<?php

require_once "vendor/autoload.php" ;
use App\classes\students ;

 $data = students::bringthedata($_GET['id']) ;

 $getdata =mysqli_fetch_assoc($data) ;

 if (isset($_POST['btn'])){

     students::updatestudent() ;
 }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

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

            <li class="nav-item">
                <a class="nav-link active" href="addstudent.php">Add Student</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="viewstudent.php">View Student</a>
            </li>
        </ul>
    </div>
</nav>





<div class="container">
    <div class="row">
        <div class="offset-3 col-sm-6">

            <form action="" method="post">



                <div align="center" class="text-success">
                    <h2> Edit  Student Form </h2>
                </div>

                <div class="form-group">
                    <label>Student Name : </label>
                    <input type="text" name="student_name" class="form-control" value="<?php echo $getdata['student_name']  ;?>" >
                    <input type="hidden" name="id" class="form-control" value="<?php echo $getdata['id']  ;?>" >


                </div>

                <div class="form-group">
                    <label> Student Email : </label>
                    <input type="text" name="student_email" class="form-control" value="<?php echo $getdata['student_email']  ;?>" >
                </div>

                <div class="form-group">
                    <label>Student Phone : </label>
                    <input type="text" name="student_phone" class="form-control" value="<?php echo $getdata['student_phone']  ;?>" >
                </div>

                <div class="form-group">

                    <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Student Information ">
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


