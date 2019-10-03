<?php
require_once "output.php" ;

$object = new \app\classes\output();

$fullname="" ;

if(isset($_POST['submit'])) {
    $first = $_POST['firstname'];
    $last = $_POST['lastname'];
    $fullname = $object->full($first, $last);
}
?>

<form action="" method="post">

    <table>

        <tr>
            <td> First Name : </td>
            <td> <input type="text" name ="firstname"></td>
        </tr>

        <tr>
            <td> Last Name : </td>
            <td> <input type="text" name ="lastname"></td>
        </tr>

        <tr>
            <td>  </td>
            <td> <input type="submit" name ="submit" value="submit"></td>
        </tr>

        <tr>
            <td> Full Name is =  </td>
            <td> <?php echo $fullname  ?> </td>
        </tr>


    </table>

</form>
