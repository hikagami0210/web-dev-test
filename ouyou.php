<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>test</title>
    </head>
    <body bgcolor="#10100E" text="#ccccc">
        <?php
        for($i=0;$i <= 365;$i++){
        $day=date("n/j(D)",strtotime('+'.$i.'day'));
        print($day."\n");
        }
        ?>
    </body>
</html>