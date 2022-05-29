<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5.0, minimum-scale=0.56">
<style>
*{
  margin: 0;
  padding: 0;
  font-family: ariel;
}

h2{
  font-size: 1.8em;
}

h2, form{
  margin-top:20px;
  padding-left: 10px;
}

label {
  font-weight: bold;
}

input[type=text]{
  margin-left: 19px;
  margin-bottom: 10px;
}

button {
  margin-left: 72px;
  margin-bottom: 10px;
}

div{
  display: grid;
  place-items: center;
}

</style>
</head>
<body>
<h2>Login</h2>
<hr>
<div>
  <form method="POST" action="./loginhandler.php" enctype="multipart/form-data">
  <label for="uid"> userid: </label><input type="text" name="uid" id="uid"><br>
  <button name="login">Login</button>
  </form>
</div>
</body>
</html>
