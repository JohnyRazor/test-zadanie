<?php include_once("bd.php"); ?>	
<?php include("header.php"); ?>
<body>
<div class="container mlogin">
<div id="login">
<?php
if(empty($email) and empty($password)){
print <<<HERE
<table>
<h1>Авторизация</h1>
<br>
<br>
 
      <form action="login.php" method="POST">
      <tr>
      <td>E-mail:</td>
      <td><input type="text" name="email" ></td>
      </tr>
	  
      <tr>
      <td>Пароль:</td>
      <td><input type="password" name="password" ></td>
      </tr>
	  
	  <tr>
      <td colspan="2"><input type="submit" value="OK" name="submit" ></td>
      </tr>
      </form>
      </table>
<a href="registration.php">Регистрация</a>
HERE;
}
else{
//echo "Привет, <strong>".$email."</strong> | <a href='exit.php'>Выход</a><br>";
echo "<meta http-equiv='Refresh' content='0; URL=profile.php?id=$id_user'>";
}
?>
   </div>
  </div>
</body>
</html>