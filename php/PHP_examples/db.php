<?php

//���� ������

$db_host = 'localhost';
$db_base = '����_������';
$db_user = '���_������������';
$db_pass = '������';

$db = mysql_connect($db_host, $db_user, $db_pass) or die ('<b id="u"><b>������! ������ �� ��������.</b></b>');
$select_db = mysql_select_db($db_base, $db) or die ('<b id="u"><b>������! ���� ������ �� ��������.</b></b>');

echo '���������� � �� �����������!<br>';

mysql_close($db);

mysql_set_charset('cp1251',$db);//��������� ��

//�������� ���������
$stroka = iconv('UTF-8', 'WINDOWS-1251', $win_stroka);//� ������ �������� �������� ���������, �� ������ � �������, ����� ���������� � ���������� �������.
?>

<?php
//������� �� �������
$r = mysql_query("SELECT name, email FROM users WHERE name='$name'", $db) or die ($err);
$rn++;
$row = mysql_fetch_array($r);

echo $row['name'];

while($row = mysql_fetch_array($r))
{
	echo '<p>'.$row['name'].'</p>';
}

//��������� ���������� �����
$rows = mysql_num_rows($r);

//��������� ���������� �����
$r = mysql_query("SELECT COUNT(*) FROM users", $db) or die ($err);
$row = mysql_fetch_array($r);
echo $row[0];

//�������������� ��������� ��������
 ORDER BY id //����������� �� id
 LIMIT 1 //������� ������� �����������
 DESC //����������� � �������� �������
 ORDER BY RAND() //��������� ����� - �� ������������ - �������� �� ������!!!
?>

<?php
//�������� ������ � �������
$i = mysql_query("INSERT INTO users (name, login) VALUES ('����', 'Dima')", $db);
$rn++;

if($i == true)
{
	$oke .= '������ ��������<br>';
}
else{
	$ups .= '������, ������ �� ��������<br>';
	exit('<b id=0>������, ������ �� ��������</b><br>');
}
?>

<?php
//�������� ������ � �������
$u = mysql_query("UPDATE users SET name='$name', login='$login' WHERE id='$id'", $db);
$rn++;

if($u == true)
{
	$oke .= '������ ���������<br>';
}
else{
	$ups .= '������, ������ �� ���������<br>';
}
?>

<?php
//������� ������ �� �������
$d = mysql_query("DELETE FROM users WHERE id='$id'");
$rn++;

if($d == true)
{
	$oke .= '������������ �����<br>';
}
else{
	$ups .= '������������ �� �����<br>';
}
?>

<?php
//����� � �������
$r = mysql_query("SELECT * FROM tovar WHERE cat='$cat' AND MATCH(text) AGAINST('$word')", $db) or die ($err);
$rn++;

//������� ��������� �����������
$r = mysql_query("SELECT comment, DATE_SUB(CURDATE(), INTERVAL 1 DAY) FROM comments", $db) or die ($err);

//����� ������
$u = mysql_query("UPDATE users SET name='$name' WHERE id='$id'", $db) or die(mysql_error());

//������� ��
$sql = 'CREATE DATABASE `new_db`';

		mysql_query('CREATE TABLE `konkurs` ('
        . ' `id` INT(10) NOT NULL AUTO_INCREMENT, '
        . ' `name` VARCHAR(21) NOT NULL, '
        . ' `login` VARCHAR(21) NOT NULL, '
        . ' `email` VARCHAR(41) NOT NULL, '
        . ' PRIMARY KEY (`id`)'
        . ' )';

//������� ������� �� ��
$sql = 'DROP TABLE `users`';

//���������� ��� ��
$sql = 'CREATE DATABASE `new_db`';
?>

<?php
//�������� ��� �������
if(!empty($submit))
{
	$c = mysql_query("SELECT * TRUNCATE users", $db) or die ($err);
	if($c == true)
	{
		$oke .= '������� users �������';
	}
	else{
		$ups .= '������, ������� users �� �������';
	}
}
?>
<form action="" method="post">
<p><input type="submit" name="submit" value="�������� �������" /></p>
</form>