<?php
 include 'connect.php';
 if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from privatebus where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
       //echo "Delete successfull";
       header('location:displayprivate.php');
    }else{
        die(mysqli_error($con));

    }

 }
 ?>
     