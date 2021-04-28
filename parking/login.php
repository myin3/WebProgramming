<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">
    .form-container {
      position: absolute;
      top: 20%;
      background: white;
      width: 25%;
      border: 1px solid lightgrey;
      padding: 15px; 
      color: black;
    }
    .head {
      text-align: center;
    }
    input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    a{
      color: blue;
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h1 class="head">Login</h1>
    <br>
    <form action="login-submit.php" method="post" name="Login_Form">
      <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
          Username:<br>
          <input name="Username" type="text" class="Input"><br>
          Password:<br>
          <input name="Password" type="password" class="Input"><br>
          <td>&nbsp;</td>
          <input name="Submit" type="submit" value="Login" class="button">
      </table>
    </form>
    <center> Don't have an account? Create an account <a href="signup.php">here</a></center>
  </div>
  <form action="user.php" method="post">
    <input type="hidden" name="username" value=<?php $Username ?>/>
  </form>
</body>
</html>