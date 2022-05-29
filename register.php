<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<meta name="viewport" content="width=device-width, initial-scale=0.56, maximum-scale=5.0, minimum-scale=0.56">
</head>
<body>
<h2>Register Now</h2>
<hr>
<form method="POST" action="./register_handler.php" enctype="multipart/form-data">
<label for="uid"> uid: </label><input type="text" name="user_id" id="uid" ><br>
<p></p>
<label for="passport"> passport: </label><input type="file" name="passport" id="passport"><button name="register">Register</button>
</form>
</body>
</html>
