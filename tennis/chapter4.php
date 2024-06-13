<?php

$firstname = '花子';
$lastname = '山田';


if($firstname == '' or $lastname == ''){
    echo "名前が登録されていません";
}else{
    echo "こんにちは、" . $lastname . $firstname . "さん。";
}

?>