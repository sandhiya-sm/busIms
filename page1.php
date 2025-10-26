<?php include('server_login.php')?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="style1.css">
        <title>page2</title>
    </head>
    <style>
        .error{
            font-family: cursive;
            color: red;
            border-bottom:double;
        }
    </style>
    <body>
        <?php include('error.php')?>
        <div class="container" style="margin-right:300px;">
            <div class="box" style="min-height:50vh">
                <div class="path"></div>
                    <div class="form" id="form" style="min-width:80%;">
                        <form action="page1.php" method="post">
                            <h1 style="margin-left:10px;margin-bottom:-20px;">LOGIN</h1><br><br>
                            <label for="emailid">EMAILID</label><br><br>
                            <input type="text" placeholder="enter your email-id" autocomplete="off" name="emailid"><br><br>
                            <label for="password">PASSWORD</label><br><br>
                            <input type="password" placeholder="Minmum 8 charcters" autocomplete="off" name="password"><br><br>
                            <button id="buttom" name="login" style="margin-top:10px;">SIGN IN</button>
                        </form>
                    </div>
                
                     <h2 id="head">please &nbsp;login &nbsp; &nbsp;!!!</h2>
                </div>
                <h2 style="margin-right:200px;">New user Please<a href="signin.php">Register</a> Now!</h2>
            </div> 
            
    </body>
</html>