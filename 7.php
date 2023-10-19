<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for($i=1;$i<=5;$i++)
    {
        //$k=5;
        for($j=1;$j<=5-$i;$j++)
        {
            echo"&nbsp;&nbsp;&nbsp";
        }
     //   if($i<6)
        
            for($j=1;$j<=$i;$j++)
           {
               echo"* ";
            }
            echo"<br>";
        }

        
        /*else{
            for($j=1;$j<=$i-$k;$j++)
            {
               echo"&nbsp;&nbsp";
            }
            for($j=1;$j<=$k-$j;$j++)
            {
               echo"*";
             }
        }*/
        for($i=1;$i<=5;$i++)
    {
       
        for($j=1;$j<=$i-1;$j++)
        {
            echo"&nbsp;&nbsp;&nbsp";
        }
        for($j=$i;$j<=5;$j++)
        {
            echo"* ";
        }
        echo"<br>";
    }

        
    ?>
    
</body>
</html>