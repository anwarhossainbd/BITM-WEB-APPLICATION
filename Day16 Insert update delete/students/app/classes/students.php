<?php


namespace App\classes;


class students
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

           die("Query problem".mysqli_error($con)) ;
        }
    }

    public function viewstudents(){

        $con=mysqli_connect("localhost" ,"root" ,"" ,"student") ;

        $sql="SELECT * FROM students " ;

        if (mysqli_query($con,$sql)){

          $queryresult =  mysqli_query($con,$sql) ;
          return $queryresult ;
        }
        else{

            die("Query problem".mysqli_error($con)) ;
        }



    }

    public function bringthedata($id){

        $con=mysqli_connect("localhost" ,"root" ,"" ,"student") ;

        $sql="SELECT * FROM students WHERE id='$id'" ;

        if (mysqli_query($con,$sql)){

            $queryresult =  mysqli_query($con,$sql) ;
            return $queryresult ;
        }
        else{

            die("Query problem".mysqli_error($con)) ;
        }



    }


    public function updatestudent(){

        extract($_POST) ;

        $con=mysqli_connect("localhost" ,"root" ,"" ,"student") ;

        $sql="UPDATE  students SET student_name='$student_name' , student_email='$student_email', student_phone='$student_phone' 
         WHERE id='$id' " ;

        if (mysqli_query($con,$sql)){

             header('Location:viewstudent.php?message=1') ;
        }
        else{

            die("Query problem".mysqli_error($con)) ;
        }


    }


    public function deletestudent($id){

        $con=mysqli_connect("localhost" ,"root" ,"" ,"student") ;

        $sql= "DELETE FROM students where id='$id'" ;

        if(mysqli_query($con,$sql)){

            header('Location:viewstudent.php') ;
        }
        else{

            die("Query problem".mysqli_error($con)) ;
        }

    }


    public function searchStudentInfo(){
        extract($_POST);
        $link = mysqli_connect("localhost","root","","student");
        $sql = "SELECT * FROM students WHERE student_name LIKE '%$search_text%' || student_email LIKE '%$search_text%' || student_phone LIKE '%$search_text%'";
        if(mysqli_query($link,$sql)){
            $queryResult = mysqli_query($link,$sql);
            return $queryResult;
        } else {
            die('Query Problem'.mysqli_error($link));
        }
    }


}