<?php 
    $con = new mysqli('localhost', 'root', '200406KH30TARIK', 'crudoperation');

    if(!$con){
        die(mysqli_error($con));
    }

?>