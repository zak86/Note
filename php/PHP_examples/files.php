<?php

//ФУНКЦИИ, ПРЕДОСТАВЛЯЮЩИЕ ИНФОРМАЦИЮ О ФАЙЛАХ
//страница 232

//РЕЖИМЫ ОТКРЫТИЯ ФАЙЛОВ
                     (если файла нет)
r только чтение (выводится предупреждение)
r+ чтение и запись (выводится предупреждение)
w только запись (создаётся новый файл, старый перезаписывается)
w+ чтение и запись (создаётся новый файл, старый перезаписывается)
a добавление данных в конец файла (создаётся новый файл)
a+ чтение и добавление данных в конец файла (создаётся новый файл)

if(is_file('bbb.txt'))
{
	echo 'Можете не сомневаться, bbb.txt - это файл';
}
  
if(is_dir('/tmp'))
  echo 'Действительно, /tmp - это каталог';
  
if(is_writable('db.dbf'))
  echo 'В db.dbf писать можно';
  
echo 'Изменён: '.date('d.m.Y H:i:s',filemtime($file)).'<br>';
echo 'Последнее обращение: '.date('d.m.Y H:i:s',fileatime($file)).'<br>';

chmod('/somedir/somefile', 0755);

touch()//создает пустой файл с заданным именем

//количество строк в файле
$kol_vo = count(file('test.txt'));
echo 'Количество ссылок в файле: '.$kol_vo.'<br>';

//копируем файл (что, куда)
copy('123.jpg','images/123.jpg');

//открываю файл и записываю в него
$nomer = fopen('nomer.txt', 'w+');
fwrite($nomer, 1+"$nomer");
fclose($nomer);

//читаю весь файл построчно
$file = fopen('test.txt', 'r');
while(!feof($file))
{ 
	$line = fgets($file);
	echo $line.'<br>';
}

//вставить файл, если он есть
if(file_exists('footer.html'))
{
	include ('footer.html');
}

//читаю первую строку из файла
$file = fopen('test.txt', 'r');
$line = fgets($file); 

//читаю первые 5 символов из файла
$line = fgets($file, 5); 

//файл одной строкой
$line = file_get_contents('test.txt', 1);

//вывожу первые 10 строк из файла
$oneLine = fopen('test.txt', 'r');
for($i = 1; $i <= 10; $i++)
{
$line = fgets($oneLine); //читаю первую строку
echo "$i. $line<br>";
}

//читаю нужную строку из файла
$f = file('test.txt');
$stroka = $f[1];
echo $stroka;

//удаляю файл
unlink('1.txt');

//проверяю существование файла
if(!file_exists('test.txt'))
{
	echo 'Файл test.txt не найден';
}
else{
	echo 'Файл test.txt обнаружен';
}
	
//размер файла
$filesize = filesize($file);
echo "Размер файла: $filesize байт.<br>";

//тип файла
$filetype = filetype($file);
echo "Тип файла: $filetype<br>";

//путь до каталога, имя и расширение файла
$pathinfo = pathinfo($file);
echo '<pre>';
var_dump($pathinfo); //массив
echo '</pre>';

//удаляю строку из файла по значению (вариант 1)
$file = 'list.txt'; 
$string = 'Это строка, которую надо удалить'; 

$ftmp = fopen('tmp.txt', 'w'); 
$f = fopen($file, 'r'); 
while (!feof($f)) { 
    $str = fgets($f); 
    if ($str != $string) 
        fwrite($ftmp, $str); 
} 
fclose($f); 
fclose($ftmp); 
rename ('tmp.txt', $f);

//удаляю строку из файла по значению (вариант 2)
  $string = 'удаляемая строка'; 
  $file = file('text.txt');  
  for ($i=0;$i<count($file);$i++) 
  {  
    if(trim($file[$i])==$string) unset($file[$i]); 
  } 
  print_r($file); 
  $h = fopen('text.txt',"w"); 
  fwrite($h, implode("",$file)); 
  fclose($h)  

//удаляю строку из файла по номеру строки
$line=2; # строка, которую нужно удалить 
$file=file('file.txt'); 
$open=fopen('file.txt','w'); 
for($i=0;$i<count($file);$i++) 
{ 
if(($i+1)!=$line){fwrite($open,$file[$i]);} 
} 
fclose($open); 

//записываю данные в третью строку файла
$z = '12345';
$array=file('file.txt','w');
$array[2]=$z; //записываю в третью строку массива переменную
$f=fopen('file.txt');
for ($i=0; $i&lt;count($array); $i++) 
{
fputs($f,$array[$i]);
}
fclose($f);

//удаляю из файла по одной строке
$file=file('file.txt');
unset($file[0]);
$fp=fopen('file.txt','w'); 
fputs($fp,implode("",$file)); 
fclose($fp);

?>

<?php
if(copy('Z:/home/site/www/file.txt', 'Z:/home/site/www/file2.txt'))
{
	echo 'Копирование успешно выполнено';
}
else{
	echo "Ошибка при копировании";
}
?>