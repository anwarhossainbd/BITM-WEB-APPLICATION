<?php


class oop
{
    public function logintoanotherpage(){
        extract($_POST) ;
       $con = mysqli_connect("localhost","root","","universitymanagement") ;
       $md5pass= md5($password) ;
       $sql = "select * from user where email='$email' && password='$md5pass'" ;

       if (mysqli_query($con,$sql)){

           $queryresult = mysqli_query($con,$sql) ;
           $users = mysqli_fetch_assoc($queryresult) ;
           if ($users){
               session_start() ;
               $_SESSION['id'] = $users['id'] ;
               $_SESSION['name'] = $users['name'] ;

               header("Location:addstudent.php") ;
           }else{
               header("Location:login.php") ;
           }
       }

    }

    public function logout(){
        unset( $_SESSION['id']);
        unset( $_SESSION['name']);
        header("Location:login.php") ;
    }

    public function   insertdatatodb(){
        extract($_POST) ;
        $con = mysqli_connect("localhost","root","","universitymanagement") ;
        $directory = "images/" ;
        $imageUrl =$directory.$_FILES['simage']['name'] ;
      //  move_uploaded_file($_FILES['simage']['tmp_name'],$imageUrl) ;
        $fileType =pathinfo($_FILES['simage']['name'],PATHINFO_EXTENSION) ;
        $check =getimagesize($_FILES['simage']['tmp_name']);


        $sql = "insert into students (sname ,sid,semail,gender,simage) values ('$sname','$sid','$semail','$gender','$imageUrl')" ;



        if(strlen($sname)>5){

            if($check){
                if (file_exists($imageUrl)){
                    return "This image already exit " ;
                }
                else {
                    move_uploaded_file($_FILES['simage']['tmp_name'],$imageUrl) ;
                }
            }
            else{
                return "plz upload an image file" ;
            }

            if (mysqli_query($con,$sql)){
                return "successfully update data" ;
            }
            else {
                die("Query Problem".mysqli_error($con)) ;
            }
        }
        else {

            return "character is small" ;
        }


    }

    public function getinfofromdb(){
        $con = mysqli_connect("localhost","root","","universitymanagement") ;
        $sql ="Select * from students " ;
        if (mysqli_query($con,$sql)){
            $queryresult = mysqli_query($con,$sql) ;
            return$queryresult ;
        }
        else {
            die("Query Problem".mysqli_error($con)) ;
        }
    }

    public function showinformation($id){

        $con = mysqli_connect("localhost","root","","universitymanagement") ;
        $sql ="Select * from students where id='$id'" ;
        if (mysqli_query($con,$sql)){
            $queryres =mysqli_query($con,$sql) ;
            return $queryres ;
        }
        else {
            die("Query Problem".mysqli_error($con)) ;
        }
    }

    public function updateinformation(){
        extract($_POST) ;

        $directory = "images/" ;
        $imageUrl =$directory.$_FILES['simage']['name'] ;
        //  move_uploaded_file($_FILES['simage']['tmp_name'],$imageUrl) ;
        $fileType =pathinfo($_FILES['simage']['name'],PATHINFO_EXTENSION) ;
        $check =getimagesize($_FILES['simage']['tmp_name']);


        $con = mysqli_connect("localhost","root","","universitymanagement") ;
        $sql ="update students set sname='$sname', sid='$sid',semail='$semail',gender='$gender', simage='$imageUrl' " ;

        if (mysqli_query($con,$sql)){

            if($check){
                if (file_exists($imageUrl)){
                    return "This image already exit " ;
                }
                else {
                    move_uploaded_file($_FILES['simage']['tmp_name'],$imageUrl) ;
                }
            }
            else{
                return "plz upload an image file" ;
            }

            header("Location:ViewStudent.php?message=succesfully update your profile ") ;
        }

        else {
            die("Query Problem".mysqli_error($con)) ;
        }
    }

    public function deleteinfo($id){

        $con = mysqli_connect("localhost","root","","universitymanagement") ;
        $sql = "DELETE FROM students where id='$id'" ;
        if (mysqli_query($con,$sql)){

          header("Location:ViewStudent.php?message2=Successfully delete ") ;
        }

        else {
            die("Query Problem".mysqli_error($con)) ;
        }
    }



}