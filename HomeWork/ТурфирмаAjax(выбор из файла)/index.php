<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<?

//$arCountry = array(
//                    array('name' => 'Египет', 'percent' => 10),
//                    array('name' => 'Турция', 'percent' => 5),
//                    array('name' => 'Малайзия', 'percent' => 7)
//                    );


$handle = fopen("file.txt", 'r');
for($i=0;!feof($handle); $i++) {
    $a[$i] = fgetcsv($handle, filesize("file.txt"), ':');
}
fclose($handle);
?>

Выбирите страну и количество дней:
<form id="form" method="post" style="border: 1px solid green;">
    <select name="percentCountry" >
        <?foreach($a as  $country):?>
                <option  value="<?=$country[1]?>"><?=$country[0]?></option>
        <?endforeach?>

    </select><br>
    <input type="text" name="days" placeholder="Кол-во дней" required>
    <input type="checkbox" name="discount" value="5"> скидка 5% <br>
    <input type="submit" name="check" value="ok" >
</form><br>
<div id="res"></div>
    <script src="js/jquery.js"></script>
    <script type="text/javascript">
        $(function(){//
            $('#form').submit(function(e){
                e.preventDefault();
                var errors = 0;
                var formData = $(this).serializeArray();// $('#form').serializeArray();
                var that = this;
                console.log(formData);
                $.each(formData, function(){
                    if(this.value == ""){
                        errors++;
                        $('#'+this.name).css('border', '1px solid red');
                    }else{
                        $('#'+this.name).css('border', '');
                    }
                });
                if(errors == 0) {
                    $.ajax({
                        url: "calc.php",
                        type: 'post',
                        data: formData,
                        dataType: 'html',
                        success: function (res) {
                            $('#res').html(res);
                        }
                    });
                }else{
                    alert('Заполните все поля');
                }
            });
        });
</script>



<?

?>


</body>
</html>

