<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>test</title>
    </head>
    <body>
        <?php
            try{
                $db = new
                PDO('mysql:dbname=mydb;host=localhost;port=8888;charset=utf8','root','root');
                echo'成功';
                $records = $db->query(
                'SELECT * fROM items'
                );
                foreach($records as $i){
                    echo $i['id'];
                }
                }catch(PDOException $e){
                    echo 'DB接続エラー:'.$e->getMessage();
                }

        ?>
    </body>
</html>