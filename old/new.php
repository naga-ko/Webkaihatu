if (式) {
  処理
}

式 : 条件を書く
処理 : 条件が成り立つ(TRUE)の時に実行する

式 : 投稿が1日以内
処理 : NEWマークを表示する

if (投稿が1日以内) {
    NEWマークを表示する
}

<?php
echo "<hr>";
echo "現在の時刻: ";
echo time(); // 現在の時刻を数字に
echo "<hr>";
// p78 5-1
// mktime(時, 分, 秒, 月, 日, 年)
$blog = mktime(15, 0, 0, 4, 18, 2024);
// mktime 日付の数字を作る関数

// time() 現在の時刻の数字
// 86400 : 1日=86400秒

// 投稿が1日以内
// 「投稿日時」と、「現在の時刻から１日引く」
if ($blog > time() - 86400 ) {
   echo "NEW";
} else {
    echo "no";
}

?>
if(式){
    //式がTRUEの場合の処理
} else{
    // 式がFALSEの場合の処理
}