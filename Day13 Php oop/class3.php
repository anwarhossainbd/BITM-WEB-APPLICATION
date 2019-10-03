<?php


echo 1 ;

for($x=2 ;$x<=10 ;$x++) {

    echo "-".$x;

}

echo "<br>" ;



$colours = ["red","green" ,"blue","yellow"] ;

    foreach($colours as $cala ){

        echo "<ul>" ;
        echo "<li> $cala  </li>" ;
        echo "</ul>" ;

    }


    echo "<br>" ;


?>


<table width="450px" border="1">

    <?php
       for($row=1 ; $row<=8 ;$row++) {
           echo "<tr>";

           for ($col = 1; $col <= 8; $col++) {

              $total = $row +$col ;

              if($total%2==0){

                 echo "<td height='50px' width='35px' bgcolor='#fff'> </td>" ;
              }

              else {
                  echo "<td height='50px' width='35px' bgcolor='#000'> </td>" ;
              }

           }



           echo "</tr>" ;
       }

    ?>

</table>


