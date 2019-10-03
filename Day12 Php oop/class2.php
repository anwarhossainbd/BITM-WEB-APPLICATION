<?php

echo "<h1> jeson format  </h1>" ;

  $student = [
     '0' =>[
         'name' => 'anwar hossain' ,
         'age' => 24 ,
         'nationality' => 'Bangladeshi' ,
     ] ,

      '1' =>[
          'name' => 'sarowar hossain' ,
          'age' => 20 ,
          'nationality' => 'Bangladeshi' ,
      ] ,

  ] ;

  foreach ( $student[0] as $s ){

      echo $s . "<br>" ;

  }
