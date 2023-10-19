<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arr=array(2,4,3,7,1,5,9);
    $target=6;
    for($i=0;$i<count($arr);$i++)
    {
        for($j=$i+1;$j<count($arr);$j++)
        {
            if($arr[$i]+$arr[$j]==$target)
            {
                echo $arr[$i]. "+" . $arr[$j]. "=" .$target;
                echo"<br>";
            }
        }
       
    }
  
    ?>


    
</body>
</html>