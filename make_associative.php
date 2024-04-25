<?php
$result1 = array(
    "japanese" => 80,
    "math" => 75,
    "science" => 90
);
var_dump($result1);
echo "math:" . $result1["math"] . "<br>";
echo"japanese:" . $result1["japanese"] . "<br>";

$result2 = [
    "history" => 85,
    "English" => 80
];
var_dump($result2);
echo "history:" . $result2["history"] . "<br>";