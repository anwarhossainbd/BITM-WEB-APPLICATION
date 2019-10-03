<?php

require_once("Student.php") ;
require_once("Oop.php") ;

    $s1 =new student() ;
      echo  $s1->studentname ;
      echo "<br>" ;
      $oo = new oop() ;
      echo  $oo->country;
      echo "<br>" ;

      echo  $oo->addition() ;
      echo "<br>" ;

       echo $oo-> email_getting() ;
       echo "<br>" ;

       $oo->total_army();
echo "<br>" ;

 $oo->display("anwar") ;




