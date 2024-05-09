<pre>
<?php
$numbers = array(2,4,6);
foreach($numbers as $key => $value){
    $numbers[$key] = $value * 10;
}
var_dump($numbers);
?>
</pre>