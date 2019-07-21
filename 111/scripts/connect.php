<?php
mysql_connect("localhost", "adminhdlocal", "QpalZm1945")//параметры в скобках ("хост", "имя пользователя", "пароль")
or die("<p>Ошибка подключения к базе данных! " . mysql_error() . "</p>");

mysql_select_db("helpdesk")//параметр в скобках ("имя базы, с которой соединяемся")
or die("<p>Ошибка выбора базы данных! ". mysql_error() . "</p>");
mysql_query('SET NAMES \'utf8\'');
?>