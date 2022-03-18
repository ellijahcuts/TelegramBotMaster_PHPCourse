<?php
error_reporting(-1);

$var = "pencil";
/*
 boolean: true / false
 integer:
 string:
 float:
*/

$int=123+"5";
$bol=true;
$fl = 1.2;
$str = "lol it's im";
// экранирование символов
$str1 = 'lol it\'s im';
//HEREDOC
$str2 = <<<HERE
Ого тут мужно писать все что у годно и любые ковычки "  ' и ничего не ругается
HERE;
//HOWDOC
$str3 = <<<'HERE'
Ого тут мужно писать все что у годно и любые ковычки "  ' и ничего не ругается
HERE;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Types</title>
</head>
<body>
<p><?php echo $int ?></p>
<p><?php echo $bol ?></p>
<p><?php echo $fl ?></p>
<p><?php echo $str ?></p>
<p><?php echo $str1 ?></p>
<p><?php echo $str2 ?></p>
<p><?php echo $str3 ?></p>
<?php var_dump($int);
var_dump($bol);
var_dump($fl);
var_dump($str);?>

</body>
</html>
