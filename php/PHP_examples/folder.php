<?php

//�������� ������������� ��������
if(is_dir("cashe"))
{
	
}

//������ �����
mkdir("cashe");

chmod("cashe", 0777);

//������ ����� ��� �����
if(is_dir("$www_site")) 
{
	echo "����� $www_site ��� ����������.<br>";
}
else{
	mkdir("$www_site");
	echo "����� $www_site �������.<br>";
}

//������ �����
rmdir("cashe");


//���� �� ��������, ��� � ���������� �����
$pathinfo = pathinfo("$file");
echo "<pre>";
var_dump($pathinfo); //������
echo "</pre>";





?>