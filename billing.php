<?php
include_once("bd.php");

$resultat = mysql_query("SELECT * FROM users WHERE id='$_GET[id]'");
$array = mysql_fetch_array($resultat);
include("header.php");
include("menu.php"); ?>
<body>
 <div class="containermb mlogin">
<div id="loginmb">
<h1>Оплата услуг</h1>
 <?php  $connect = mysqli_connect("localhost", "cx60118_bd", "123456789qwer", "cx60118_bd"); 
 $query = "SELECT * FROM orders WHERE id = ".$_REQUEST['id_uslugi'];
 $result = $connect->query($query);
 $json = array();
  
 while($row = mysqli_fetch_assoc($result)) 
 {
   //берем фаил и читаем содержимое
	$json = file_get_contents('balance.json');
    //декодим
	$json = json_decode($json, true);
	//добавляем элемент
	$json[]= $row;
   
   echo "Вы оплачиваете подключение услуги: " .$row['orderName']." за ".$_REQUEST['sum']." рублей<br>\n";
 }
 
  
 if (isset($_POST['ordrPay'])){
	$ordrPay = $_POST['ordrPay'];
	
	if ($ordrPay == '') {
		exit("Оплата не прошла");
	}
	
	$up = mysql_query("UPDATE orders SET ordrPay='1' WHERE id='$_GET[id_uslugi]'");
    
	if ($up == true) {
        
		echo "<br><br>Оплата прошла успешно, услуга подключена";
	 }
   			
  	//записываем данные из json в табличку игнорируя повтор строк в бд
   foreach($json as $jrow){
                
    $btable = "INSERT IGNORE INTO balance (user_id, bOrder, price) VALUES ('".$jrow['id']."', '".$jrow['orderName']."', '".$jrow['orderStatus']."')";
                
    mysqli_query($connect, $btable);  
    }
  
      // кодируем обратно в json
	$json = json_encode($json, JSON_UNESCAPED_UNICODE);
	// Перезаписываем файл
	file_put_contents('balance.json', $json);
   }
  
  ?>
  <form method="post">
    <input type="hidden" name="id_uslugi" value="<?=$_REQUEST['id_uslugi']?>">
    <input type="hidden" name="sum" value="<?=$_REQUEST['sum']?>">
    <input type="hidden" name="user" value="<?=$_SESSION['id_user']?>">
    <input type="hidden" name="money" value="<?=$money?>">
    <input type="hidden" name="opl" value="y">
    <input type="hidden" name="ordrPay" value="1">
	<input type="submit" value="Оплатить">
  </form>
  <?php if ($_REQUEST['opl']=='y'): ?>
	  <?
	  //Вставляем данные, подставляя их в запрос
	  $sql = mysql_query("INSERT INTO `rashod` (`sum`, `user`)
                        VALUES ('".$_REQUEST['sum']."','".$_REQUEST['orderName']."')");
	  //Если вставка прошла успешно
	  if ($sql) {
	  } else {
	  }
	?>


<?php  endif;?>
 </div>
  </div>
</body>
</html>