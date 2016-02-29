<?php

//БАЗЫ ДАННЫХ

$db_host = 'localhost';
$db_base = 'база_данных';
$db_user = 'имя_пользователя';
$db_pass = 'пароль';

$db = mysql_connect($db_host, $db_user, $db_pass) or die ('<b id="u"><b>Ошибка! Сервер не отвечает.</b></b>');
$select_db = mysql_select_db($db_base, $db) or die ('<b id="u"><b>Ошибка! База данных не отвечает.</b></b>');

echo 'Соединение с БД установлено!<br>';

mysql_close($db);

mysql_set_charset('cp1251',$db);//кодировка бд

//заменить кодировку
$stroka = iconv('UTF-8', 'WINDOWS-1251', $win_stroka);//в первых кавычках исходная кодировка, во вторых — целевая, потом переменная с кодируемым текстом.
?>

<?php
//выбрать из таблицы
$r = mysql_query("SELECT name, email FROM users WHERE name='$name'", $db) or die ($err);
$rn++;
$row = mysql_fetch_array($r);

echo $row['name'];

while($row = mysql_fetch_array($r))
{
	echo '<p>'.$row['name'].'</p>';
}

//посчитать количество полей
$rows = mysql_num_rows($r);

//посчитать количество полей
$r = mysql_query("SELECT COUNT(*) FROM users", $db) or die ($err);
$row = mysql_fetch_array($r);
echo $row[0];

//дополнительные параметры запросов
 ORDER BY id //сортировать по id
 LIMIT 1 //сколько вывести результатов
 DESC //сортировать в обратном порядке
 ORDER BY RAND() //случайный выбор - НЕ ИСПОЛЬЗОВАТЬ - НАГРУЗКА НА СЕРВЕР!!!
?>

<?php
//записать данные в таблицу
$i = mysql_query("INSERT INTO users (name, login) VALUES ('Дима', 'Dima')", $db);
$rn++;

if($i == true)
{
	$oke .= 'Данные записаны<br>';
}
else{
	$ups .= 'Ошибка, данные не записаны<br>';
	exit('<b id=0>Ошибка, данные не записаны</b><br>');
}
?>

<?php
//обновить данные в таблице
$u = mysql_query("UPDATE users SET name='$name', login='$login' WHERE id='$id'", $db);
$rn++;

if($u == true)
{
	$oke .= 'Данные обновлены<br>';
}
else{
	$ups .= 'Ошибка, данные не обновлены<br>';
}
?>

<?php
//удалить строку из таблицы
$d = mysql_query("DELETE FROM users WHERE id='$id'");
$rn++;

if($d == true)
{
	$oke .= 'Пользователь удалён<br>';
}
else{
	$ups .= 'Пользователь не удалён<br>';
}
?>

<?php
//поиск в таблице
$r = mysql_query("SELECT * FROM tovar WHERE cat='$cat' AND MATCH(text) AGAINST('$word')", $db) or die ($err);
$rn++;

//выбрать вчерашние комментарии
$r = mysql_query("SELECT comment, DATE_SUB(CURDATE(), INTERVAL 1 DAY) FROM comments", $db) or die ($err);

//вывод ошибок
$u = mysql_query("UPDATE users SET name='$name' WHERE id='$id'", $db) or die(mysql_error());

//создать бд
$sql = 'CREATE DATABASE `new_db`';

		mysql_query('CREATE TABLE `konkurs` ('
        . ' `id` INT(10) NOT NULL AUTO_INCREMENT, '
        . ' `name` VARCHAR(21) NOT NULL, '
        . ' `login` VARCHAR(21) NOT NULL, '
        . ' `email` VARCHAR(41) NOT NULL, '
        . ' PRIMARY KEY (`id`)'
        . ' )';

//удалить таблицу из бд
$sql = 'DROP TABLE `users`';

//уничтожить всю бд
$sql = 'CREATE DATABASE `new_db`';
?>

<?php
//очистить всю таблицу
if(!empty($submit))
{
	$c = mysql_query("SELECT * TRUNCATE users", $db) or die ($err);
	if($c == true)
	{
		$oke .= 'Таблица users очищена';
	}
	else{
		$ups .= 'Ошибка, таблица users не очищена';
	}
}
?>
<form action="" method="post">
<p><input type="submit" name="submit" value="Очистить таблицу" /></p>
</form>