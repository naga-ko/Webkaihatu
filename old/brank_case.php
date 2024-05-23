<?php
$i = "はい";
switch($i){
    case "はい";
    case "Yes";
        echo"OKです";
        break;
    case いいえ:
    case "NO":
        echo"NOです";
        break;
}
?>
do{
処理
}while(条件);
//while構文と似ているが、処理=>条件の順
//処理が一回は行われる

while(条件){
    処理
    条件に影響する変更
}
<hr>
Q1
処理が終了する（switchブロックを抜ける）

Q2
<br>
Q3
<br>
for文
<br>
<?php
for($i = 10;$i >= 1;$i--){
    echo $i . "<br>";
}
?>
while構文
<br>
<?php
$i = 10;
while($i >= 1){
    echo $i . "<br>";
    $i--;
}
?>

Q4
Whileループを抜けました。と出る

Q5
<?php
$total = 10;
switch ($total){
    case 10:
        echo"10";
        break;
    case 20:
        echo"20";
        break;
    default:
        echo"その他";
}
?>