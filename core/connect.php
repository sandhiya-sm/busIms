<?php
  
  $con=new mysqli('localhost','root','','bus');
  if(!$con){
    die(mysqli_error($con));
  }
?>