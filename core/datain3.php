<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $busname=$_POST['busname'];
    $sendoff=$_POST['sendoff'];
    $reach=$_POST['reach'];
    $sendofftime=$_POST['sendofftime'];
    $reachedtime=$_POST['reachedtime'];
    $fare=$_POST['fare'];

    $sql="INSERT INTO exgovbus(busname,sendoff,reach,sendofftime,reachedtime,fare)
    VALUES('$busname','$sendoff','$reach','$sendofftime','$reachedtime','$fare')";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "data insert succesfull";
        header('location:displayexgovbus.php');
    }else{
        die(mysqli_error($con));
    }
}
?>

<html>
    <head><title></title>
</head>
<body>
    <div class="container" style=
    "margin: 15px;
    padding: 10;">
        <form method="post" style="margin-left: 250px;">
            <div class="form-group" style="padding: 20px;">
                <label style="
    font-size: larger;
">Busname:</label><br>
                <input type="text" class="form.control" placeholder="enter busname" name="busname"style="
    padding: 15px 70px; font-size: medium;" autocomplete="off"><br>
                <label style="
    font-size: larger;
">Sendoff:</label><br>
                <input type="text" class="form.control" placeholder="enter starting place" name="sendoff" style="
    padding: 15px 70px; font-size: medium;" autocomplete="off"><br>
                <label style="
    font-size: larger;
">Reach:</label><br>
                <input type="text" class="form.control" placeholder="enter reach place" name="reach" style="
    padding: 15px 70px; font-size: medium;" autocomplete="off"><br>
                <label style="
    font-size: larger;
">Sendofftime:</label><br>
                <input type="text" class="form.control" placeholder="enter starting time" name="sendofftime" style="
    padding: 15px 70px; font-size: medium;" autocomplete="off"><br>
                <label style="
    font-size: larger;
">Reachedtime:</label><br>
                <input type="text" class="form.control" placeholder="enter reached time" name="reachedtime" style="
    padding: 15px 70px; font-size: medium;" autocomplete="off"><br>
<label style="
    font-size: larger;
">Fare:</label><br>
    <input type="text" class="form.control" placeholder="fare" name="fare" style="
    padding: 15px 70px; font-size: medium;" autocomplete="off"><br>
            </div>
            <button type="submit" style="
    margin-left: 100px; font-size: medium;
    border: blueviolet;
    border-style: groove;" name="submit">submit</button>
        </form>
    </div> 
</body>
</html>       
