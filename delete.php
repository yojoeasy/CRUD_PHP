<?php
include("db.php");
if(isset($_GET['deleteid'])){
    // print_r($_GET);
    $id = $_GET['deleteid'];

    $sql = "delete from crud where id=".$id;
    $result = mysqli_query($con,$sql);
    if($result){
        // echo "Deleted";
        header("Location:index.php");
    }else{
        die(mysqli_error($con));
    }
}
?>