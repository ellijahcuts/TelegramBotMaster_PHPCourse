<?php
error_reporting(-1);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
/*$i=0;
while ($i <= 10){
    $i++;
    echo $i . '<br>';
}
*/

/*$i = 1;
echo "<table border='5'> \n";
while ($i <= 5) {
    echo "\t<tr>\n";
    $n = 1;
    while ($n <= 3) {
        echo "\t\t<td>Row $i | Col $n</td>\n";
        $n++;
    }
    echo "\t</tr>\n";
    $i++;
}
echo "</table>";*/

/*$i = 1900;
echo "<select> \n";
while ($i <= 2022) {
    echo "\t\t <option value = '$i'>$i</option>\n";
    $i++;
}
echo '</select>';*/

/*$i = 10;
do {
    echo $i++ . '<br>';
} while ($i <= 10);
*/

//HOME WORK

$i = 1;
echo "<table border='5'> \n";
while ($i <= 9) {
    echo "\t<tr>\n";
    $n = 1;
    while ($n <= 9) {
        $x = $i * $n;
        echo "\t\t<td>$i x $n = $x </td>\n";
        $n++;
    }
    echo "\t</tr>\n";
    $i++;
}
echo "</table>";
?>
</body>
</html>
