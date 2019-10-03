<?php

  require_once "add.php" ;

  $object = new add();

 /* $res=" " ;

  if(isset($_POST['all'])){

     $fst= $_POST['first'];
     $end = $_POST['end'] ;

      for($x=$fst ; $x<=$end ; $x++){

          echo $x ;
      }


  }*/


?>

<form method="post">
    <table>

        <tr>
            <td>Starting number :</td>
            <td>  <input type="text" name="first"> </td>
        </tr>

        <tr>
            <td>Ending number :</td>
            <td>  <input type="text" name="end"> </td>
        </tr>

        <tr>
            <td></td>
            <td>  <input type="submit" name="all" value="All">
                  <input type="submit" name="odd" value="Odd">
                  <input type="submit" name="even" value="Even">
            </td>
        </tr>

        <tr>
            <td> The output is =  </td>
            <td> <?php

                $res=" " ;

                if(isset($_POST['all'])){

                    $fst= $_POST['first'];
                    $end = $_POST['end'] ;

                    for($x=$fst ; $x<=$end ; $x++){

                        echo $x."  " ;
                    }
                }

                if(isset($_POST['odd'])){

                    $fst= $_POST['first'];
                    $end = $_POST['end'] ;

                    for($x=$fst ; $x<=$end ; $x++){

                        $num= $x ;

                        if($num%2 !=0){
                            echo $num ." ";
                        }
                    }
                }



                ?>  </td>
        </tr>



    </table>
</form>
