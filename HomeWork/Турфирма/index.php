<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<?

function calcPrice( $days, $percent, $discount){
    echo "Стоимость путевки составляет:".((400*(100+$percent)/100)*$days*(100-$discount)/100) ." грн.";
}

$arCountry = array(
                    array('name' => 'Египет', 'percent' => 10),
                    array('name' => 'Турция', 'percent' => 5),
                    array('name' => 'Малайзия', 'percent' => 7)
                    );
?>
Выбирите страну и количество дней:
<form action="" method="post" style="border: 1px solid green;">
    <select name="percentCountry" >
        <?foreach($arCountry as $key => $country):?>
                <option  value="<?=$country['percent']?>"><?=$country['name']?></option>
        <?endforeach?>

    </select><br>
    <input type="text" name="days" placeholder="Кол-во дней" required>
    <input type="checkbox" name="discount" value="5"> скидка 5% <br>
    <input type="submit" name="check" value="ok" >
</form>
<?
if(isset($_REQUEST['check'])) {

    @calcPrice($_REQUEST['days'], $_REQUEST['percentCountry'], $_REQUEST['discount']) ;
}
?>


</body>
</html>

