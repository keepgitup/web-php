<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>字串分割</h1>    
<h3>
</h3>
<?php
$str="this,is,a,book";
$array=explode(',',$str);
echo"<pre>";
print_r($array);
echo "</pre>";
$file="photo.jpg";
$split=explode(".",$file);
print_r($split);
if($split[1]=='jpg' || $split[1]=='gif' ||$split[1]=='png'){
    echo '是圖檔';
}
$newFileName='20211025'.rand(10000,99999).".".$split[1];
echo "新檔名為:". $newFileName;
?>
</body>
</html>