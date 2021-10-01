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
<form action="" method="post">
    <textarea name="inp"> </textarea>
    <button>Check</button>
</form>
</body>
</html>
<?php
function classify($str)
{
    $str = substr($str, 0, 3);
    switch ($str) {
        case '086':
        case '096':
        case '097':
        case '098':
        case '032':
        case '033':
        case '034':
        case '035':
        case '036':
        case '037':
        case '038':
        case '039':
            return 1;
        case '088':
        case '091':
        case '094':
        case '083':
        case '084':
        case '085':
        case '081':
        case '082':
            return 2;
        case '089':
        case '090':
        case '093':
        case '070':
        case '079':
        case '077':
        case '076':
        case '078':
            return 3;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    (string)$str = $_POST['inp'];
    $a=',';
    $a .=$str;
    $arr = explode(',', $a);
    $viettel = [];
    $mobifone = [];
    $vinaphone = [];
    foreach ($arr as $value):
        if (classify($value) == 1) {
            array_push($viettel, $value);
        } elseif (classify($value) == 2) {
            array_push($vinaphone, $value);
        } elseif (classify($value) == 3) {
            array_push($mobifone, $value);
        }
    endforeach;
        echo 'Viettel: <br>';
    foreach ($viettel as $value):
        echo $value.'<br>';
    endforeach;
    echo 'Mobifone: <br>';
    foreach ($mobifone as $value):
        echo $value.'<br>';
    endforeach;
    echo 'Vinaphone: <br>';
    foreach ($vinaphone as $value):
        echo $value.'<br>';
    endforeach;
}
