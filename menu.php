<?php
include_once("bd.php");

$resultat = mysql_query("SELECT * FROM users WHERE id='$_GET[id]'");
$array = mysql_fetch_array($resultat);
$resul = mysql_query("SELECT * FROM rashod");
$array2 = mysql_fetch_array($resul);
?>
<!DOCTYPE html>
	<html lang="en">
<body>
<center>
<table1>
  <tr1>
    <th1><?php echo "<a href='profile.php?id=$id_user'>Мой профиль</a>"; ?></th1>
    <th1><?php echo "<a href='orders.php?id=$id_user'>Мои заказы</a>"; ?></th1>
    <th1><?php echo "<a href='history.php?id=$id_user'>История баланса</a>"; ?></th1>
    <th1><?php echo "<a href='exit.php'>Выход</a>"; ?></th1>
  </tr1>
 </table1>
</center>
<center><br>
<!--	<pre>--><?//=print_r($array2, TRUE)?><!--</pre>-->
  <?$summa[]=$array2['sum'];$sumsumma=array_sum($summa);if(!($sumsumma)){$sumsumma=0;}?>
  <?$vivod=$array['money']-$sumsumma?>
  <?php echo "<strong>Ваш баланс: ".$vivod."</strong><br><br>"; ?></center>
</body>
      
      