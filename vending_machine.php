<pre>
<?php
function vending_machine($price,$juice){
    if($price >= 120){
        $message = $juice ."を購入しました<br>";
    }else{
        $message = $juice ."を購入できません<br>";
    }
    return $message;
}
echo vending_machine(120,"オレンジジュース");
echo vending_machine(100,"リンゴジュース");
?>
</pre>