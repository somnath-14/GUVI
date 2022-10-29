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
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link href="https://fonts.googleapis.com/css2?">
  </head>
  
  <body>
    <div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
    

			<div class="signup">
				<form autocomplete="off" name ="formvalidation" id ="formvalidation"action="" method="post">
          <input type="hidden" id="action" value="register">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="txt" placeholder="Name" required="" id="name" value="">
					<input type="text" name="username" placeholder="User name" required id="username" value="">
					<input type="password" name="pswd" placeholder="Password" required id="password" value="">
					<button type="button" onclick="submitData();">Sign up</button>
          <p><a href="login.php"> Go To Login</a></p>
        </form>
			</div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ jquery-validate/1.19.3/jquery.validate.min.js"></script>
      <script type = "text/javascript" src="youtube GUVI/custom.js"></script>

			<!-- <div class="login">
				<form autocomplete="off" action="" method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button type="button" onclick="submitData();">Login</button>
				</form>
			</div> -->
	</div>

    <!-- <form autocomplete="off" action="" method="post">
      <input type="hidden" id="action" value="register">
      <label for="">Name</label>
      <input type="text" id="name" value=""> <br>
      <label for="">Username</label>
      <input type="text" id="username" value=""> <br>
      <label for="">Password</label>
      <input type="password" id="password" value=""> <br>
      <button type="button" onclick="submitData();">Register</button>
    </form> -->
    <br>
    <!-- <a href="login.php">Go To Login</a> -->
    <?php require 'script.php'; ?>
  </body>
</html>