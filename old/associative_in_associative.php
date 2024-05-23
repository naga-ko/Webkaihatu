<pre>
    <?php
    $result = array(
        "math" => 90,
        "English" => 80
    );
    $frends = array("Haruki" => $result);
    var_dump($frends);

    $frends["Kaoru"] = array("math" => 95,"English" => 85);
    var_dump($frends);
    echo "Kaoru English" . $frends["Kaoru"]["English"] . "<br>";
    echo "Haruki math" . $frends["Haruki"]["math"] . "<br>";
    ?>
</pre>

Q1
=>

Q2
$result['english']