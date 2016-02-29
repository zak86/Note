<?php

//СПЕЦИАЛЬНЫЕ СИМВОЛЫ 
//(сравнение с шаблоном)
//страница 117

empty()//пустой
isset()//установлено

//id
if(!empty($url_id[2]))
{
	$id = $url_id[2];
	
	if(!ereg("^[0-9]+$", $id)) 
	{
		header('Location: /404');
		exit();
	}
}

//проверка форм
if(isset($_POST['submit']))
{
	echo '<p><b id="o">Кнопка нажата</b></p>';
}

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

//фио
if(!empty($_POST['fio']))
{
	$fio = trim($_POST['fio']);
	
	if(!ereg("^[А-Яа-я' ]+$", $fio)) 
	{
		$ups .= 'Вводите имя отчество русскими буквами<br>';
	}
	elseif(strlen($fio) < 4) 
	{
		$ups .= 'Имя отчество короче 4-х символов ('.strlen($fio).')<br>';
	}
	elseif(strlen($fio) > 255) 
	{
		$ups .= 'Имя отчество длинее 255-ти символов ('.strlen($fio).')<br>';
	}
}
else{
	$ups .= 'Введите имя отчество<br>';
}

//имя
if(!empty($_POST['name']))
{
	$name = trim($_POST['name']);
	
	if(!ereg("^[А-Яа-я]+$", $name)) 
	{
		$ups .= 'Вводите имя русскими буквами<br>';
	}
	elseif(strlen($name) < 2) 
	{
		$ups .= 'Имя короче 2-х символов ('.strlen($name).')<br>';
	}
	elseif(strlen($name) > 255) 
	{
		$ups .= 'Имя длинее 255-ти символов ('.strlen($name).')<br>';
	}
}
else{
	$ups .= 'Введите имя<br>';
}

//логин
if(!empty($_POST['login']))
{
	$login = trim($_POST['login']);
	
	if(!ereg("^[A-za-z0-9]+$", $login)) 
	{
		$ups .= 'Вводите логин английскими буквами или цифрами<br>';
	}
	elseif(strlen($login) < 2) 
	{
		$ups .= 'Логин короче 2-х символов ('.strlen($login).')<br>';
	}
	elseif(strlen($login) > 255) 
	{
		$ups .= 'Логин длинее 255-ти символов ('.strlen($login).')<br>';
	}
}
else{
	$ups .= 'Введите логин<br>';
}
	

//емаил
if(!empty($_POST['email']))
{
	$email = strtolower(trim($_POST['email']));
	
	if(!preg_match("/^([a-z,0-9])+@([a-z,0-9])+(.([a-z,0-9])+)+$/", $email)) 
	{
		$ups .= 'Неверный формат e-mail<br>';
	}
	elseif(strlen($email) < 7) 
	{
		$ups .= 'E-mail короче 7-ми символов ('.strlen($email).')<br>';
	}
	elseif(strlen($email) > 50) 
	{
		$ups .= 'E-mail длинее 50-ти символов ('.strlen($email).')<br>';
	}
}
else{
	$ups .= 'Введите e-mail<br>';
}
	
//телефон
if(!empty($_POST['tel']))
{
	$tel = trim($_POST['tel']);
	
	if(!ereg("^[0-9' + -]+$", $tel)) 
	{
		$ups .= 'Вводите номер домашнего телефона только цифрами<br>';
	}
	elseif(strlen($tel) < 7) 
	{
		$ups .= 'Номер домашнего телефона короче 7-ми символов ('.strlen($tel).')<br>';
	}
	elseif(strlen($tel) > 15) 
	{
		$ups .= 'Номер домашнего телефона длинее 15-ти символов ('.strlen($tel).')<br>';
	}
}

//мобильный
if(!empty($_POST['telmob']))
{
	$telmob = trim($_POST['telmob']);
	
	if(!ereg("^[0-9' + -]+$", $telmob)) 
	{
		$ups .= 'Вводите номер мобильного телефона только цифрами<br>';
	}
	elseif(strlen($telmob) < 7) 
	{
		$ups .= 'Номер мобильного телефона короче 7-ми символов ('.strlen($telmob).')<br>';
	}
	elseif(strlen($telmob) > 17) 
	{
		$ups .= 'Номер мобильного телефона длинее 17-ти символов ('.strlen($telmob).')<br>';
	}
}

//пароль
if(!empty($_POST['pass']))
{
	$pass = trim($_POST['pass']);
	$pass2 = trim($_POST['pass2']);
	
	if(!ereg("^[A-Za-z0-9'-]+$", $pass)) 
	{
		$ups .= 'Вводите пароль английскими буквами и/или цифрами<br>';
	}
	elseif(strlen($pass) < 6) 
	{
		$ups .= 'Пароль короче 6-ти символов<br>';
	}
	elseif(strlen($pass) > 17) 
	{
		$ups .= 'Пароль длинее 17-ти символов<br>';
	}
}
else{
	$ups .= 'Введите пароль<br>';
}

//пароль 2
if($_POST['pass'] != $_POST['pass2'])
{
	$ups .= 'Пароли не совпадают<br>';
	$pass = '';
	$pass2 = '';
}

//антиспам
if(empty($_POST['robot']))
{
	$ups .= 'Поставьте птичку, что Вы не робот<br>';
}
else{
	$robot = 'checked="checked"';
}

//для проверки сайта
elseif(!preg_match("/^[a-z,0-9]+\.[a-z,0-9]+$/", $site))
elseif(!ereg("^[a-z,0-9.' -]+$", $site))

//ОПЕРАЦИИ СРАВНЕНИЯ
== равнозначны ли значения двух переменных?
=== одинаковы ли как значения, так и типы двух переменных?
> больше ли первое значение, чем второе?
>= верно ли, что первое значение не меньше второго?
< меньше ли первое значение, чем второе?
<= верно ли,  что первое значение не больше второго?
!=,<> не равны ли значения двух переменных?
!== не одинаковы ли значения или типы данных двух переменных?

?>