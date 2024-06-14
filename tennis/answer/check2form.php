<?php // check2form.php
include ('check2_data.php');
$message = '好きな食べ物は';

// データを検証する処理
if (!isset($_POST['fruit'])) {
    // データがない場合
    $message = '入力してください。';
} else {
    // データがある場合
    // orangeやappleが来るので、みかんやりんごに変換する
    // 教科書 p117 $friends[$i]のように、
    // $friends[0], $friends[1],,,
    // 配列の要素のところを変数にすることができる
    $key = $_POST['fruit'];
    // PHPのマニュアルを参照する
    // array_key_exists(キー, 配列)
    // 配列を調べて、キーがあればtrue,なければfalse
    if (array_key_exists($key, $fruits)) {
        $message .= $fruits[$key];
    } else {
        $message = "不正な入力です。";
    }

    // $fruitsは check2_data.phpで用意した
    // $keyは、実際には apple や orangeが入っている
    // $fruits['apple'] →　りんごが出力される
    // $fruits['orange'] →　みかんが出力される
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>フォーム</title>
</head>
<body>
<h1>フォーム</h1>
<?php
echo $message;
?>
</body>
</html>