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

    <style>
            .demoInputBox {
                padding: 7px;
                border: #F0F0F0 1px solid;
                border-radius: 4px;
            }

            #password-strength-status {
                width: 50%;
                height: 100%;
                color: black;
                font-size: 13px;
                border-radius: 3px;
                margin-top: 1px;
                margin-left: 85px;
            }

            .medium-password {
                color: #b7d60a;
                background-color: #b7d60a; 
                border: #BBB418 1px solid;
            }

            .weak-password {
                background-color: #ce1d14;
                border: #AA4502 1px solid;
            }

            .strong-password {
                background-color: #12CC1A;
                border: #0FA015 1px solid;
            }
        </style>

  </head>
  
  <body>
    <div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
    

			<div class="signup">
				<form autocomplete="off" action="" method="post">
          <input type="hidden" id="action" value="register">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="txt" placeholder="Name" required="" id="name" value="">
					<input type="text" name="username" placeholder="Username" required id="username" value="">
					
          
          <div name="frmCheckPassword" id="frmCheckPassword">
      
          <input type="password" name="password" placeholder="Password" required id="password" class="demoInputBox" onKeyUp="checkPasswordStrength();" value="">
          <div id="password-strength-status"></div>
					<button type="button" onclick="submitData();">Sign up</button>
          <p><a href="login.php" style="color:aqua">Click here to Login</a></p>
        </form>
			</div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ jquery-validate/1.19.3/jquery.validate.min.js"></script>
      <script type = "text/javascript" src="youtube GUVI/custom.js"></script>
      <script>
        function checkPasswordStrength() {
            var number = /([0-9])/;
            var alphabets = /([a-zA-Z])/;
            var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
            if ($('#password').val().length < 6) {
                $('#password-strength-status').removeClass();
                $('#password-strength-status').addClass('weak-password');
                $('#password-strength-status').html("Weak (should be atleast 6 characters.)");
            } else {
                if ($('#password').val().match(number) && $('#password').val().match(alphabets) && $('#password').val().match(special_characters)) {
                    $('#password-strength-status').removeClass();
                    $('#password-strength-status').addClass('strong-password');
                    $('#password-strength-status').html("Strong");
                } else {
                    $('#password-strength-status').removeClass();
                    $('#password-strength-status').addClass('medium-password');
                    $('#password-strength-status').html("Medium (should include alphabets, numbers and special characters.)");
                }
            }
        }
    </script>

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