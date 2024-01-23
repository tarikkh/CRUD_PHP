<?php 
    include './connect.php';
    if (isset($_GET['deletedid'])) {
        $deletedid = $_GET['deletedid'];
        $sql = "delete from `crud` where id =".$deletedid;
        $result = mysqli_query($con, $sql);

        if ($result) {
            header("Location:./display.php");
        }else{
            die(mysqli_error($con));
        }
    }
?>