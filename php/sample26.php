<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<?php
try {
    $db = new PDO('mysql:dbname=mydb;host=localhost;charset=utf8',
    'root', 'root');
} catch(PDOException $e) {
    echo 'DB接続エラー: ' . $e->getMessage();
}

$count = $db->exec('INSERT INTO my_items SET maker_id=1, item_name="もも", price=210, keyword="缶詰,ピンク,甘い"');
echo $count . '件です。';

$count = $db->exec('INSERT INTO my_items SET maker_id=1, 
                    item_name="もも", item_name_kana="モモ", price= 210, keyword="缶詰,ピンク,甘い", sales =10'); 
echo $count .'件のデータを挿入しました。';
?>
<!-- ここにプログラムを記述します -->
</pre>
</main>
</body>    
</html>

