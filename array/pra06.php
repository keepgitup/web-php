<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>反轉陣列</title>
</head>
<body>
    <h1>反轉陣列</h1>
<?php
$a=[2,4,6,1,8];
echo "<pre>";
print_r($a);
echo "<pre>";

for($i=0;$i<count($a);$i++){
$t=$a[$i];
$a[$i]=$a[count($a)-1-$i];
$a[count($a)-1-$i]=$t;
}

echo "<pre>";
print_r ($t);
echo "</pre>";

$ar=array('a','x','c','2');
print_r(array_reverse($ar));
echo "<pre>";
print_r($ar);
echo "</pre>";

?>


</body>
</html>
