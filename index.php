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
  </head>
  <body>

<?php

$connect = mysqli_connect ("localhost", "root", "", "login"); 
$sql = "SELECT * FROM table_user WHERE id = $id";

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
<h1>Welcome <?php echo $user["Name"]; ?></h1>
  <a href="logout.php">Logout</a>
</body>
</html>