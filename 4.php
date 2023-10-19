<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arr=array(3,3,4,2,4,4,2,4,4);
    $count1=0;
    $d=count($arr)/2;
    for($i=0;$i<count($arr);$i++)
    {
        $count=0;
        for($j=$i;$j<count($arr);$j++)
        {
            if($arr[$i]==$arr[$j])
            { 
                $count++;
                if($count>=$d)
                {
                   echo $arr[$i];
                   break;
                }
            }
            
        }
    
        
    }
    
    


?>
    
</body>
</html>