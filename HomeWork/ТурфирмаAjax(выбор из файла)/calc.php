<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?

function calcPrice( $days, $percent, $discount){

     echo "Стоимость составляет:". ((400*(100+$percent)/100)*$days*(100-$discount)/100)."грн." ;
}

@calcPrice($_REQUEST['days'], $_REQUEST['percentCountry'], $_REQUEST['discount']) ;


?>


</body>
</html>