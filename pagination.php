 <?php 
include_once("bd.php");

$resultat = mysql_query("SELECT * FROM users WHERE id='$_GET[id]'");
$array = mysql_fetch_array($resultat);
 //pagination.php
 include("header.php");
 $connect = mysqli_connect("localhost", "cx60118_bd", "123456789qwer", "cx60118_bd");
 $record_per_page = 5;  
 $page = '';  
 $output = '';
 if(isset($_POST["page"]))  
 {  
      $page = $_POST["page"];  
 }  
 else  
 {  
      $page = 1;  
 }
 $start_from = ($page - 1)*$record_per_page;  
 $query = "SELECT * FROM orders ORDER BY id DESC LIMIT $start_from, $record_per_page";  
 $result = mysqli_query($connect, $query);
 $output .= "  
      <table class='simple-little-table'>  
           <tr>  
                <th>Описание услуги</th>  
                <th>Цена услуги</th> 
                <th>Статус оплаты</th> 
           </tr>  
 ";
 while($row = mysqli_fetch_array($result))  
 {
           if($row['ordrPay']==1){$status="Оплачено";}else{$status= "<a href='billing.php?id=$id_user &id_uslugi=$row[id] &sum=$row[orderStatus]'>Не оплачено</a><br>";}
      $output .= '  
           <tr>  
                <td>'.$row["orderName"].'</td>  
                <td>'.$row["orderStatus"].'</td>
                <td>'.$status.'</td>
           </tr>  
      ';  
 }  
 $output .= '</table><br /><div align="center">';  
 $page_query = "SELECT * FROM orders ORDER BY id DESC";  
 $page_result = mysqli_query($connect, $page_query);  
 $total_records = mysqli_num_rows($page_result);  
 $total_pages = ceil($total_records/$record_per_page);  
 for($i=1; $i<=$total_pages; $i++)  
 {  
      $output .= "<span class='pagination_link' style='cursor:pointer; padding:6px; border:1px solid #ccc;' id='".$i."'>".$i."</span>";  
 }  
 $output .= '</div><br /><br />';  
 echo $output;  
 ?> 