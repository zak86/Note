<?php

print_r($_COOKIE);

// Устанавливаем Cookie 'test' со значением 'Hello' на один час:
setcookie("test","Hello",time() + 3600);

// При следующем запросе скрипта выводит 'Hello':
echo @$_COOKIE['test'];



setcookie("mm_login", $_SESSION['login'], time() + 3600, "/");//на час

setcookie("mm_login", $_SESSION['login'], time() - 3600, "/");//удаление



setcookie("mm_login", $_SESSION['login'], time() + 2592000, "/");//на месяц

setcookie("zoo_cookie", $row["cookie"], time() + 15000000, "/", ".my-site.by");

?>