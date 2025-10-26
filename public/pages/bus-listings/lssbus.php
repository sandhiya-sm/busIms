<?php
include 'connect.php';
?>
<html>
    <head><title></title>
</head>
<body>
    <div class=container>
    <h1 style="
    MARGIN-LEFT:  50px;
    color: blue;">SPECIAL BUS</h1>
    </div>
    <table class="table" style="border-spacing:100px 30px;text-algin:center;box-shadow:none;border-radius:30px 22px;font:message-box;">
                <thead style="box-shadow:10px 9px 20px black;color:red;border-radius:20px 10px;font:message-box;font-size:large;font-family:cursive;"><tr>
                    <th>BUSNAME</th>
                    <th>DEPORT</th>
                    <th>ARRIVAL</th>
                    <th>DEPORTTIME</th>
                    <th>ARRIVALTIME</th>    
                </tr>
                </thead>
                <tbody style="font-size: x-large;">
                <?php
            
            $sql="select *from lssbus";
            $result=mysqli_query($con,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                     $busname=$row['busname'];
                     $sendoff=$row['sendoff'];
                     $reach=$row['reach'];
                     $sendofftime=$row['sendofftime'];
                     $reachedtime=$row['reachedtime'];
                     echo '<tr>
                     <td>'.$busname.'</td>
                     <td>'.$sendoff.'</td>
                     <td>'.$reach.'</td>
                     <td>'.$sendofftime.'</td>
                     <td>'.$reachedtime.'</td>
                     </tr>
                    ';
                }
            }
            ?>
            </tbody>
        </table>  
</div>
<button style="margin-left:1020px;
            padding:10px; font-weight:bold;background:repeating-radial-gradient(black,transparent 100px);border:none;border-radius:50px;
            box-shadow:10px 10px 10px -1px rgba(10,99,169,0.16),-10px -10px 10px -1px rgba(269,267,269,0.70);font-size:30px;"><a href="home.php" style="color:red">BACK</a>
      </button>
</body>
</html>
       