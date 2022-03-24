<?php
error_reporting(-1);

/*
 Арифметические операторы
"+" Сложение
"-" Вычитание
"*" Умножение
"/" Деление
"-$a" Отрицание
"$a % $b" деление по модулю (остаток от деления)
"$a ** $b" возведение в степень
"=" присваивание
"&" присваивание по ссылке
"++$a" префиксный инкремент
"$a++" постфиксный инкремент
"--$a" префиксный декремент
"$a--" постфиксный декремент
"." конкатенация (склеивание строк)
 */
$a = 5;
$b = 2;
$c = $a;
$a = 7;
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operators</title>
</head>
<body>
<p><?php echo $a * $b; ?></p>
<p><?php echo $a ** $b; ?></p>
<p><?php echo $a / $b; ?></p>
<p><?php echo $a % $b; ?></p>
<p><?php echo pow(2, 4); ?></p>
<p><?php echo 5 + 3 * 3; ?></p>
<p><?php echo var_dump($a); ?></p>
<p><?php echo var_dump($c); ?></p>


</body>
</html>