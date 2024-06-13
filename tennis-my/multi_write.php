<?php
$fp = fopen("test.txt","w");
if ($fp){
    fwrite($fp,"書き込みテスト１行目" . PHP_EOL);
    fwrite($fp,"書き込みテスト２行目");
    fclose($fp);
    echo '書き込みました。';
}else{
    echo 'エラーが起きました。';
}

$contents = "書き込みテスト１行目";
$contents = PHP_EOL;
$contents = "書き込みテスト2行目";
$contents = PHP_EOL;
$contents = "書き込みテスト3行目";
file_put_contents("test.txt" , $contents);
?>
Q1
\n,PHP_EOL

Q2
A fopen
B fgets
C fclose
D fwrite