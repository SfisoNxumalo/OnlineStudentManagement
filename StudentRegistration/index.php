<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="cssFooter.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="newcss.css">
        <script>
      
      function validate(form)
      {
          fail = validateUsername(form.Username.value);
          fail += validatePassword(form.Password.value);

          if(fail == "")
          {
              return true;
          }
          else
          { 
              alert(fail); 
              return false;
          }
      }
      
      function validateUsername(field)
      {
          if(field === "") return "No Username was entered.\n";
          return "";
      }
      
      function validatePassword(field)
      {
          if(field === "") return "No Password was entered.\n";
          return "";
      }
      
  </script>

    </head>
    <body>
        
        <form class="login-form" action="Login.php?" method="POST" onsubmit="validate(this)">
            <div class="Topic">
                <h1>Online Student Registration</h1>
            </div>
      <div class="title">
        <h2>Login</h2>
      </div>
        
      <div class="half">
        <div class="item">
          <label>Username</label>
          <input type="text" name="Username">
        </div>
        <div class="item">
          <label>Password</label>
          <input type="password" name="Password">
        </div>
      </div>
    
      <div class="action">
        <input type="submit" value = "LOGIN">
        <a href="LoginStudent.php" class="register-btn">Student login</a>
      </div>
 
    </form>
        <?php
        // put your code here
        ?>
    </body>
</html>