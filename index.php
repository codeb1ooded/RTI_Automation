<?php
   include 'config_database.php'; 
   session_start();
   $result = 'No';
   if(isset($_POST['submit'])){
      if($_SERVER["REQUEST_METHOD"] == "POST") {
         // username and password sent from form 
         $db = mysqli_connect('localhost','root','','rti');
         $myusername = mysqli_real_escape_string($con, $_POST['username']);
         $mypassword = mysqli_real_escape_string($con, $_POST['password']); 
         if($myusername == '' || $mypassword == ''){ 
            // echo "Your Login Name or Password is empty";
            // echo '<script type="text/javascript"> alert("Username or password can\'t be empty"); </script>';
            $result = 'empty';
         }
         else{
            $sql = "SELECT name FROM login WHERE name = '$myusername' and password = '$mypassword'";
            $result = mysqli_query($db,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            //$active = $row['active'];
      
            $count = mysqli_num_rows($result);
      
            // If result matched $myusername and $mypassword, table row must be 1 row
      
            if($count == 1) {
               // session_register("name");
                $_SESSION['login_user'] = $myusername;
                $result = 'Yes';
                header("location: select_option.php");
            }else {
               // $error = "Your Login Name or Password is invalid";
               // echo "Your Login Name or Password is invalid";
               $result = 'incorrect';
            }
         }
      }
   }
?>
<!DOCTYPE HTML>
<html>
   <head>
      <meta charset="UTF-8">
      <title> Login </title>
      <link rel="stylesheet" href="css/login.css">
      <link rel="stylesheet" href="css/background.css">
      <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
      <link rel="stylesheet" href="css/style.css">
      <script type="text/javascript">
         function fpassoverlay(){
            alert("Please Contact Admin");
         }
          window.onload = function(){
            document.getElementById('username').onclick = function(){
              document.getElementById("message").innerHTML="";
            }
            document.getElementById('password').onclick = function(){
              document.getElementById("message").innerHTML="";
            }
          }
      </script>
   </head>
   <body>
      <h2><center>RTI APPLICATION SYSTEM</center></h2>
      <div class="login-page">
      <div class="form">
         <form  method="post" action="">
            <div class="form-group ">
               <input type="text" class="form-control" placeholder="Username " id="username" name="username">
       <i class="fa fa-user"></i>
     </div>

     <div class="form-group log-status">
       <input type="password" class="form-control" placeholder="Password" id="password" name="password">
       <i class="fa fa-lock"></i></div>
       <div id="message" style="color:ff0000"></div>
            <input  class ="log-btn" style="
                       background-image: -webkit-linear-gradient(top, #2d2e2e, #6b696b);
                background-image: -moz-linear-gradient(top, #2d2e2e, #6b696b);
                background-image: -ms-linear-gradient(top, #2d2e2e, #6b696b);
                background-image: -o-linear-gradient(top, #2d2e2e, #6b696b);
                background-image: linear-gradient(to bottom, #2d2e2e, #6b696b);
                -webkit-border-radius: 8;
                -moz-border-radius: 8;
                border-radius: 8px;
                text-shadow: 1px 1px 3px #616161;
                -webkit-box-shadow: 1px 1px 3px #666666;
                -moz-box-shadow: 1px 1px 3px #666666;
                box-shadow: 1px 1px 3px #666666;
                font-family: Georgia;
                color: #ffffff;
                cursor: pointer;
                font-size: 20px;
                padding: 10px 20px 10px 20px;
                text-decoration: none;" type='submit' name ='submit' value='Log in' />
         </form>
         <div style="background: #2d2e2e;
                background-image: -webkit-linear-gradient(top, #2d2e2e, #6b696b);
                background-image: -moz-linear-gradient(top, #2d2e2e, #6b696b);
                background-image: -ms-linear-gradient(top, #2d2e2e, #6b696b);
                background-image: -o-linear-gradient(top, #2d2e2e, #6b696b);
                background-image: linear-gradient(to bottom, #2d2e2e, #6b696b);
                -webkit-border-radius: 8;
                -moz-border-radius: 8;
                border-radius: 8px;
                text-shadow: 1px 1px 3px #616161;
                -webkit-box-shadow: 1px 1px 3px #666666;
                -moz-box-shadow: 1px 1px 3px #666666;
                box-shadow: 1px 1px 3px #666666;
                font-family: Georgia;
                color: #ffffff;
                font-size: 20px;
                cursor: pointer;
                padding: 10px 20px 10px 20px;
                text-decoration: none;" id="fpass" onclick="fpassoverlay()">Forgot Password?</div>
      </div>
   </div>
   </body>
   <?php

    if($result == 'incorrect'){
        echo '<script type="text/javascript"> document.getElementById("message").innerHTML="Wrong username & password"; document.getElementById("message").style.color = "#ff0000";</script>';
    }
    if($result == 'empty'){
        echo '<script type="text/javascript"> document.getElementById("message").innerHTML="Empty username or password"; document.getElementById("message").style.color = "#ff0000";</script>';
    }
   ?>
</html>