<?php
// 商品一覧リスト
$goodsList = ['テレビ', 'パソコン', '携帯電話', '冷蔵庫', '洗濯機'];
// ユーザが選択した番号
$id = $_GET['id'];
// ユーザが選択した商品名
$itemName = $goodsList[$id];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品の選択</title>
</head>
<body>
    <p><?=$itemName?>が選択されました。</p>
    <p><a href="lists.php">一覧ページに戻る</a></p>
</body>
</html>
