<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>test</title>
    </head>
    <body bgcolor="#10100E" text="#ccccc">
        <?php
        date_default_timezone_set('Asia/Tokyo');
        echo "PHPでの時間表示<br>";
        echo date('Y年m月d日 H:i:s', time());
        ?>
    </body>
</html>