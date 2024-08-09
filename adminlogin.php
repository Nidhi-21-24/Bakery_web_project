<?php
session_start();
$conn = new mysqli('localhost','root','','bakery');
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="i.css">
<style>
    body{
    background: url("static/img/bakery4.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 100%;
    
    display: flex;
    height: 100%;
    width:100%;
    justify-content: center;
    align-items: center;
    padding: 10px; 
    
    }
    .container{
        max-width: 500px;
        width: 500%;
        background-color:brown;
        padding: 25px 30px;
        border-radius: 5px;
        float: none;
    
    }
    .login-form input[type="text"],
    .login-form input[type="password"],
    .login-form textarea {
        width: 50%;
        padding: 10px;
        margin-top: 15px;
        border: 1px solid #5d5959;
        border-radius: 5px;
        box-sizing: border-box;
    }

.login-form input[type="submit"] {
  width: 50%;
  padding: 10px;
  margin-top: 10px;
  background-color: rgb(13, 14, 14);
  color: rgb(233, 231, 232);
  border:none;
  border-radius: 15px;
  cursor: pointer;
}

.login-form input[type="submit"]:hover {
  background-color:rgb(96, 118, 118);
}.btn {
  background-color: black;
  border: none;
  
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.btn:hover {
 
  color: black;
}

</style>
</head>
<body>
    
            <div class="container">
                <form action="adminconnect.php" method="post">
                <center><h1>ADMIN LOGIN</h1>
                <div class="login-form">
                    <label for="aname">Username:</label>
                    <input type="text" id="aname" name="aname" required /><br><br>
                    <label for="pwd">Password:</label>
                    <input type="password" id="apassword" name="apassword" required /><br><br>
                    
                    <input type="submit" value="Submit" name="submit"><br><br>
                    </div>
        <div class="btn" >
        <a href="index.php" style="color:white;" >Back</a>
   </div>

                </center>

            </div>
        </body>
        </html>
