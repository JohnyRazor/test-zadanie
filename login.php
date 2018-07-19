<?php
include_once("bd.php");
?>
<?php include("header.php"); ?>

<body>

<?php
if (isset($_POST['email'])) {
	$email = $_POST['email']; 
	if ($email == '') {
		unset($email);
		exit ("Введите пожалуйста логин!");
	} 
}
if (isset($_POST['password'])) {
	$password=$_POST['password']; 
	if ($password =='') {
		unset($password);
		exit ("Введите пароль");
	}
}

$email= stripslashes($email);
$email = htmlspecialchars($email);

$password = stripslashes($password);
$password = htmlspecialchars($password);


$email = trim($email);
$password = trim($password);

$password = md5($password);//шифруем пароль

$user = mysql_query("SELECT id FROM users WHERE email='$email' AND password='$password'");
$id_user = mysql_fetch_array($user);
if (empty($id_user['id'])){
	exit ("Извините, введённый вами логин или пароль неверный.");
}
else {

   
    $_SESSION['password']=$password; 
	$_SESSION['email']=$email; 
    $_SESSION['id']=$id_user['id'];
		  
}
echo "<meta http-equiv='Refresh' content='0; URL=index.php'>";
?>
</body>
</html>
