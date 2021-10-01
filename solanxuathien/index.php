<?php
function findValue(array $array, $value)
{
    $count = 0;
    foreach ($array as $val):
        if ($val == $value) {
            $count++;
        };
    endforeach;
    return $count;
}
$arr=[1,5,8,9,4,5,6,7,5,8,5,5,88,5,1,1];
echo findValue($arr,5);