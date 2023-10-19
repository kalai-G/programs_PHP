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
    $arr2=array(3,4,5,6,7);
    for($i=0;$i<count($arr1);$i++)
    {
        for($j=0;$j<count($arr1);$j++)
        {
            if($arr1[$i]==$arr2[$j])
            {
                echo $arr1[$i];
                echo"<br>";
            }
        
        }
    }
    ?>

    
</body>
</html>