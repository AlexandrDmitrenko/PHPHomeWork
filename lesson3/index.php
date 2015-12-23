<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    set_time_limit(10);

    $n = 36;
    for ($i = 1; $i <= $n; $i += 3 ) {
        $s = $s + $i;
    }
    echo " Сумма чисел равна $s","<br>";
echo "<br>-----------------------------------------------------------------<br>";

    $n = 10;
    for ($i = 0; $i <= $n - 1; $i++) {
        $array[$i] = $i * $i;
    }
    print_r( $array );

echo "<br>-----------------------------------------------------------------<br>";

    $n = 10;
    if ($n%2 == 0){
        echo $n = $n / 2;
    }else{
        echo $n = $n * 3;
    }

echo "<br>-----------------------------------------------------------------<br>";

    $a = 18;
    $b = -8;

    if ( $a - $b < 20 && $a - $b > -20){
        echo "Да";
    }   else {
        echo "Нет";
}
    echo "<br>", $a-$b;

echo "<br>-----------------------------------------------------------------<br>";

    $a = array("первый" => 6, "второй" => 2, "третий" => 1);
    print_r($a);
    echo"<br>";
    sort($a);
    foreach($a as $k => $am) {
        echo "ключь ".$k." Элемент ".$am, "<br>";
    }

?>

</body>
</html>


