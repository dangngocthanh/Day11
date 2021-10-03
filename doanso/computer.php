<?php
function start()
{
        session_start();
    $_SESSION['mid'] = 50;
    $_SESSION['low'] = 1;
    $_SESSION['high'] = 100;
    return 50;
}
function right()
{
    session_start();
    $mid = $_SESSION['mid'];
    $high = $_SESSION['high'];
    $_SESSION['low'] = $mid + 1;
    $low = $_SESSION['low'];
    $_SESSION['mid'] = (int)(($low + $high) / 2);
    return $_SESSION['mid'];
}

function left()
{
    session_start();
    $mid = $_SESSION['mid'];
    $_SESSION['high'] = $mid - 1;
    $low = $_SESSION['low'];
    $high = $_SESSION['high'];
    $_SESSION['mid'] = (int)(($low + $high) / 2);
    return $_SESSION['mid'];
}
