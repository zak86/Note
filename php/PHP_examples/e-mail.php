<?php

mail("mail@mail.com", "тема письма", $message,
 "From: webmaster@$SERVER_NAME\r\n"
."Reply-To: webmaster@$SERVER_NAME\r\n"
."X-Mailer: PHP/" . phpversion());

$ip = $_SERVER['SERVER_ADDR'];

$text = 'текст письма';
$sub = 'тема письма';
$name = 'имя отправителя';
$email = 'емаил отправителя';
$cms_email = 'емаил админа сайта';

if(empty($ups))
{
	$text = str_replace("\n",'<br>',$text);//замена
	
	$mes = "
	==================================================<br>
	Данное письмо отправлено с сайта <a href=http://".$_SERVER['HTTP_HOST'].">".$_SERVER['HTTP_HOST']."</a><br>
	==================================================<br><br>
	Пишет: $name<br><br>
	$text<br><br>";
	
	$sub = '=?utf-8?B?'.base64_encode($sub).'?=';
	
	$un = strtoupper(uniqid(time()));
	
	$headers  = "From:$email<$email>\n";
	$headers .= "Subject:$sub\n";
	$headers .= "X-Mailer:PHPMail Tool\n";
	$headers .= "Reply-To:$email\n";
	$headers .= "Mime-Version:1.0\n";
	$headers .= "Content-Type:multipart/mixed;";
	$headers .= "boundary=\"----------".$un."\"\n\n";
	$headers .= "------------".$un."\nContent-Type:text/html; charset=\"utf-8\"\n";
	$headers .= "Content-Transfer-Encoding:quoted-printable\n\n$mes\n\n";

	//$verify = mail($cms_email, $sub, '', $headers); 
		
	if($verify == true)
	{
		$oke .= 'Письмо отправлено<br>';
	}
	else{
		$ups .= 'Глобальная ошибка! Письмо не отправлено, напишите на '.$cms_email.'<br>';
	}
}
?>