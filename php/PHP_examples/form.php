<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
<form action="" method="post" enctype="multipart/form-data">

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<form action="" method="post">

<p>Логин<br>
<input id="inp" type="text" name="user" value="<?php echo $_POST['user'];?>" /></p>

<p>Пароль<br>
<input id="inp" type="password" name="pass" value="<?php echo $_POST['pass'];?>" /></p>

<p><input name="submit" type="submit" value="Войти"/></p>

<input type="hidden" name="user" value="5" />

<p>Файл <input name="userfile" type="file" size="70"></p>

<p>Имя для копий <input type="text" name="new_page" size="60"></p>

<p>Расширение для копий <select size="1" name="page_r">
<option></option>
<option>.html</option>
<option>.htm</option>
<option>.txt</option>
<option>.doc</option>
<option>.docs</option>
<option>.xls</option>
<option>.xlsx</option>
<option>.jpg</option>
<option>.jpeg</option>
<option>.gif</option>
<option>.bmp</option>
<option value="1" selected="selected">.rar</option>
<option>.zip</option>
<option>.exe</option>
<option>.pdf</option>
</select>
 или 
 
<input name="rx" value="1" type="checkbox" /> оставить без изменений</p>
<input name="rx" type="checkbox" checked="checked" /> оставить без изменений</p>

<p><input type="radio" value="3" name="answer">

<p>Количество копий <input name="col_vo" type="text" size="10"></p>

<p>Сообщение<br>
<textarea id="inp" name="message"><?php echo $row["$pass"];?></textarea></p>

<p><input type="submit" name="submit" value="Отправить" /></p>

<input type="reset" value="Очистить" />

<input type="image" name="submit" src="/images/save.gif" alt="Сохранить" />

</form>

<?php

empty() - пустой
isset() - установлено

$user = $_POST['user'];
$user = $_GET['user'];

if(isset($user))
{ 
	$user = addslashes($user);
	$user = htmlspecialchars($user); // заменяем спецсимволы на их HTML-мнемоники
	$user = stripslashes($user); //вырезаем знак обратного слеша
	$user = str_replace("/","",$user);  //вырезаем слеш
	$user = str_replace(".","",$user);   //вырезаем точки
	$user = str_replace("`","",$user);  //вырезаем обратную кавычку
}
//или
if(isset($user))
{ 
	if (preg_match("/[0-9a-z_]/i", $user)) 
	{
	//действия над именем
	} 
	else { echo "Вы не ввели имя!";  } 
}

//проверка форм
if(isset($_POST['submit']))
{
	echo "<p><b id=1>Вопрос добавлен в базу</b></p>";
}

//ошибки
if(!empty($ups))
{
	$ups = '<b id="0">'.$ups.'</b>';
	echo $ups;
}

//не ошибки
if(!empty($oke))
{
	$oke = '<b id="1">'.$oke.'</b>';
	echo $oke;
}

?>

<p>Расположение печати <select size="1" name="pos">
<option>по центру</option>
<option disabled="disabled" >внизу</option>
<option selected="selected" value="0000">вверху</option>
<option>слева</option>
<option>справа</option>
</select>
</p>