<pre>
    <?php
    $result = array(
        //キー=>値で設定する
        "japanese" => 80,
        "math" => 75,
        "science" => 90
    );
    var_dump($result);

    $result["math"] = 85;//キーがある場合：既存のデータに上書き
    var_dump($result);

    $result["music"] = 90;//キーがない場合：追加される
    var_dump($result);
    //キーは、大文字小文字を区別する
    //mathとMathは別のキー
    ?>
</pre>