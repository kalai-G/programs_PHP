<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    for($i=1;$i<=7;$i++)
    {
        if($i<=4)
        {
         for($j=1;$j<=$i;$j++)
         {
            $k=$i*$j;
            echo"$k ";
         }
        }
         else
         {
            $a=1;
            for($j=1;$j<=8-$i;$j++)
            {
            $k=$i*$a;
            $a++;

            echo"$k ";
            }
          // $m+=;
    }
        echo"<br>";
    }
    ?>
</body>
</html>