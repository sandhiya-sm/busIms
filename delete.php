<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
   $id=$_GET['deleteid'];
   $sql="DELETE FROM public_deport WHERE id=$id";
   $result=mysqli_query($con,$sql);
   if($result){
      // echo "Delete successfull";
      header('location:displaypublic.php');
   }
   else{
    die(mysqli_error($con));
   } 
}
?>