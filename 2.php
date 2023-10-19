<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arr=array(1,2,2,3,4,4,5);
    for($i=0;$i<count($arr);$i++)
    {
        for($j=$i+1;$j<count($arr);$j++)
        {
            if($arr[$i]==$arr[$j])
            {
                $arr[$j]="";
                
            }
            
        }
    }
   for($i=0;$i<count($arr);$i++)
   {
    echo $arr[$i];
   }
       



    ?>
</body>
</html>