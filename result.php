<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <div>お名前：
        <?php
            if(isset($_POST['fname'])){
            $id = $_POST['fname'];
            echo $id;
            }
        ?>
        </div>
    </body>
</html>