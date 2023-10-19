<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arr=array(1,2,3,4,5);
    $j=0;
    $rev_val=[];
    for($i=count($arr)-1;$i>=0;$i--)
    {
        $rev_val[$j]=$arr[$i];
        $j++;
        
    }
    for($i=0;$i<count($arr);$i++)
    {
        echo $rev_val[$i];
        
    }


    ?>
    
</body>
</html>