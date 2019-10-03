
<?php

require_once "vendor/autoload.php" ;
use App\classes\students ;




  if (isset($_GET['message'])){
      $_GET['message'] =1 ;
  }
  else {
      $_GET['message'] ='' ;
  }

$result = students::viewstudents() ;

  $queryresult='' ;

if (isset($_GET['status'])){
    $queryresult = students::deletestudent($_GET['id']) ;
}

if(isset($_POST['btn'])){
    $queryResult = students::searchStudentInfo();
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
                <a class="nav-link" href="addstudent.php">Add Student</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="viewstudent.php">View Student</a>
            </li>
        </ul>
    </div>
</nav>



<div class="container">
    <div class="row mt-5">
        <div class="offset-2 col-md-8">
            <form class="form-inline" method="post" action="">
                <div class="form-group mr-3">
                    <label>Search your items here</label>
                </div>
                <input type="text" name="search_text" class="form-control mr-3">
                <input type="submit" name="btn" class="btn btn-primary" value="Search">
        </div>
        </form>
    </div>
</div>
</div>









<div class="container">
    <div class="row">
        <div class="offset-2 col-sm-8 mt-5">

            <?php if($_GET['message']==1) {   ?>

                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong><?php echo "Successfully Update Data" ;?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            <?php }  ?>


            <table class="table">
                <thead class="thead-dark ">
                <tr>
                    <th># SL</th>
                    <th>Student Name </th>
                    <th>Student Email </th>
                    <th>Student Phone </th>
                    <th>Action </th>
                </tr>

                </thead>

                <?php $x=1 ;   ?>

                <?php while ($students=mysqli_fetch_assoc($result))  {  ?>

                <tbody >


                <tr>
                    <td> <?php  echo $x++ ; ?>  </td>
                    <td> <?php echo $students['student_name']  ; ?> </td>
                    <td> <?php echo $students['student_email']  ; ?> </td>
                    <td> <?php echo $students['student_phone']  ; ?> </td>
                    <td>
                         <a href="editstudent.php?id=<?php echo $students['id'] ; ?>">Edit</a>
                         <a href="?status=delete&&id=<?php echo $students['id'] ;  ?>" onclick="return confirm('Are You sure??')"> Delete</a>
                    </td>
                </tr>


                </tbody>

                <?php  } ?>

            </table>
        </div>
    </div>
</div>





<script src="js/jquery-3.4.1.js"></script>
<script src="js/poppers.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>




</body>
</html>


