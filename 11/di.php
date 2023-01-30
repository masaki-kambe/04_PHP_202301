<?php
/**
 * 不快指数を計算する
*/
$t = 13;   // 気温 T
$h = 40;   // 湿度 H


function getDi($t, $h)
{
    return 0.81 * $t + 0.01 * $h * (0.99 * $t - 14.3) + 46.3;
}
?>

気温<?=$t?>℃、湿度<?=$h?>%の時の不快指数は<?=getDi($t, $h)?>です。
