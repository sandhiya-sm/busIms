<?php include('conadmin.php')?>
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
    <?php include('error1.php')?>
        <div class="container">
            <div class="box">
                <div class="path"></div>
                <form action="admin.php" method="post" style="width:75%;">
                    <div class="form" id="form" style="min-width: 70%;margin:24px;margin-left:-20px;">
            <h1 style="margin-left:-33px;margin-bottom:-18px;">ADMIN</h1><br><br>
            <label for="username">USER NAME</label><br><br>
            <input type="text" placeholder="Enter your username" autocomplete="off" name="username"><br><br>
            <label for="password">PASSWORD</label><br><br>
            <input type="password" placeholder="Enter your password" autocomplete="off" name="password"><br><br>
           <button type="submit" name="signin" style="margin-top:10px;">SIGN IN</button>
           </form>
            </div>
                    <h2 id="head">please &nbsp;login &nbsp; &nbsp;!!</h2>
                </div>
            </div>
    </body>
    </html>
    