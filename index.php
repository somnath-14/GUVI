<?php
require 'function.php';
if(isset($_SESSION["id"])){
  $id = $_SESSION["id"];
  $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM table_user WHERE id = $id"));
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link href="https://fonts.googleapis.com/css2?">
  </head>
  <body>
    <div>
      <?php
        
      $connect = mysqli_connect ("localhost", "root", "", "login"); 
      $sql = "SELECT * FROM table_user WHERE id = $id" ;

      $result = mysqli_query($connect, $sql);

      $json_array = array();

      while($row = mysqli_fetch_assoc($result)){
        $json_array[] = $row;
      }
      // echo '<prev>';
      // print_r($json_array);
      // echo '</prev>';
      echo json_encode ($json_array); 
      ?>

<h1 style="color:azure">Welcome <?php echo $user["Username"]; ?></h1>

  <a href="logout.php" style="color:aqua">Logout</a>
</div>
</body>
</html>