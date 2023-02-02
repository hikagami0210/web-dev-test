<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>test</title>
    </head>
    <body>

        <form action="kadai3.php" method="POST">
        <p>mail : <input type="text" name="email"></p>
        <p>pass : <input type="text" name="pass"></p>
        <input type="submit" value="送信">
        </form>


        <?php
        if (isset($_POST['email'])){
            try{
                $db = new PDO(
                    'mysql:dbname=test;host=localhost;port=8889;charset=utf8',
                    'root',
                    'root'
                );
                $stmt = $db->prepare('SELECT * FROM testtable WHERE email = :email');
                $email = htmlspecialchars($_POST['email']);

                $stmt->execute(array(':email'=> $email));

                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                // var_dump($result);

                if ($_POST['pass'] == $result['password']) {
                    session_start();
                    $_SESSION['user_session'] = $result['session'];
                    echo "ログイン成功";
                    echo "<a href='kadai3-check-login.php'>確認する</a>";
                } else {
                    echo "ログイン失敗";
                }
            } catch (Exception $e){
                echo "データベースの接続に失敗";
                echo $e->getMessage();
                die();
            }
        }
        ?>
    </body>
</html>