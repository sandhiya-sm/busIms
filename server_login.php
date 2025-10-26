<?php
// initializing variables
$emailid   = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'bus');

// REGISTER USER
if (isset($_POST['signin'])) {
  // receive all input values from the form
  $emailid = mysqli_real_escape_string($db, $_POST['emailid']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password1']);
  $password_2 = mysqli_real_escape_string($db,$_POST['password2']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array

  if (empty($emailid)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM userregister WHERE emailid='$emailid' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
   // if user exists
   if($user){
    if ($user['emailid'] === $emailid) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  //encrypt the password before saving in the database
  $password = $password_1;
  	$query = "INSERT INTO `userregister`(id,emailid,password)VALUES(NULL,'$emailid', '$password')";
  	$res=mysqli_query($db, $query);
    if($res)
  	header('location: page1.php');
  }


}
// LOGIN USER
if (isset($_POST['login'])) {
  $emailid = mysqli_real_escape_string($db, $_POST['emailid']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($emailid)) {
    array_push($errors, "Email is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = $password;
    $query = "SELECT * FROM userregister WHERE emailid='$emailid' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {      
      header('location: home.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

?>