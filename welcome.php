<?php 
  session_start();

  $username = "";

  if(isset($_SESSION['username'])) 
  {
    $username = $_SESSION['username'];
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Welcome</title>
</head>

 <body style="background-color:#55efc4;">
<body>

  <h1>WELCOME TO THE PAGE <?php echo $username; ?></h1>

</body>
</html>