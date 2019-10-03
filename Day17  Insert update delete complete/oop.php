<?php


class oop
{
    public function addstudent(){

        extract($_POST) ;
        $con=mysqli_connect("localhost" ,"root" ,"" ,"student") ;

        $sql= "INSERT INTO students(student_name,student_email,student_phone)
         VALUES ('$student_name','$student_email','$student_phone')" ;

        if (mysqli_query($con,$sql)){

            return "Successfully Updata Data" ;
        }
        else{

            "Query problem".mysqli_error($con) ;
        }
    }

    public function getstudent(){

        $con=mysqli_connect("localhost" ,"root" ,"" ,"student") ;

        $sql= "SELECT * FROM students" ;

        if(mysqli_query($con,$sql)){

            $queryresult=mysqli_query($con,$sql) ;

            return $queryresult  ;
        }

        else{

            "Query problem".mysqli_error($con) ;
        }

    }

    public function getdatastudent($id){

        $con=mysqli_connect("localhost" ,"root" ,"" ,"student") ;

        $sql = "SELECT * FROM students where id='$id' " ;

        if(mysqli_query($con,$sql)){

            $queryresult=mysqli_query($con,$sql) ;

            return $queryresult  ;
        }

        else{

            "Query problem".mysqli_error($con) ;
        }

    }

    public function getdata() {

        extract($_POST) ;

        $con=mysqli_connect("localhost" ,"root" ,"" ,"student") ;
        $sql="UPDATE students SET student_name='$student_name' , student_email='$student_email' , student_phone='$student_phone' where id='$id'" ;




        if(mysqli_query($con,$sql)){

           header('Location:ViewStudent.php?message=1') ;


        }

        else{

            "Query problem".mysqli_error($con) ;
        }


    }

    public function deletestudent(){

        $con=mysqli_connect("localhost" ,"root" ,"" ,"student") ;

        $sql ="DELETE FROM students WHERE id='$id'" ;

        if(mysqli_query($con,$sql)){

          $result =  header ('Location: ViewStudent.php') ;

          return $result ;
        }
        else{

            "Query problem".mysqli_error($con) ;
        }


    }

    public function searchresult(){

        extract($_POST) ;

        $con=mysqli_connect("localhost" ,"root" ,"" ,"student") ;

        $sql ="SELECT * FROM students WHERE student_name LIKE '%$viewbox%' || student_email LIKE '%$viewbox%' || student_phone LIKE '%$viewbox%' " ;

        if(mysqli_query($con,$sql)){

            $result =  mysqli_query($con,$sql) ;

            return $result ;
        }
        else{

            "Query problem".mysqli_error($con) ;
        }


    }





}