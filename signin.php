<?php
  include('server_login.php');
?>
<html>
    <head>
    <link rel="stylesheet" href="sign.css">
    </head>
<body>
        <div class="container">
            <div class="box">
                <div class="path"></div>
                    <div class="form" id="form" style="min-width: 70%">
                    <form method="post" action="signin.php">
            <h1>REGISTER</h1><br><br>
            <label for="emailid">EMAILID</label><br><br>
            <input type="text" placeholder="email-id" autocomplete="off" name="emailid"><br><br>
            <label for="password">NEW PASSWORD</label><br><br>
            <input type="password" placeholder="password" autocomple="off" name="password1"><br><br>
            <label for="password">CONFIRM PASSWORD</label><br><br>
            <input type="password" placeholder="password" autocomple="off" name="password2"><br><br>
           <button name="signin">Save</button>
           </form>
           </div>
                     <h2 id="head">PLEASE  REGISTER!!!</h2>
                </div>
            </div> 
        </body>
</html>