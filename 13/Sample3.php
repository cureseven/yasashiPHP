<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$prs = xml_parser_create("UTF-8"); // パーサーを作成

xml_set_element_handler($prs, "startElement", "endElement"); // 要素を処理するハンドラを登録
xml_set_character_data_handler($prs, "characterData"); // 文字データを処理するハンドラを登録

$fp = fopen("Sample.xml","r");
while ($data = fgets($fp, 10000)) {
    xml_parse($prs, $data, feof($fp)); // ドキュメントの処理を開始する
}
xml_parser_free($prs);

/**
 * 開始タグを読み込んだときに呼び出される
 * @param $prs
 * @param $name
 * @param $attribute
 */
function startElement($prs, $name, $attribute){
    print $name . "<br/>";
}

/**
 * 終了タグを読み込んだときに呼び出される
 * @param $prs
 * @param $name
 */
function endElement($prs, $name){
    print $name . "<br/>";
}

/**
 * 文字を読み込んだときに呼び出される
 * @param $prs
 * @param $data
 */
function characterData($prs, $data){
    print $data . "<br/>";
}
?>
</body>
</html>