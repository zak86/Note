<?php

//открываю сессию
session_start();
$_SESSION['username'] = $name;
echo 'Здравствуйте, '.$_SESSION['username']."<br>";

print_r($_SESSION);


//сессию передаю на другую страницу
session_start();
echo $_SESSION['username'].' ,Вы не забыты!';


//разрегистрирую сеансовую переменную и уничтожаю сессию
session_start();
unset ($_SESSION['add_site']);//сброс
session_destroy(); //уничтожаю сессию

?>