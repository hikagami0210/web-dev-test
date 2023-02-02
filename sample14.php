<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>test</title>
    </head>
    <body>
        <?php
            try{
                $dbh = new PDO('mysql:dbname=mydb;host=localhost;port=8888;charset=utf8','root','root');

                $sql = 'SELECT * fROM items';

                $stmt = $dbh->query($sql);

                $sqls = "INSERT INTO items (id, name) VALUES (1000, '練習データ')";

                $stmt-> execute();





                foreach($records as $i){
                    echo $i['id'];
                }
                }catch(PDOException $e){
                    echo 'DB接続エラー:'.$e->getMessage();
                }

        ?>
    </body>
</html>