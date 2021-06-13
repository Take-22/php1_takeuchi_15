<!DOCTYPE html>
<html lang="ja">
<?php
//POSTデータを取得
$nationA = $_POST["nationA"];
$nationB = $_POST["nationB"];
$nationC = $_POST["nationC"];
$nationD = $_POST["nationD"];
$nationE = $_POST["nationE"];
$nationF = $_POST["nationF"];

//配列を文字列に変換
$array = array($nationA,$nationB,$nationC,$nationD,$nationE,$nationF);
$str = implode(",", $array);

    // XSS(クロスサイトスクリプティング)対策の関数 || scriptの入ったコードをget/postに入れるとjsがそのまま起動してしまう
    function h($value){
        return htmlspecialchars($value,ENT_QUOTES);
    }

//text.csvを変数に変換
$csv = "data/text.csv";

//text.csvファイルを開いて、読み込みモードに設定
$fp = fopen($csv, "a");

//csv fileに書き込む
// fputcsv($fp, $array);
fwrite($fp, $str."\n");

//csv fileを閉じる
fclose($fp);

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>csv_write</title>
</head>
<body>
    <h1>データを登録しました！</h1>
    <h2>Data you register is...</h2>
    <ul>
        <li>グループA：<?= h($nationA) ?></li>
        <li>グループB：<?= h($nationB) ?></li>
        <li>グループC：<?= h($nationC) ?></li>
        <li>グループD：<?= h($nationD) ?></li>
        <li>グループE：<?= h($nationE) ?></li>
        <li>グループF：<?= h($nationF) ?></li>
    </ul>
    <!-- 最初に戻る -->
    <ul>
        <li><a href="index.php">戻る</a></li>
    </ul>

</body>
</html>