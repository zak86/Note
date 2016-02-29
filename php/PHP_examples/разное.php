<?php

/*
	скрипт: 		Форма обратной связи (на заказ)
	описание:		Скрипт для отправки писем администратору сайта
	сайт:			http://computerlessons.ru/php/contact_form_dmaw/
	автор: 			Дмитрий Альховик
	дата создания: 	21 января 2010 год
*/

//страница сгенерирована за
define('ST_T', microtime());

printf('<small><font size="1">Страница сгенерирована за %.5f сек.</font></small>', microtime()-ST_T);


include('config.php');
include($_SERVER['DOCUMENT_ROOT'].'config.php');

?>

<?php include('config.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'config.php'); ?>

<?php

//вывод всех ошибок, даже если их нет
ini_set('display_errors',1);
error_reporting(E_ALL);

//вставить файл, если он есть
if(file_exists('footer.html'))
{
	include ('footer.html');
}

//защита от прямого открытия
if($_SERVER['SCRIPT_NAME'] == '/tema/header.php')
{
	header('Location: /');
}

//обновить страницу
header('Refresh:3; URL=admin.php');
header('Refresh:0');
header('Location: /');


if//если
or//или
and//и
else//ещё

empty//пусто
isset//установлено

die//пcевдоним функции exit()

если if ложно, то выполняется elseif или следующий if
если все if ложны, то выполняется else

?>

<a href="javascript:history.back()">Назад</a>

<!--назад через три секунды-->
<script>setTimeout('document.location="javascript:history.back()"',3000);</script>

<button onClick="window.close()">Закрыть</button>

<a href="javascript:location.reload()">Обновить</a>

<button onClick="location.reload()" >Обновить</button>

<?php

echo "<button onClick=\"location.reload()\" >Обновить</button>";
echo "<p><button onClick=document.location.href='list_users.php' >Обновить</button></p>";

//автоматически закрываю окно
header("Refresh:3; URL=window_close.php");
// ещё так: <body onload=window.close()>

?>

<?php

//ошибки
if(!empty($ups))
{
	$ups = '<b id="u">'.$ups.'</b>';
	echo $ups;
}
//не ошибки
if(!empty($oke))
{
	$oke = '<b id="o">'.$oke.'</b>';
	echo $oke;
}

//КЕШ
echo "<html><head>
<meta http-equiv='Expires' content='Mon, 26 Jul 1997 05:00:00 GMT' /> 
<meta http-equiv='Pragma' content='no-cache' />
</head><body>";

nocache_headers();

sleep(10);

?>

<!--ТАЙМЕР-->
<script>setTimeout("имя_функции()",1000);</script>

<script>setTimeout("window.close()",3000);</script>

<!--РЕДИРЕКТ-->
<script>window.location.href="right.php" target="blank";</script>

<html>
<head>
<meta http-equiv='Refresh' content='0; URL=page.php'>
</head>
<body>

<?php
echo "<html><head><meta http-equiv='Refresh' content='0; URL=page.php'></head><body>";
exit();
?>

<!--РЕДИРЕКТ ЧЕРЕЗ...-->
<script>setTimeout('document.location="add_site.php"',3000);</script>
echo "<script>setTimeout('document.location=\"test.php\"',3000);</script>";

<!--ОБНОВИТЬ ОКНО-->
<script>document.location="page.php";</script>
<!--или так-->
<script>location.reload()</script>


<?php
//СЧЁТЧИК
session_start();
session_register("a");
$a=@$a+1;
echo $a;
?>
<form method="get" action="question-006.php">
<input value="продолжить" type="submit">
</form>


<?php
//КОНСТАНТА
define("RATE", 2850);
echo RATE; //вывод константы
?>