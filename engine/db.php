<?php
$db = @mysqli_connect('localhost', 'root', '', 'company') or die('Ошибка подключения к БД');
mysqli_set_charset($db, 'utf8') or die('Не правильная кодировка');