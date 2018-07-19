<?php
include_once("bd.php");
include("header.php");
include("menu.php"); ?>
<body>
<div class="containermb mlogin">
<div id="login-mb">
<div align="center"><h1>Настройки пользователя</h1></div>

<table width="700" border="0">
  <tr>
    <td> Изменить аватар </td>
    <td>
    	<form action='save_edit.php' method='post' enctype='multipart/form-data'>
		<input type="file" name="fupload" size='8'>
		<input type='submit' name='submit' value='Изменить'>
		</form>
    </td>
  </tr>
  <tr>
    <td> Изменить пароль </td>
    <td>
    	<form action='save_edit.php' method='post'>
		<input name='password' type='text'>
		<input type='submit' name='submit' value='Изменить'>
		</form>
    </td>
  </tr>
  <tr>
    <td> Изменить имя </td>
    <td>
    	<form action='save_edit.php' method='post'>
		<input name='name' type='text'>
		<input type='submit' name='submit' value='Изменить'>
		</form>
    </td>
  </tr>
  <tr>
    <td> Изменить фамилию </td>
    <td>
    	<form action='save_edit.php' method='post'>
        <input name='lastname' type='text'>
        <input type='submit' name='submit' value='Изменить'>
        </form>
    </td>
  </tr>
  <tr>
    <td> Изменить страну </td>
    <td>
    	<form action="save_edit.php" method="post">
        <input name="country" type="text">
        <input type="submit" name="submit" value="Изменить">
        </form>    
    </td>
  </tr>
  <tr>
    <td> Изменить город </td>
    <td>
    	<form action='save_edit.php' method='post'>
		<input name='city' type='text'>
        <input type='submit' name='submit' value='Изменить'>
        </form>
    </td>
  </tr>
  <tr>
    <td> Изменить дату рождения </td>
    <td>
    <form action='save_edit.php' method='post'>
    	<select name="birthdate_day" size="1" class="day" id="day">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>
	</select>	

	<select name="birthdate_month" size="1" class="month" id="month">
		<option value="1">январь</option>
		<option value="2">февраль</option>
		<option value="3">март</option>
		<option value="4">апрель</option>
		<option value="5">май</option>
		<option value="6">июнь</option>
		<option value="7">июль</option>
		<option value="8">август</option>
		<option value="9">сентябрь</option>
		<option value="10">октябрь</option>
		<option value="11">Ноябрь</option>
		<option value="12">Декабрь</option>
	</select>			

	<select name="birthdate_year" size="1" class="year" id="year">
		<option value="1986">1986</option>
		<option value="1987">1987</option>
		<option value="1988">1988</option>
		<option value="1989">1989</option>
		<option value="1990">1990</option>
		<option value="1991">1991</option>
		<option value="1992">1992</option>
		<option value="1993">1993</option>
		<option value="1994">1994</option>
		<option value="1995">1995</option>
		<option value="1996">1996</option>
		<option value="1997">1997</option>
		<option value="1998">1998</option>
		<option value="1999">1999</option>
		<option value="2000">2000</option>
		<option value="2001">2001</option>
		<option value="2002">2002</option>
		<option value="2003">2003</option>
		<option value="2004">2004</option>
		<option value="2005">2005</option>
		<option value="2006">2006</option>
		<option value="2007">2007</option>
		<option value="2008">2008</option>
		<option value="2009">2009</option>
		<option value="2010">2010</option>
	</select>
	
	<input type='submit' name='submit' value='Изменить'>
	</form>
    </td>
  </tr>
  <tr>
    <td> Изменить пол </td>
    <td>
    <form action='save_edit.php' method='post'>
    	<select name="sex" size="1" id="sex">
		<option value="Мужской">Мужской</option>
		<option value="Женский">Женский</option>
		</select>
		<input type='submit' name='submit' value='Изменить'>
       </form>
    </td>
  </tr>
</table>
  <?php echo "<br><br><a href='profile.php?id=$id_user'>Назад</a><br>"; ?>
  </div>
  </div>
</body>
</html>