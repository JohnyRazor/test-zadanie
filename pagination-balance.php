 <?php  
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
	//берем фаил и читаем содержимое
	$json = file_get_contents('balance.json');
    //декодим
	$json = json_decode($json, true);

 $output .= "  
      <table class='simple-little-table'>  
           <tr>  
                <th>Описание</th> 
                <th>Цена</th> 
           </tr>  
 ";

	foreach($json as $jrow){
		$output .= '  
           <tr>  
                <td>'.$jrow['orderName'].'</td>
                <td>'.$jrow['orderStatus'].'</td>
           </tr>  
      '; 
	}
 $output .= '</table><br /><div align="center">';  
 $total_pages = ceil($total_records/$record_per_page);  
 for($i=1; $i<=$total_pages; $i++)  
 {  
      $output .= "<span class='pagination_link' style='cursor:pointer; padding:6px; border:1px solid #ccc;' id='".$i."'>".$i."</span>";  
 }  
 $output .= '</div><br /><br />';  
 echo $output;  
 ?> 