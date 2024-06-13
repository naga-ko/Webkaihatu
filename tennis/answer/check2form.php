<?php include ('check2_data.php');

$message = '好きな食べ物は';

?>
<html>
<head>
	<meta charset="UTF-8">
	<title>フォーム</title>
</head>
<body>
<h1>フォーム</h1>
<?php
echo $message;
if (isset($_POST['fruit'])) {
	$fruit = $_POST['fruit'];
	echo $fruits[$fruit];
} else {
	echo '選択されていません。';
}
?>

</body>
</html>
