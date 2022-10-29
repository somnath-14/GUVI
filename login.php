<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    
    <link rel="stylesheet" type="text/css" href="login.css">
    <link href="https://fonts.googleapis.com/css2?">
  </head>
  <body>
    
    <div class="login">
				<form autocomplete="off" action="" method="post">
          <input type="hidden" id="action" value="login">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" id="username" value="" name="username" placeholder="Username" required="">
					<input type="password" id="password" name="pswd" placeholder="Password" required="" value="">
					<button type="button" onclick="submitData();">Login</button>
          <a href="register.php">Go To Register</a>
				</form>
			</div>
    <!-- <form autocomplete="off" action="" method="post">
      <input type="hidden" id="action" value="login">
      <label for="">Username</label>
      <input type="text" id="username" value=""> <br>
      <label for="">Password</label>
      <input type="password" id="password" value=""> <br>
      <button type="button" onclick="submitData();">Login</button>
    </form> -->
    <br>
    <!-- <a href="register.php">Go To Register</a> -->
    <?php require 'script.php'; ?>
  </body>
</html>