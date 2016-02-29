<?php

//�������, ��������������� ���������� � ������
//�������� 232

//������ �������� ������
                     (���� ����� ���)
r ������ ������ (��������� ��������������)
r+ ������ � ������ (��������� ��������������)
w ������ ������ (�������� ����� ����, ������ ����������������)
w+ ������ � ������ (�������� ����� ����, ������ ����������������)
a ���������� ������ � ����� ����� (�������� ����� ����)
a+ ������ � ���������� ������ � ����� ����� (�������� ����� ����)

if(is_file('bbb.txt'))
{
	echo '������ �� �����������, bbb.txt - ��� ����';
}
  
if(is_dir('/tmp'))
  echo '�������������, /tmp - ��� �������';
  
if(is_writable('db.dbf'))
  echo '� db.dbf ������ �����';
  
echo '������: '.date('d.m.Y H:i:s',filemtime($file)).'<br>';
echo '��������� ���������: '.date('d.m.Y H:i:s',fileatime($file)).'<br>';

chmod('/somedir/somefile', 0755);

touch()//������� ������ ���� � �������� ������

//���������� ����� � �����
$kol_vo = count(file('test.txt'));
echo '���������� ������ � �����: '.$kol_vo.'<br>';

//�������� ���� (���, ����)
copy('123.jpg','images/123.jpg');

//�������� ���� � ��������� � ����
$nomer = fopen('nomer.txt', 'w+');
fwrite($nomer, 1+"$nomer");
fclose($nomer);

//����� ���� ���� ���������
$file = fopen('test.txt', 'r');
while(!feof($file))
{ 
	$line = fgets($file);
	echo $line.'<br>';
}

//�������� ����, ���� �� ����
if(file_exists('footer.html'))
{
	include ('footer.html');
}

//����� ������ ������ �� �����
$file = fopen('test.txt', 'r');
$line = fgets($file); 

//����� ������ 5 �������� �� �����
$line = fgets($file, 5); 

//���� ����� �������
$line = file_get_contents('test.txt', 1);

//������ ������ 10 ����� �� �����
$oneLine = fopen('test.txt', 'r');
for($i = 1; $i <= 10; $i++)
{
$line = fgets($oneLine); //����� ������ ������
echo "$i. $line<br>";
}

//����� ������ ������ �� �����
$f = file('test.txt');
$stroka = $f[1];
echo $stroka;

//������ ����
unlink('1.txt');

//�������� ������������� �����
if(!file_exists('test.txt'))
{
	echo '���� test.txt �� ������';
}
else{
	echo '���� test.txt ���������';
}
	
//������ �����
$filesize = filesize($file);
echo "������ �����: $filesize ����.<br>";

//��� �����
$filetype = filetype($file);
echo "��� �����: $filetype<br>";

//���� �� ��������, ��� � ���������� �����
$pathinfo = pathinfo($file);
echo '<pre>';
var_dump($pathinfo); //������
echo '</pre>';

//������ ������ �� ����� �� �������� (������� 1)
$file = 'list.txt'; 
$string = '��� ������, ������� ���� �������'; 

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

//������ ������ �� ����� �� �������� (������� 2)
  $string = '��������� ������'; 
  $file = file('text.txt');  
  for ($i=0;$i<count($file);$i++) 
  {  
    if(trim($file[$i])==$string) unset($file[$i]); 
  } 
  print_r($file); 
  $h = fopen('text.txt',"w"); 
  fwrite($h, implode("",$file)); 
  fclose($h)  

//������ ������ �� ����� �� ������ ������
$line=2; # ������, ������� ����� ������� 
$file=file('file.txt'); 
$open=fopen('file.txt','w'); 
for($i=0;$i<count($file);$i++) 
{ 
if(($i+1)!=$line){fwrite($open,$file[$i]);} 
} 
fclose($open); 

//��������� ������ � ������ ������ �����
$z = '12345';
$array=file('file.txt','w');
$array[2]=$z; //��������� � ������ ������ ������� ����������
$f=fopen('file.txt');
for ($i=0; $i&lt;count($array); $i++) 
{
fputs($f,$array[$i]);
}
fclose($f);

//������ �� ����� �� ����� ������
$file=file('file.txt');
unset($file[0]);
$fp=fopen('file.txt','w'); 
fputs($fp,implode("",$file)); 
fclose($fp);

?>

<?php
if(copy('Z:/home/site/www/file.txt', 'Z:/home/site/www/file2.txt'))
{
	echo '����������� ������� ���������';
}
else{
	echo "������ ��� �����������";
}
?>