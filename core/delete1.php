<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from lssbus where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "Delete successfull";
       header('location:displaylss.php');
    }
   else{
    die(mysqli_error($con));
   } 
}
?>