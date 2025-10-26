<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="SELECT* FROM public_deport WHERE id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$busname=$row['busname'];
$sendoff=$row['sendoff'];
$reach=$row['reach'];
$sendofftime=$row['sendofftime'];
$reachedtime=$row['reachedtime'];

if(isset($_POST['submit'])){
    $busname=$_POST['busname'];
    $sendoff=$_POST['sendoff'];
    $reach=$_POST['reach'];
    $sendofftime=$_POST['sendofftime'];
    $reachedtime=$_POST['reachedtime'];

    $sql="UPDATE public_deport SET id=$id,busname='$busname',sendoff='$sendoff',reach='$reach',sendofftime='$sendofftime',reachedtime='$reachedtime'
    WHERE id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "update succesfull";
        header('location:displaypublic.php');
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
    padding: 15px 70px; font-size: medium;" autocomplete="off" value=<?php echo $busname;?>><br>
                <label style="
    font-size: larger;
">Sendoff:</label><br>
                <input type="text" class="form.control" placeholder="enter busname" name="sendoff" style="
    padding: 15px 70px; font-size: medium;" autocomplete="off" value=<?php echo $sendoff;?>><br>
                <label style="
    font-size: larger;
">Reach:</label><br>
                <input type="text" class="form.control" placeholder="enter busname" name="reach" style="
    padding: 15px 70px; font-size: medium;" autocomplete="off" value=<?php echo $reach;?>><br>
                <label style="
    font-size: larger;
">Sendofftime:</label><br>
                <input type="text" class="form.control" placeholder="enter busname" name="sendofftime" style="
    padding: 15px 70px; font-size: medium;" autocomplete="off" value=<?php echo $sendofftime;?>><br>
                <label style="
    font-size: larger;
">Reachedtime:</label><br>
                <input type="text" class="form.control" placeholder="enter busname" name="reachedtime" style="
    padding: 15px 70px; font-size: medium;" autocomplete="off" value=<?php echo $reachedtime;?>><br>
            </div>
            <button type="submit" style="
    margin-left: 100px; font-size: medium;
    border: blueviolet;
    border-style: groove;" name="submit">UPDATE</button>
        </form>
    </div> 
</body>
</html>       

