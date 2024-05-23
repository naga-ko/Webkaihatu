<?php
$i = 1;
while($i <= 10){
    echo $i."<br>";
    $i++;
}
$j = 1000;
while($j >= 150){
    echo "買います<br>";
    $j = $j - 150;
    echo "残金" . $j . "円です<br>";
}

echo"<hr>";

$j = 100;
do{
    echo "買います<br>";
    $j = $j - 150;
    echo "残金" . $j . "円です<br>";
}while($j>=150)
?>
Q1
3回

Q2
無限ループに陥る