<?php

//провер€ю существование каталога
if(is_dir("cashe"))
{
	
}

//создаю папку
mkdir("cashe");

chmod("cashe", 0777);

//создаю папку дл€ сайта
if(is_dir("$www_site")) 
{
	echo "ѕапка $www_site уже существует.<br>";
}
else{
	mkdir("$www_site");
	echo "ѕапка $www_site создана.<br>";
}

//удал€ю папку
rmdir("cashe");


//путь до каталога, им€ и расширение файла
$pathinfo = pathinfo("$file");
echo "<pre>";
var_dump($pathinfo); //массив
echo "</pre>";





?>