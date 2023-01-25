<?php
$alph = 'A-B-C';

/* A | B | C | D | 4個 */

// 文字列を-を元に配列に変換
$alphArr = explode('-', $alph);

// 元の配列にDを加えて要素数を取得
// $arrLength = array_push($alphArr, 'D');

// 元の配列にDを加える
array_push($alphArr, 'D');
// 要素数を取得
$arrLength = count($alphArr);

// 元の配列に4個を追加
array_push($alphArr, $arrLength . '個');

// 配列に|を加えて文字列に変換
echo implode(' | ', $alphArr);

// echo '<pre>';
// print_r($GLOBALS);
// echo '</pre>';

echo '<pre>';
print_r($_SERVER);
echo '</pre>';
