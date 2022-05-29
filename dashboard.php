<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5.0, minimum-scale=0.36">
<style>
img{
  border-radius: 50px;
}
</style>
</head>
<body>
<?php
require_once("./connection.php");
if(isset($_SESSION['user_name'])){
  $username = $_SESSION['user_name'];
  echo "<h2>Hello My  <i>{$username}</i> welcome to the Dashboard</h2><br>";
  $query = "SELECT dp FROM profile WHERE user_id  = '${username}'";
  $stmt = $pdo->query($query);
  $profile = base64_encode($stmt->fetch()['dp']);
  echo "<img src='data:image/png;base64,${profile}' width='120px'/>";
}else header("Location: ./login.php");
?>
</body>
</html>
