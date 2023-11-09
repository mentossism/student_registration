<?php
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"lms_db");
    
        if(isset($_POST['submit']))
            {
              $username = $_POST['username'];
              $password = $_POST['password'];
    
               $sql = "SELECT password FROM admin WHERE username = '$username'";
    
               if(mysqli_query($connection,$sql))
               {
                      echo '<script> location.replace("dashboard.php")</script>';  
               }
               else if($_POST['username']=="" && $_POST['password']=="")
               {
                      echo "Please input username and password correctly";
               }  
               else
               {  
                       echo "Some thing Error" . $connection->error;
               }
            }
?>


<!DOCTYPE html>
<html>
<head>
<style>
            
            header .header{
            background-color: white;
            height: 50px;
            }
            header a img{
            width: 120px;
            margin-top: 3px;
            }
            .login-page {
            width: 360px;
            padding: 8% 0 0;
            margin: auto;
            }
            .login-page .form .login{
            margin-top: -31px;
            margin-bottom: 26px;
            }
            .form {
            position: relative;
            z-index: 1;
            background:#F2D8D8;
            max-width: 360px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
           
            }
            .form input {
            font-family:'Poppins', sans-serif;
            outline: 0;
            background: white;
            width: 100%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            
            font-size: 14px;
            }
            .form button {
            font-family: 'Poppins', sans-serif;
            text-transform: uppercase;
            outline: 0;
            background-color:blue;
            background-image: white;
            width: 100%;
            border: 0;
            padding: 13px;
            color: #FFFFFF;
            font-size: 14px;
           
            }
            .form .message {
            margin: 15px 0 0;
            color: #b3b3b3;
            font-size: 12px;
            }
            .form .message a {
            color: #4CAF50;
            text-decoration: none;
            }

            .container {
            position: relative;
            max-width: 500px;
            margin: 0 auto;
            }

            body {
            background-color:blue;
            font-family: 'Poppins', sans-serif;
            
            }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<title> Finals </title>
</head>
<body>
  <body>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>ADMIN LOGIN</h3>
          </div>
        </div>
        <form class="login-form" method="post">
          <input type="text" name="username" placeholder="username"/>
          <input type="password" name="password" placeholder="password"/>
          <button name="submit">LOGIN</button>
        </form>
      </div>
    </div>
</body>
</body>
</html>