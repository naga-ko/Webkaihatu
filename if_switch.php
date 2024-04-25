switch(値){
    case 条件 :
        処理
        break;
    case
        ...
        break;

    default:
        上のどれにも当てはまらない場合
}
<?php
$i = 3;
if($i == 0){
echo "switch構文:iは0に等しい<br>";
}else if($i == 1){
echo "switch構文:iは1に等しい<br>";
}else{
echo "switch構文:iはどちらでもない<br>";
}

switch ($i){
    case 0:
        echo"switch構文:iは0に等しい<br>";
        break;
    case 1:
        echo"switch構文:iは1に等しい<br>";
        break;
    default:
        echo"switch構文:iはどちらでもない<br>";
}