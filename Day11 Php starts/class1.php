<!DOCTYPE html>
<html>
<head>
	<title>pencilbox web application </title>
</head>
<body>

	<?php

      echo " <h1> Odd or even test </h1> " ;

      $num=10 ;
      if($num%2==0){
          echo $num . " is a even number " ;
      }

      else {

          echo $num. "is an odd number " ;
      }

      echo "<br>" ;

        echo " <h1>Switch Case </h1>  " ;


      switch ($num){

          case 1 :
              echo "you got 1 mark in ielts "  ;
              break ;

          case 2 :
              echo "you got 2 mark in ielts " ;
              break ;

          case 5 :
              echo "you got 5 mark in ielts " ;
              break ;

          case 9 :
              echo "you got 9 mark in ielts " ;
              break ;

          case 10 :
              echo "you got 10 mark in ielts " ;
              break ;

          default :
              echo "you are fail in iltes " ;

      }


       echo " <h1>arrays </h1>" ;

         $name = array('anwar' ,'ayesha' ,'sadia' ,'roksana')  ;



         echo $name[3] . " + " .$name[0];
         echo "<br>" ;

         $id =[] ;
         $id[0] = 006 ;
         $id[1] = 005 ;
         $id[2] = 030 ;

         echo $id[2] ;

          echo "<br>" ;

          echo "<h1> Foreach Loop  </h1>" ;

          $district= array("kishoreganj" ,"dhaka" , "mymensingh" ,"sylet" ,"rajshahi") ;

          foreach ($district as $show) {
           
           echo $show. "<br>" ;
          }


          echo "<br>" ;

          echo "<h2>Student details  </h2>" ;

          $students = [] ;

          $students[0]['name'] = "anwar " ;
          $students[0]['age'] = "24" ;
          $students[0]['id']=20160006 ;

          foreach ($students[0] as $information ){

              echo $information . "  " ;
          }



    echo "<h2> jeson format <br>  </h2>" ;


          $teacher1 =[
                  'name' => "anwar" ,
                   'age' => 24 ,
                   'university' => "southeast university" ,

          ] ;


          foreach ($teacher1 as $printa){
              echo $printa ."<br>"  ;
          }

          echo "<br>" ;


          $teacher2 =[
               'name' =>'roubia doula'   ,
                'age' => 23 ,
              'university ' => "southeast university " ,

          ] ;

          foreach ($teacher2 as $value){

              echo $value ."<br>" ;
          }


    echo "<br>" ;

          $sexy_girls=[
             '0' => [
                 'name' => 'farhana yesmin '   ,
                 'age' => 23 ,
                 'rating' => "four star",

             ] ,

              '1' =>[
                  'name'   => 'shimu' ,
                  'age' =>23 ,
                  'rating ' => "five star",
              ],

              '2' =>[
                  'name' => 'mim',
                  'age' => 23 ,
                  'rating' =>"five star",
              ],
          ] ;

           foreach ($sexy_girls[2] as $forme){

               echo $forme . "<br>" ;
           }


         echo "<br>" ;

    echo "<br>" ;


          $southeast =[

                  '0' => [
                      'name' => 'anwar hossain' ,
                      'id'   => '2016006',
                      'age' =>24,
                      'batch' => 42 ,
                  ],

              '1' =>[
                  'name' => 'Harun or rasid' ,
                  'id'   => '2016030',
                  'age' =>23,
                  'batch' => 42 ,
              ],

              '2' =>[
                  'name' => 'mohosin' ,
                  'id'   => '2016106',
                  'age' =>23,
                  'batch' => 42 ,
              ],

              '3' =>[
                  'name' => 'tanvin' ,
                  'id'   => '2016136',
                  'age' =>23,
                  'batch' => 43 ,
              ],

          ];

	?>


        <table border="1">

            <tr>
                <th>Name</th>
                <th>ID</th>
                <th>Age</th>
                <th>Batch</th>
            </tr>

          <?php foreach ($southeast as $southeasta)  {  ?>
            <tr>
               <td> <?php echo $southeasta['name'] ?> </td>
                <td> <?php echo $southeasta['id'] ?> </td>
                <td> <?php echo $southeasta['age'] ?> </td>
                <td> <?php echo  $southeasta['batch'] ?> </td>


            </tr>

            <?php } ?>


        </table>


         <?php

         function addition ($a ,$b=null){

             $c = $a +$b ;
             return $c ;

         }

         echo "<h1> Function starts here  </h1>" ;

          $add=  addition(10,5) ;

         echo $add ;

         ?>










</body>
</html>





