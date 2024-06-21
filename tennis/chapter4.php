<?php
$firstname = '花子';
$lastname = '山田';

if ($firstname != "" && $lastname != "") {
  echo "こんにちは、" . $firstname . $lastname . "さん。";
} else if ($firstname != "" && $lastname == "") {
  echo "こんにちは、" . $firstname  . "さん。名字を教えて下さい。";
} else if ($lastname != "" && $firstname =="") {
  echo "こんにちは、" . $lastname  . "さん。下の名前を教えて下さい。";
} else if ($firstname == "" && $lastname == "") {
  echo "名前が登録されていません。";
}
  // (3) 教科書5章2と教科書4章4
// $firstname と $lastname の両方にデータがあれば、
//「こんにちは、山田花子さん。」のように表示させたい
// $firstname はあるが$lastnameがデータ無しならば、
//「こんにちは、花子さん。苗字を教えてください」のように表示させたい
// $lastname はあるが$firstnameがデータ無しならば、
//「こんにちは、山田さん。下の名前を教えてください」のように表示させたい
// どちらもデータ無しならば、
//「名前が登録されていません。」のように表示させたい


?>