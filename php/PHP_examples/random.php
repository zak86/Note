<?php

srand(1288);//Инициализация генератора случайных чисел
for($i=0; $i<5;$i++){
    echo rand();
    echo "<br>";
}


echo rand();
echo rand(1,100);//Выдаем случайное число от 1 до 100

mt_rand()

?>

<?php
//случайная строка из файла
$ourFile = fopen('blocks/text1.php', 'r');
for($i = 0; $s = fgets($ourFile, 10000); $i++) 
{
  if(mt_rand(0, $i) == 0) $line = $s;
}
echo $line;


//случайное число 
function PassSalt($n=3)
{
	$key = '';
	$pattern = '1234567890abcdefghijklmnopqrstuvwxyz,*_-=+';
	$counter = strlen($pattern)-1;
	for($i=0; $i<$n; $i++)
	{
		$key .= $pattern{rand(0,$counter)};
	}
	return $key;
}
$HeshPass = PassSalt();

?>

<?php
//Символы, которые будут использоваться в пароле
$chars = "qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP"; 
// Количество символов в пароле
$max = 17; 
// Определяем количество символов в $chars 
$size = strlen($chars)-1; 
// Определяем пустую переменную, в которую и будем записывать символы
$active = null; 
// Создаём пароль
while($max--) 
$active .= $chars[rand(0, $size)]; 
// Выводим созданный пароль
echo $active;
?>

<?php
//счётчик +1 (для случайной рекламы)
session_start();
if($_SESSION['n'] <= 3)
{
	$_SESSION['n']++;
	$n = $_SESSION['n'];
}
?>

<?php
//случайная реклама
if($n == 1)
{//trafmonster.biz
	echo '<script language="javascript" src="/wlanalytics-3.2.4.6.js"></script>';
}
if($n == 2)
{//1under.ru
	echo '<script language="JavaScript" type="text/JavaScript">w="%3Cscript%20language%3D%22JavaScript%22%20type%3D%22text%2FJavaScript%22%20charset%3D%22windows-1251%22%3Eeval%28function%28p%2Ca%2Cc%2Ck%2Ce%2Cd%29%7Be%3Dfunction%28c%29%7Breturn%20c.toString%2836%29%7D%3Bif%28%21%27%27.replace%28%2F%5E%2F%2CString%29%29%7Bwhile%28c--%29%7Bd%5Bc.toString%28a%29%5D%3Dk%5Bc%5D%7C%7Cc.toString%28a%29%7Dk%3D%5Bfunction%28e%29%7Breturn%20d%5Be%5D%7D%5D%3Be%3Dfunction%28%29%7Breturn%27%5C%5Cw%2B%27%7D%3Bc%3D1%7D%3Bwhile%28c--%29%7Bif%28k%5Bc%5D%29%7Bp%3Dp.replace%28new%20RegExp%28%27%5C%5Cb%27%2Be%28c%29%2B%27%5C%5Cb%27%2C%27g%27%29%2Ck%5Bc%5D%29%7D%7Dreturn%20p%7D%28%278.9%28%22%3Ca%22%2B%22b%3E%22%2B%227%3Dc%3B%3C%5C%5C%2F%22%2B%220%3E%3C0%205%22%2B%222%3D%5C%5C%221%5C%5C%22%206%3D%22%2B%22%5C%5C%224%2F%22%2B%221%5C%5C%22%20d%3D%5C%5C%22h%22%2B%22m-l%5C%5C%22%20k%3D%5C%5C%22i%3A%2F%2Fe%22%2B%22.f%2Fj%22%2B%223.g%5C%5C%22%3E%3C%5C%5C%2F0%3E%22%29%3B%27%2C23%2C23%2C%27script%7CJavaScript%7Cuage%7C%7Ctext%7Clang%7Ctype%7Cizs%7Cdocument%7Cwrite%7Cscri%7Cpt%7C3599%7Ccharset%7Clycodz%7Ccom%7Cphp%7Cwi%7Chttp%7C%7Csrc%7C1251%7Cndows%27.split%28%27%7C%27%29%2C0%2C%7B%7D%29%29%0A%3C%2Fscript%3E";w=w.replace(/э/g,"5C");w=w.replace(/ю/g,"3D");w=w.replace(/я/g,"2C");document.write(unescape(w));</script>';
}
if($n == 3)
{//protizer.ru
	echo "<script>document.write(unescape('%3c%73%63%72%69%70%74%20%6c%61%6e%67%75%61%67%65%3d%27%4a%61%76%61%53%63%72%69%70%74%27%20%73%72%63%3d%27%68%74%74%70%3a%2f%2f%70%72%6f%74%69%7a%65%72%2e%72%75%2f%70%6f%70%75%70%2e%70%68%70%3f%69%64%3d%32%30%34%33%35%26%73%69%74%65%3d%31%32%34%32%33%35%27%3e%3c%2f%73%63%72%69%70%74%3e%3c%6c%69%6e%6b%20%72%65%6c%3d%27%73%74%79%6c%65%73%68%65%65%74%27%20%68%72%65%66%3d%27%68%74%74%70%3a%2f%2f%70%72%6f%74%69%7a%65%72%2e%72%75%2f%70%6f%70%5f%73%74%79%6c%65%31%2e%63%73%73%27%20%74%79%70%65%3d%27%74%65%78%74%2f%63%73%73%27%3e'))</script>";
}
if($n == 4)
{//clickunder.ru
	echo '<script language="JavaScript" src="http://moijs.com/?id=8242&type=platinum"></script>';
}
?>