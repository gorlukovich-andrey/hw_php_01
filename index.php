<?php

 $TITLE = 'Домашняя работа №1, курс «Программирование на PHP';
 $H1 = 'Домашняя работа №1, курс «Программирование на PHP';
 $DESCRIPTION = 'Курс «Программирование на PHP. Домашняя работа №1.';
 $KEYWORDS = 'программирование, php, домашняя работа';
 include($_SERVER['DOCUMENT_ROOT'].'/template/header.php');

 echo "<h2>Задание № 1</h2>\n";
 $a = 10;
 $b = 2;
 echo '<p>Переменная $a = '."$a</p>\n";
 echo '<p>Переменная $b = '."$b</p>\n";
 echo '<p>Сумма $a + $b = ';
 echo $a + $b;
 echo "</p>\n";
 echo '<p>Разность $a - $b = ';
 echo $a - $b;
 echo "</p>\n";
 echo '<p>Произведение $a * $b = ';
 echo $a * $b;
 echo "</p>\n";
 echo '<p>Деление $a / $b = ';
 echo $a / $b;
 echo "</p>\n<hr/>\n";

 echo "<h2>Задание № 2</h2>\n";
 $x = 2;
 $y = 6;
 $z = 9;
 echo '<p>Число $x = '."$x</p>\n";
 echo '<p>Число $y = '."$y</p>\n";
 echo '<p>Число $z = '."$z</p>\n";
 echo '<p>Решение (x+1)4−2(z−2x^2+y^2) = ';
 echo ($x + 1) * 4 - 2 * ($z - 2 * pow($x, 2) + pow($y, 2));
 echo "</p>\n<hr/>\n";
 
 echo "<h2>Задание № 3</h2>\n";
 $a = 17;
 $b = 10;
 echo '<p>Переменная $a = '."$a</p>\n";
 echo '<p>Переменная $b = '."$b</p>\n";
 $c = $a - $b;
 echo '<p>Переменная $c = $a - $b = '."$c</p>\n";
 $d = 7;
 echo '<p>Переменная $d = '."$d</p>\n";
 $result = $c + $d;
 echo '<p>Переменная $result = $c + $d = '."$result</p>\n";
 echo "</p>\n<hr/>\n";

 echo "<h2>Задание № 4</h2>\n";
 $text1 = 'Привет, ';
 $text2 = 'Мир!';
 echo '<p>Переменная $text1 = '."$text1</p>\n";
 echo '<p>Переменная $text2 = '."$text2</p>\n";
 echo '<p>Переменная $text1. $text2 = ';
 echo $text1. $text2;
 echo "</p>\n<hr/>\n";

 echo "<h2>Задание № 5</h2>\n";
 $name = 'Андрей';
 echo '<p>Переменная $name = '."$name</p>\n";
 echo '<p>Привет, $name = ';
 echo 'Привет, ' . $name . '!';
 echo "</p>\n<hr/>\n";

 echo "<h2>Задание № 6</h2>\n";
 $num = '12345';
 echo '<p>Переменная $num = '."$num</p>\n";
 echo '<p>';
 echo '<p>$num[0] + $num[1] + $num[2] + $num[3] + $num[4] = ';
 echo $num[0] + $num[1] + $num[2] + $num[3] + $num[4];
 echo "</p>\n<hr/>\n";

 echo "<h2>Задание № 7</h2>\n";
 $minute = 60;
 echo '<p>Переменная $minute = '."$minute</p>\n";
 $hour = $minute * 60;
 echo '<p>Переменная $hour = $minute * 60 = '.$hour.' секунд в 1 часе'."</p>\n";
 $day = $hour * 24;
 echo '<p>Переменная $day = $hour * 24 = '.$day.' секунд в 1 сутках'."</p>\n";
 $month = $day * 30;
 echo '<p>Переменная $month = $day * 30 = '.$month.' секунд в 1 месяце (30 дней)'."</p>\n";
 $month = $day * 31;
 echo '<p>Переменная $month = $day * 31 = '.$month.' секунд в 1 месяце (31 день)'."</p>\n";
 $year = $day * 365;
 echo '<p>Переменная $year = $day * 365 = '.$year.' секунд в 1 годе'."</p>\n";
 
 echo "<h2>Задание № 8</h2>\n";
 $hournow = date('H');
 $minutenow = date('i');
 $secondnow = date('s');
 echo 'Время сейчас: ';
 echo $hournow.':'.$minutenow.':'.$secondnow;
 echo "</p>\n<hr/>\n";

 include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>