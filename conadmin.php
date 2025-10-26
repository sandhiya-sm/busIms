<?php
$errors = array(); 
 $con=mysqli_connect("localhost","root","","bus");
 if (isset($_POST['signin'])) {
   $username = mysqli_real_escape_string($con, $_POST['username']);
   $password = mysqli_real_escape_string($con, $_POST['password']);
 
   if (empty($username)) {
     array_push($errors, "username is required");
   }
   if (empty($password)) {
     array_push($errors, "Password is required");
   }
 
   if (count($errors) == 0) {
     $password = $password;
     $query = "SELECT * FROM `admin` WHERE username='$username' AND password='$password'";
     $results = mysqli_query($con,$query);
     if (mysqli_num_rows($results) == 1) {     
       header('location:admin page.php');
     }else {
       array_push($errors, "Wrong username/password combination");
     }
   }
 }
 
 ?>
 
 