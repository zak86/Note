<?php

mail("mail@mail.com", "���� ������", $message,
 "From: webmaster@$SERVER_NAME\r\n"
."Reply-To: webmaster@$SERVER_NAME\r\n"
."X-Mailer: PHP/" . phpversion());

$ip = $_SERVER['SERVER_ADDR'];

$text = '����� ������';
$sub = '���� ������';
$name = '��� �����������';
$email = '����� �����������';
$cms_email = '����� ������ �����';

if(empty($ups))
{
	$text = str_replace("\n",'<br>',$text);//������
	
	$mes = "
	==================================================<br>
	������ ������ ���������� � ����� <a href=http://".$_SERVER['HTTP_HOST'].">".$_SERVER['HTTP_HOST']."</a><br>
	==================================================<br><br>
	�����: $name<br><br>
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
		$oke .= '������ ����������<br>';
	}
	else{
		$ups .= '���������� ������! ������ �� ����������, �������� �� '.$cms_email.'<br>';
	}
}
?>