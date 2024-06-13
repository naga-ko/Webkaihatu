<html>
    <head>
        <title>フォーム</title>
    </head>
    <body>
        <h1>フォーム</h1>
        <form action="check2form.php" method="post">
            <p>好きな果物を選んでください。:</p>
            <?php
            foreach ($fruits as $key => $val) {
                echo '<input type="radio" name="fruit" value="' . $key . '">';
                echo $val;
            }
            ?>
            <select name="xxx">
            <?php
            foreach ($fruits as $key => $val) {
                echo '<option value="' . $key . '">';
                echo $val;
            }
            ?>
        </form>
    </body>
</html>