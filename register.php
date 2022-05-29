<!DOCTYPE html>
<html>
<head>
<title>Register</title>
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
  margin-left: 62px;
  margin-bottom: 10px;
}

input[type=file]{
  margin-left: 20px;
  margin-bottom: 10px;
}

button {
  margin-left: 92px;
  margin-bottom: 10px;
}
</style>

</head>
<body>
<h2>Register Now</h2>
<hr>
<form method="POST" action="./register_handler.php" enctype="multipart/form-data">
<label for="uid"> uid: </label><input type="text" name="user_id" id="uid" ><br>
<label for="passport"> passport: </label><input type="file" name="passport" id="passport"><br>
<button name="register">Register</button>
</form>
</body>
</html>
