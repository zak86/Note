<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
<form action="" method="post" enctype="multipart/form-data">

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<form action="" method="post">

<p>�����<br>
<input id="inp" type="text" name="user" value="<?php echo $_POST['user'];?>" /></p>

<p>������<br>
<input id="inp" type="password" name="pass" value="<?php echo $_POST['pass'];?>" /></p>

<p><input name="submit" type="submit" value="�����"/></p>

<input type="hidden" name="user" value="5" />

<p>���� <input name="userfile" type="file" size="70"></p>

<p>��� ��� ����� <input type="text" name="new_page" size="60"></p>

<p>���������� ��� ����� <select size="1" name="page_r">
<option></option>
<option>.html</option>
<option>.htm</option>
<option>.txt</option>
<option>.doc</option>
<option>.docs</option>
<option>.xls</option>
<option>.xlsx</option>
<option>.jpg</option>
<option>.jpeg</option>
<option>.gif</option>
<option>.bmp</option>
<option value="1" selected="selected">.rar</option>
<option>.zip</option>
<option>.exe</option>
<option>.pdf</option>
</select>
 ��� 
 
<input name="rx" value="1" type="checkbox" /> �������� ��� ���������</p>
<input name="rx" type="checkbox" checked="checked" /> �������� ��� ���������</p>

<p><input type="radio" value="3" name="answer">

<p>���������� ����� <input name="col_vo" type="text" size="10"></p>

<p>���������<br>
<textarea id="inp" name="message"><?php echo $row["$pass"];?></textarea></p>

<p><input type="submit" name="submit" value="���������" /></p>

<input type="reset" value="��������" />

<input type="image" name="submit" src="/images/save.gif" alt="���������" />

</form>

<?php

empty() - ������
isset() - �����������

$user = $_POST['user'];
$user = $_GET['user'];

if(isset($user))
{ 
	$user = addslashes($user);
	$user = htmlspecialchars($user); // �������� ����������� �� �� HTML-���������
	$user = stripslashes($user); //�������� ���� ��������� �����
	$user = str_replace("/","",$user);  //�������� ����
	$user = str_replace(".","",$user);   //�������� �����
	$user = str_replace("`","",$user);  //�������� �������� �������
}
//���
if(isset($user))
{ 
	if (preg_match("/[0-9a-z_]/i", $user)) 
	{
	//�������� ��� ������
	} 
	else { echo "�� �� ����� ���!";  } 
}

//�������� ����
if(isset($_POST['submit']))
{
	echo "<p><b id=1>������ �������� � ����</b></p>";
}

//������
if(!empty($ups))
{
	$ups = '<b id="0">'.$ups.'</b>';
	echo $ups;
}

//�� ������
if(!empty($oke))
{
	$oke = '<b id="1">'.$oke.'</b>';
	echo $oke;
}

?>

<p>������������ ������ <select size="1" name="pos">
<option>�� ������</option>
<option disabled="disabled" >�����</option>
<option selected="selected" value="0000">������</option>
<option>�����</option>
<option>������</option>
</select>
</p>