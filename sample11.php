<?php

$img_name = $_FILES['image']['name'];
$img_size = $_FILES['image']['size'];
$img_type = $_FILES['image']['type'];
$img_tmp = $_FILES['image']['tmp_name'];
//画像を保存
move_uploaded_file($_FILES['image']['tmp_name'], './image-file/' . $img_name);

echo "ファイル名  $img_name  <br>";
echo "ファイルサイズ  $img_size  <br>";
echo "ファイルタイプ  $img_type  <br>";
echo "ファイル場所  $img_tmp <br>";

echo '<img src="./image-file/'.$img_name.'">';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    img {
    width: 400px;
    }
    </style>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <p>写真: <input type="file" name="image"></p>
        <input type="submit" name="upload" value="送信">
    </form>
</body>
</html>