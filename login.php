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


  <div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
    

    <div class="signup">
				<form autocomplete="off" action="" method="post">
          <input type="hidden" id="action" value="login">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" id="username" value="" name="username" placeholder="Username" required="">
					<input type="password" id="password" name="pswd" placeholder="Password" required="" value="">
					<button type="button" onclick="submitData();">Login</button>
          <p><a href="register.php" style="color:aqua">Click here to Register</a></p>
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