<?php

session_start() ;
require_once "oop.php" ;

if ($_SESSION['id']== null){
    header("Location:login.php") ;
}

if (isset($_GET['logout'])){
    oop::logout() ;
}

   $data = oop::showinformation($_GET['id']) ;
   $showdata =  mysqli_fetch_assoc($data) ;

 if (isset($_POST['btn'])){

        oop::updateinformation() ;
 }


?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/anwar.css">
</head>
<body>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="addstudent.php">Add Student </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ViewStudent.php">View Student</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
                <a class="nav-link active" href=""> <?php echo $_SESSION['name'] ; ?> </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="?logout=true">Logout </a>
            </li>
        </ul>
    </div>
</nav>




<div class="container mt-3 bg-light">
    <div class="row">
        <div class="offset-3 col-sm-6">

            <form action="" method="post" enctype="multipart/form-data"  id="sampleForm">

                <center> <h2 class="text-success">Edit Student Information </h2> </center>
                <div class="form-group row mt-3" >
                    <div class="col-sm-4"> <label>Student Name</label></div>
                    <div class="col-sm-8">
                        <input type="text" name="sname" class="form-control" value="<?php echo $showdata['sname'] ;?>">
                        <input type="hidden" name="sid" class="form-control" value="<?php echo $showdata['id'] ;?>">

                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-4"> <label>Student Id</label></div>
                    <div class="col-sm-8">
                        <input type="text" name="sid" class="form-control" value="<?php echo $showdata['sid'] ;?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4"> <label>Student Email</label></div>
                    <div class="col-sm-8">
                        <input type="text" name="semail" class="form-control"  value="<?php echo $showdata['semail'] ;?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4"> <label>Student Gender</label></div>
                    <div class="col-sm-8">
                        <select class="form-control" name="gender" >
                            <option>---Select Your Gender---</option>
                            <option value="0">Male</option>
                            <option value="1">Female</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                      plz select image again
                    <div class="col-sm-4"> <label>Student Image</label></div>
                    <div class="col-sm-8">
                        <input type="file" name="simage" class="form-control"  value="<?php echo $showdata['simage'] ;?>">
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" value="Update Student Info" name="btn" class="btn-info btn-block form-control">
                </div>


            </form>

        </div>
    </div>
</div>






<script src="js/jquery-3.4.1.js"></script>
<script src="js/poppers.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>

<script>
    document.forms['sampleForm'].elements['gender'].value = <?php echo $showdata['gender']; ?>
</script>
</body>
</html>

