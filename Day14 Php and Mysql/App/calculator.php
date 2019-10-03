<?php

require_once "output.php" ;

use app\classes\output ;

 $object = new output() ;

  $result="" ;

 if(isset($_POST['add'])) {
     $first = $_POST['firstnumber'];
     $last = $_POST ['lastnumber'];
     $result =  $object->full($first,$last) ;
 }

if(isset($_POST['sub'])) {
    $first = $_POST['firstnumber'];
    $last = $_POST ['lastnumber'];
    $result =  $object->sub($first,$last) ;
}




?>



<form action="" method="post">

    <table>

        <tr>
            <td> First Number : </td>
            <td> <input type="text" name ="firstnumber"></td>
        </tr>

        <tr>
            <td> Last Number : </td>
            <td> <input type="text" name ="lastnumber"></td>
        </tr>

        <tr>
            <td> </td>

            <td> <input type="submit" name ="add" value="+">
             <input type="submit" name ="sub" value="-">
             <input type="submit" name ="mul" value="*">
             <input type="submit" name ="div" value="/"></td>
        </tr>

        <tr>
            <td> Result is =  </td>
            <td> <?php echo $result ;  ?> </td>
        </tr>


    </table>

</form>

