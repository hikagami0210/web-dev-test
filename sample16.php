<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>test</title>
    </head>
    <body>
        <?php
            for($i = 1; $i < 101; $i++){
                if($i %15 == 0) {
                    echo 'ふぃずばず';
                }elseif($i %5 == 0){
                    echo'ばず';
                }elseif($i %3 == 0){
                    echo 'ふぃず';
                }else{
                    echo $i;
                }
            }
        ?>
    </body>
</html>