<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>test</title>
    </head>
    <form action-="for365.php" method="POST">
        <p>
            <label for="height">身長: </label>
            <input id="height" typez="text" name="height" />
        </p>
        <p>
            <label for="weight">身長: </label>
            <input id="weight" typez="text" name="weight" />
        </p>
        <p>
            <input type='submit' value="送信する"/>
        </p>
        <p>
        <?php
            $height = (float) htmlspecialchars($_POST['height']);
            $weight = (float) htmlspecialchars($_POST['weight']);

            $goal_weight = $height * $height * 22;
            $difference = abs($goal_weight - $weight);

            echo '体重'. $weight. 'kg<br>';
            echo '理想'. $goal_weight. 'kg<br>';
            echo '後'.   $difference. 'kgで適正体重です';
        ?>
        </p>
    </body>
</html>