<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>test</title>
    </head>
    <body>
        <?php
        session_start();
        echo $_SESSION['ID'];
        ?>
    </body>
</html>