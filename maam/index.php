<?php
$arr=[
    [0,2,6,8,0],
    [0,5,8,6,4],
    [1,2,0,8,0],
    [1,0,6,8,0]
];
function matrixElementsSum($matrix)
{
    $money = 0;
    for ($j = 0; $j < count($matrix[0]); $j++) {
        for ($i = 0; $i < count($matrix); $i++) {
            if ($matrix[$i][$j] == 0) {
                break;
            } else {
                $money += $matrix[$i][$j];
            }
        }
    }
    return $money;
}
echo matrixElementsSum($arr);
