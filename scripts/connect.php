<?php
$con1 = mysqli_connect("localhost", "root", "")//параметры в скобках ("хост", "имя пользователя", "пароль")
or die("<p>Ошибка подключения к базе данных! " . mysqli_error() . "</p>");

mysqli_select_db($con1, "helpdesk")//параметр в скобках ("имя базы, с которой соединяемся")
or die("<p>Ошибка выбора базы данных! ". mysqli_error() . "</p>");
mysqli_query('SET NAMES \'utf8\'');
?>