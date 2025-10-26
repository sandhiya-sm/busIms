<?php
include 'connect.php';
?>
<html>
    <head><title></title>
    </head>
    <body>
        <div class="container">
        <button style="margin:12px 10px;
            padding:10px; font-weight:bold;background:repeating-radial-gradient(skyblue,transparent 100px);border:none;border-radius:50px;
            box-shadow:10px 10px 10px -1px rgba(10,99,169,0.16),-10px -10px 10px -1px rgba(269,267,269,0.70);"><a href="datain.php">ADD DATA</a></button>
             <button style="margin:12px 10px;
            padding:10px; font-weight:bold;background:repeating-radial-gradient(black,transparent 100px);border:none;border-radius:50px;
            box-shadow:10px 10px 10px -1px rgba(10,99,169,0.16),-10px -10px 10px -1px rgba(269,267,269,0.70);"><a href="admin page.php" style="color:red">BACK</a></button>
            <table class="table" style="border-spacing:65px 25px;text-algin:center;box-shadow:-1px 12px 12px;border-radius:50px;">
                <thead style="box-shadow:-1px 12px 12px rgba(0,0,10,1)"><tr>
                <th>id</th>
                    <th>BUSNAME</th>
                    <th>SENDOFF</th>
                    <th>REACH</th>
                    <th>SENDOFFTIME</th>
                    <th>REACHEDTIME</th>
                    <th>OPERATIONS</th>
                </tr>
                </thead>
                <tbody>
            <?php
            $sql="select *from public_deport";
            $result=mysqli_query($con,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $id=$row['id'];
                     $busname=$row['busname'];
                     $sendoff=$row['sendoff'];
                     $reach=$row['reach'];
                     $sendofftime=$row['sendofftime'];
                     $reachedtime=$row['reachedtime'];
                     echo '<tr>
                     <td>'.$id.'</td>
                     <td>'.$busname.'</td>
                     <td>'.$sendoff.'</td>
                     <td>'.$reach.'</td>
                     <td>'.$sendofftime.'</td>
                     <td>'.$reachedtime.'</td>
                     <td><button><a href="update.php? updateid='.$id.'" style="color:darkblue;">UPDATE</a></button>
            <button><a href="delete.php? deleteid='.$id.'"style="color:red;">DELETE</a></button>
            </td>
            
                     </tr>
                    ';
                }   
            }
            ?>
            </tbody>
            </table>
        </div>
    </body>
</html>    