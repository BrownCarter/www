<?php
try{
  $socket = "mysql:unix_socket=/data/data/com.termux/files/usr/var/run/mysqld.sock";
  $db_query = "mysql:host=127.0.0.1;charset=utf8;port=3306;dbname=test";
  $pdo = new PDO($db_query, "brown", "");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $ex){
  die("Could not establish connection") . $ex->getMessage();
}
?>
