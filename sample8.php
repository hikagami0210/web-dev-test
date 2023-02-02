<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>test</title>
    </head>
    <body>
        <?php
            $ejkougo=array(
                "apple"=>"リンゴ",
                "lemon"=>"レモン",
                "grape"=>"ブドウ",
                "tomato"=>"トマト"
            );
            foreach($ejkougo as $key => $value){
                echo"英語:$key<br>日本語;$value<br>";
            }
        ?>
    </body>
</html>