<?php
//Переменные
$var = "hello world";
echo $var;

$char = "123";
$Char = "321";
$apple = "apple";
$winniePooh = "I'm Winnie. I Have 1 {$apple}s";

//Константы
define("PAGE","new page");
//Новый синтаксис
const newPage = "new new new PAGE"
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $var ?></title>
</head>
<body>
<h1><?php echo PAGE; ?></h1>
<h1><?php echo newPage; ?></h1>
<h1><?php echo $var ?></h1>

<?php echo $char ?>

<?php echo $Char ?>

<p><?php echo $winniePooh ?></p>

</body>
</html>
