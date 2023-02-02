<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <form method="post">
            お名前:<input type="text" name="fname">
            <input type="submit" value="送信">
        </form>

        <div>
        <?php
            if(isset($_POST['fname'])){
            $id = $_POST['fname'];
            echo "お名前 : ";
            echo htmlspecialchars($id, ENT_QUOTES, 'UTF-8');
            }
        ?>
        </div>
    </body>
</html>