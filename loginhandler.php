<?php
require_once("connection.php");
if(isset($_POST['login'])){
  if(!empty($_POST['uid'])){
    $uid = $_POST['uid'];
    $query = "SELECT * FROM profile WHERE user_id = '${uid}'";
    $stmt = $pdo->query($query);
    $user_name = $stmt->fetch()['user_id'];
    print_r($stmt->fetch()['user_id']);
    if(!empty($user_name)){
      if($user_name == $uid){
        $blob = $stmt->fetch()['dp'];
        $_SESSION['user_name'] = $user_name;
        header("Location: dashboard.php");
      }
    }else echo "User name not correct";
  }
}
