<?php
session_start();
if(isset($_SESSION['id'])){
    header('Location:index.php');
}else if(isset($_POST['name']) && isset($_POST['password']
)){
   $dsn = 'mysql:host=localhost;dbname=tennis;charset=utf8';
    $user = 'tennisuser';
    $password = 'password';

    try {
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $stmt = $db->prepare("SELECT * FROM users WHERE name=:
    name AND password=:pass");

    // パラメータ割り当て
    $stmt->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
    $stmt->bindParam(':pass', hash("sha256",$_POST
    ['password']),PDO::PARAM_STR);

    $stmt->execute();

    if($row = $stmt->fetch()){
        $_SESSION['id'] = $row['id'];
        header('Location:index.php');
        exit();
    }else {
        header('Location:login.php');
    }
    } catch (PDOException $e){
        exit("エラー: " . $e->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <title>サークルサイト</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.con/bootstrap/4.50/css/bootstrap.min.css">
    <style type="text/css">
        form{
            width:100%;
            max-width:330px;
            padding:15px;
            margin:auto;
            text-align:center;
        }
        #name{
            margin-bottom:-1px;
            border-bottom-right-radius:0;
            border-bottom-left-radius:0;
        }
        #password{
            margin-bottom:10px;
            border-top-left-radius:0;
            border-top-right-radius:0;
        }
    </style>
</head>
<body>
<main role="main" class="container" style="padding:60px 15px 0">
<div>
    <form action="login.php" method="post">
        <h1>サークルサイト</h1>
        <label class="sr-only">ユーザ名</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="ユーザ名">
        <label class="sr-only">パスワード</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="パスワード">
        <input type="submit" class="btn btn-primary btn-block" value="ログイン">
    </form>
</div>
</body>
</html>
