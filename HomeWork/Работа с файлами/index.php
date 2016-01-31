<?
function sum( $a , $b ){
    return $a + $b;
}

function read($file_name){
    $handle = fopen($file_name, 'r');
    $data = file($file_name);
    fclose($handle);
    return $data;
}


function write($file_name, $str){
    $handle = fopen($file_name, 'w+');
    fwrite($handle, $str);
    fclose($handle);
}

$input = "input.txt";
$result = "result.txt";
$data = read($input);
$res = sum($data[0],$data[1]);
echo $res;
write($result, $res);

echo "<br>----------------------------------------------<br>";
?>

<form action="" name="file" id="file" method="post">
    <input type="text" name="arrFile" required placeholder="введите файл с массивом"><br>
    <input type="text" name="powResFile" required placeholder="введите файл хранения результата"><br>
    <input type="text" name="powExpFile" required placeholder="введите файл со степенью"><br>
    <input type="submit" name="submit" value="ok">
</form>

<?
function readArr($file_name){
    $handle = fopen($file_name, 'r');
    $arr = fgetcsv($handle, filesize($file_name), " ");
    return $arr;
}

function powArr($arr, $exp){
    $arr1 = "";
    foreach($arr as $k => $v){
        $arr1[$k] = pow($v, $exp);
    }
    return $arr1;
}

function writeArr($file_name, $arr){
    $str = "";
    foreach($arr as $v){
        $str .="$v ";
    }
    $handle = fopen($file_name, 'w+');
    fwrite($handle, $str);
    fclose($handle);
}
function view($file_name){
    if (file_exists($file_name)) {
        $handle = fopen($file_name, 'r');
        $text = "";
        if($handle){
            while(!feof($handle)){
                $text .= fgets($handle)."<br>";
            }
            fclose($handle);
            return $text;
        }

    } else {
        echo "<br>Файл \"$file_name\" не существует<br>";
    }

}
if($_REQUEST) {
    $array = $_REQUEST['arrFile'];
    $pow = $_REQUEST['powExpFile'];
    $powRes = $_REQUEST['powResFile'];
    $handle = fopen($pow, 'r');
    $exp = fgets($handle);
    fclose($handle);
    $arr = readArr($array);
    $arrRes = powArr($arr, $exp);
    writeArr($powRes, $arrRes);


    echo "Входной массив: " . view($_REQUEST['arrFile']);
    echo "Возведение в степень: " . view($_REQUEST['powExpFile']);
    echo "Результат: " . view($_REQUEST['powResFile']);
}
?>












