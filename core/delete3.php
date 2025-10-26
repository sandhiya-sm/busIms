<?php
 include 'connect.php';
 if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from exgovbus where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
       //echo "Delete successfull";
       header('location:displayexgovbus.php');
    }else{
        die(mysqli_error($con));

    }
 }
 ?>
