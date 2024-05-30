<?php
$name = $_POST['name'];

$gender = $_POST['gender'];
if($gender_raw == "man"){
    $gender = "男性";
}else if($gender_raw == "woman"){
    $gender = "女性";
}else{
    $gender = "不正な値です";
}
$star = $_POST['star'];
$star = '';
for($i = 0;$i<5;$i++){
    if($i < $star_raw){
        $star .= '★';
    }else{
        $star .= '☆';
    }
}

$other = $_POST['other'];


echo $name;
echo "<hr>";
echo $gender;
echo "<hr>";
echo $star;
echo "<hr>";
echo $other;
echo "<hr>";
?>

<!--
Q1
A 画像のアップロード

Q2
A form

Q3
1<input type="text" name="title">

2<select>
    <option name="fruit" value="banana"></option>
    <option name="fruit" value="apple"></option>
    <option name="fruit" value="orange"></option>
 </select>
3<input type="radio" name="gender" value="male">男性
 <input type="radio" name="gender" value="female">女性
 -->
