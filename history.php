<?php
 include("header.php");
 include("menu.php");
 ?> 
<body>
<div class="containermb mlogin">
<div id="login-mb">
<h1>История баланса</h1> 
<div class="table-responsive" id="pagination_data">
</div>
 <script>  
 $(document).ready(function(){  
      load_data();  
      function load_data(page)  
      {  
           $.ajax({
             	url:"pagination-balance.php",
                method:"POST",  
           		data:{page:page}, 
           		success: function (data) {
             	$('#pagination_data').html(data);
                }  
           })  
      }  
      $(document).on('click', '.pagination_link', function(){  
           var page = $(this).attr("id");  
           load_data(page);  
      });  
 });  
 </script>