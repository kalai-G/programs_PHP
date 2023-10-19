<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arr1=array(1,2,3,4,5);
    $arr2=array(7,2,9,12,15);
    for($i=0;$i<count($arr2);$i++)
    {
        for($j=$i+1;$j<count($arr2);$j++)
        {
            if($arr2[$i]<$arr2[$j])
            {
                break;
            }
            else
            {
                echo"Not sorted";
            }
        }
    }
    ?>

    
</body>
</html>