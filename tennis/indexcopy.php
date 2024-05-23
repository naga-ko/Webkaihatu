<?php $info = file_get_contents("info.text");//ファイルからテキストデータを取ってくる
?>

<html>
    <head></head>
    <body>
        <h1>お知らせ</h1>
        <p><?php echo $info;?></p>
    </body>
</html>