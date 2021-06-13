<?php
// ダウンロードするサーバのファイルパス
$filepath = "data/text.csv";

//ファイル名を日付でidentify
$now = date("Ymd_His");

//csvヘッダを設定
header('Content-Type: application/octet-stream');
header('Content-Length: '.filesize($filepath));
header('Content-Disposition: attachment; filename=download.'.$now.'.csv');

//Excelで開くようにSJISにする
echo mb_convert_encoding($filepath,"SJIS", "UTF-8");

//ファイル出力
readfile($filepath);

?>