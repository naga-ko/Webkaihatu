<?php
// p234 11-3
// データ受け取り
$name = $_POST['name'];
$title = $_POST['title'];
$body = $_POST['body'];
$pass = $_POST['pass'];
// <input name="XXX"> ⇨ $_POST['XXX']

// 必須項目のチェック
// 名前が空 OR 本文が空        OR は ||
if ($name == '' || $body == '') {
    header("Location: bbs.php"); // bbs.phpへ移動する
    exit(); // プログラム終了
}

// 削除パスワード　数字4桁
// 正規表現でチェックする [0-9]は数字。 {4}は繰り返し4回
// ^ は開始。　$ は終了
// 正規表現の詳細は、公式ドキュメントなどを参照
if (!preg_match("/^[0-9]{4}$/", $pass)) {
    header("Location: bbs.php"); // bbs.phpへ移動する
    exit(); // プログラム終了
}

// DBに接続。接続先、ユーザー名、パスワード
$dsn = 'mysql:host=localhost;dbname=tennis;charset=utf8';
$user = 'tennisuser';
$password = 'password';

try {
    // PDO(Php Data Object) インスタンスの作成
    // PDOは、データベースとのやり取りに使う
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

    // プリペアドステートメントを作成
    $stmt = $db->prepare("
        INSERT INTO bbs(name, title, body, pass)
        VALUES(:name, :title, :body, :pass)
    ");
    // ↑ (a) SQL構文を作るときには、PHPの変数は入れない
    // ⇩ (b) 構文への値を割り当てる

    // (a)と(b)は別のステップで行う。
    // 一度に行った場合、SQL構文がおかしくなるリスクがある。⇨なので避ける

    // プリペアドステートメントにパラメータを割り当てる
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':title', $title, PDO::PARAM_STR);
    $stmt->bindParam(':body', $body, PDO::PARAM_STR);
    $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
    // 実行
    $stmt->execute();

    header("Location: bbs.php"); // bbs.phpへ移動する
    exit(); // プログラム終了
} catch (PDOException $e) {
    exit('エラー: ' . $e->getMessage());
}

// 完成したら、bbs.phpから書き込みしてみる⇨phpMyAdminで確認する

// p244 check test
// Q1
//INSERT
//VALUES
// Q2
//プリペアドステートメント