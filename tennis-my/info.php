<!doctype html>
<html lang="ja" >
  <head>
    <title>サークルサイト</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  </head>
  <body>
    <?php $info = file_get_contents("info.text");//ファイルからテキストデータを取ってくる?>
    <?php include('navbar.php'); ?>
    <main role="main" class="container" style="padding:60px 15px 0">
      <div>
        <!-- ここから「本文」-->

        <h1>お知らせ</h1>
        <?php
    $fp = fopen("info.text","r");
    $body = '';

    if($fp){
        while(!feof($fp)){
            $line[] = fgets($fp);
        }
        fclose($fp);
    }

    if(count($line) > 0){
        for ($i = 0;$i < count($line);$i++){
            if($i == 0){
                echo'<h2>' . $line[0] . '<br>';
            }else{
                echo $line[$i] . "<br>";
            }
        }
    }else{
        $body = 'お知らせはありません。';
    }
    echo '<p>' . $body . '</p>';
    ?>

        <!-- 本文ここまで -->

      </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

p173　チェックテスト

Q1フィルターポインタ

Q2r+

Q3
file_get_contentsは全部読み込む
fgetsは１行づつ読み込む
（読み込むだけならfile_get_contentsが楽だが、
細かい処理したい場合は、fgetsとfopen/fcloseを使う）