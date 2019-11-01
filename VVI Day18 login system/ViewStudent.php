<?php

session_start() ;
if ($_SESSION['id']== null){
    header("Location:login.php") ;
}
require_once "oop.php" ;
if (isset($_GET['logout'])){
    oop::logout() ;
}
$showdata = oop::getinfofromdb() ;
if (isset($_GET['status'])){
   $delete = oop::deleteinfo($_GET['id']) ;
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
            <li class="nav-item">
                <a class="nav-link" href="addstudent.php">Add Student </a>
            </li>
            <li class="nav-item active">
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

<div class="container">
    <div class="row">
        <div class="col-sm-12 mt-3">
            <?php
            if (isset($_GET['message'])){
                ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong><?php echo $_GET['message']  ; ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php }  ?>
            <?php
              if (isset($_GET['message2'])){
            ?>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong><?php echo $_GET['message2']  ; ?></strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>

            <?php }  ?>

        </div>

        <table class="table mt-3">
            <thead class="bg-info">

            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Id</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
                <th >Images</th>
                <th scope="col">Action</th>
            </tr>
            </thead>

            <?php $x=1 ; ?>
            <?php while ($information=mysqli_fetch_assoc($showdata))  {?>
            <tbody class="bg-success text-white">

            <tr>
                <td> <?php echo $x++ ;  ; ?> </td>
                <td> <?php echo $information['sname']  ; ?> </td>
                <td> <?php echo $information['sid']  ; ?> </td>
                <td> <?php echo $information['semail']  ; ?> </td>
                <td> <?php if ($information['gender']==0){
                    echo "Male" ;
                    }
                    else {
                        echo "Female" ;
                    }?> </td>

                <td> <img src="<?php echo $information['simage'] ; ?>" height="50px" width="50px"> </td>

                <td>
                    <a href="edit.php?id=<?php echo $information['id'] ;?>" class="btn btn-warning">Edit </a>
                    <a href="?status=delete&& id= <?php echo $information['id'] ;?>" class="btn btn-warning"> Delete</a>
                </td>

            </tr>
            </tbody>

            <?php } ?>
        </table>

    </div>
</div>





<script src="js/jquery-3.4.1.js"></script>
<script src="js/poppers.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>

