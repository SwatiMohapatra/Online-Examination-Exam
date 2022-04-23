<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
</head>
<body>
  <?php
  session_start() ;
  $name = $_SESSION['s_name'];
  $s_id = $_SESSION['s_id'];
  echo "<h1>WELCOME $name $s_id</h1>";
session_abort();
  ?>
  <a href="create1.php">Create New Paper</a>
</body>
</html>