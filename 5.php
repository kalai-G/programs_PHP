<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arr=array(10,5,8,20,15);
     $temp=0;
    for($i=0;$i<count($arr);$i++)
    {
        for($j=$i+1;$j<count($arr);$j++)
        {
        
            if($arr[$i]>$arr[$j])
            {
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            
        }
    }
    
    }
    $c=count($arr)-2;
    echo $arr[$c];

    ?>
    
</body>
</html>