<pre>
<?php
$fruits = array("イチゴ","リンゴ","バナナ");
$vegetables = array("きゅうり","かぼちゃ","ジャガイモ");

$foods = array(
    "果物" => $fruits,
    "野菜" => $vegetables
);
foreach($foods as $title => $food){
//var_dump($foods);
foreach($food as $item){
    echo$item;
    echo"<br>";
}
echo"<br>";
}

?>
</pre>