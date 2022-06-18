<?php
     session_start();
    include '../_database/database.php';
    if(isset($_REQUEST['add-author'])){
        $FName=$_REQUEST['FName'];
        $LName=$_REQUEST['LName'];
        $Degree=$_REQUEST['Degree'];

        $sql="INSERT INTO author( `FName`,`LName`, `Degree`) VALUES('$FName','$LName','$Degree')";

        mysqli_query($database,$sql) or die(mysqli_error($database));
        header("location: ../success-author.php");

    }
    else die(mysqli_error($database))


?>