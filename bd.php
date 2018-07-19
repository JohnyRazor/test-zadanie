<?php
session_start();

mysql_connect ("localhost","cx60118_bd","123456789qwer");
mysql_select_db ("cx60118_bd");
mysql_query("SET NAMES utf8");

$email = $_SESSION['email'];
$password = $_SESSION['password'];
$id_user = $_SESSION['id'];
?>