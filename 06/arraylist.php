<?php
$fruits = ['リンゴ', 'バナナ', 'ぶどう'];

$arrayList = [
    'リンゴ' => 100,
    'バナナ' => 200,
    'ぶどう' => 300
];

// インデックス番号「2」の内容を「イチゴ」に変更し
// インデックス番号「3」に「メロン」の要素を追加
// インデックス番号「1」の要素を削除し
// var_dump()とprint_r()関数
// 両方を使って配列の内容を画面に表示する。

$fruits[2] = 'イチゴ';
$fruits[3] = 'メロン';
unset($fruits[1]);

echo '<pre>';
var_dump($fruits);
echo '</pre>';

echo '<pre>';
print_r($fruits);
echo '</pre>';

// 配列に「イチゴ：400(円)」を追加し
// 「リンゴ」の値段を「80(円)」に変更し
// 最後にprint_r()で表示する。

$arrayList['イチゴ'] = 400;
$arrayList['リンゴ'] = 80;

echo '<pre>';
print_r($arrayList);
echo '</pre>';
