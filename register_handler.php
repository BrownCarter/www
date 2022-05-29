<?php
require_once("connection.php");
if(isset($_POST['register'])){
  $uid="";
  if(!empty($_POST['user_id'])){
    $uid = $_POST['user_id'];
    $dp  = $_FILES['passport']['tmp_name'];
    $blob = addslashes(file_get_contents($dp));
    $query = "INSERT INTO profile(user_id, dp) VALUES('{$uid}', '${blob}')";
    $query2 = "SELECT user_id from profile";
    $stmt = $pdo->query($query2); 
    $check_db = False;
    foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $value){
      if($value['user_id'] == $uid ){
        $check_db = True;
      }
    }
    if(!$check_db){
      if($pdo->exec($query)){
        header("Location: login.php");
        echo "You can login Now";
      };
    }else {
      echo "User already Exist";
    }
  }
}
