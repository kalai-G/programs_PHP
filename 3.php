<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arr=array(10,20,30,40,50);
    $sum=0;
    $count=count($arr);
    for($i=0;$i<$count;$i++)
    {
        $sum=$sum+$arr[$i];
     }
     $average=$sum/$count;
     echo" $average";
    ?>
    
</body>
</html>