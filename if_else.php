<?php //p82 5-2
$age = 23; //ここの数字を変えてみる

/*
if (20才以上){
    購入できる
}else{
    購入できない
}*/

/*
if (式１){
    式1がTRUEのときの処理
}else if(式２){
    式1はFALSEだが、式2がTRUE
}else if(式3){
    式1はFALSEで式2もFALSEだが、式3がTRUE
}*/

if($age >= 20){
    echo "お買い上げありがとうございます";
}else{
    echo "ご購入できません";
}
?>
