<?php
include ('check2_data.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newFruit = $_POST['newFruit'];
    if (!empty($newFruit)) {
        $fruits[] = $newFruit;
    }
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>フォーム</title>
</head>
<body>
<h1>フォーム</h1>
<form action="check2form.php" method="post">
    <p>好きな果物を選んでください。
    </p>
    <?php
    echo '<select name="fruit">';
    foreach ($fruits as $key => $val) {
        echo '<option value="' . htmlspecialchars($key) . '">' . htmlspecialchars($val) . '</option>';
    }
    echo '</select>';
    ?>

    <input type="submit" value="送信">
</form>
</body>
</html>
