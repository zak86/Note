<?php

print_r($_COOKIE);

// ������������� Cookie 'test' �� ��������� 'Hello' �� ���� ���:
setcookie("test","Hello",time() + 3600);

// ��� ��������� ������� ������� ������� 'Hello':
echo @$_COOKIE['test'];



setcookie("mm_login", $_SESSION['login'], time() + 3600, "/");//�� ���

setcookie("mm_login", $_SESSION['login'], time() - 3600, "/");//��������



setcookie("mm_login", $_SESSION['login'], time() + 2592000, "/");//�� �����

setcookie("zoo_cookie", $row["cookie"], time() + 15000000, "/", ".my-site.by");

?>