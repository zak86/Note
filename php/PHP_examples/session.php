<?php

//�������� ������
session_start();
$_SESSION['username'] = $name;
echo '������������, '.$_SESSION['username']."<br>";

print_r($_SESSION);


//������ ������� �� ������ ��������
session_start();
echo $_SESSION['username'].' ,�� �� ������!';


//�������������� ��������� ���������� � ��������� ������
session_start();
unset ($_SESSION['add_site']);//�����
session_destroy(); //��������� ������

?>