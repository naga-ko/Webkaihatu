<?php
  // p303 危険なコード⇨改善したコード

  // $nameは、ユーザーの入力したデータと仮定
  $name = "鈴木' OR '1' = '1";
  // $name = 'tanaka';

  // DBに接続。接続先、ユーザー名、パスワード
  $dsn = 'mysql:host=localhost;dbname=tennis;charset=utf8';
  $user = 'tennisuser';
  $password = 'password';

  try {
    $db = new PDO($dsn, $user, $password);
    // 構文を決めるときには、ユーザーが入力したデータが関わらないようにする
    $stmt = $db->prepare("SELECT * FROM users WHERE name=:name");

    //　構文を確定した後、ユーザー入力したデータを割り当てる
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);

    $stmt->execute(); // 実際に実行する　
    while ($row = $stmt->fetch()) {
        echo '<p>ID:' . $row['id'].'</p>';
        echo '<p>name:' . $row['name'].'</p>';
        echo '<p>password:' . $row['password'].'</p>';
        echo '<hr>';
    }

  } catch (PDOException $e){
    exit("エラー: " . $e->getMessage());
  }