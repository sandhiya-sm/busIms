<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'conreg.php';
    if(isset($_POST['signin'])){
        $emailid=$_POST['emailid'];
        $passsword=$_POST['passsword'];
        $cpasssword=$_POST['cpasssword'];

        $sql="INSERT INTO 'userregister' (emailid,passsword) VALUES ('$emailid','$passsword')";
        $result=mysqli_query($con,$sql);
        if($result){
            echo "Data inserted successfully";
        }
        else{
            die(mysqli_error($con));
        }
    }
}
?>