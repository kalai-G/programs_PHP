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
        for($j=$i;$j<=5;$j++)
        {
            echo"$j ";
        }
        $k=4;
        for($j=1;$j<=5-$i;$j++)
        {
            echo"$k ";
            $k--;
        }
        echo"<br>";
    }
    ?>
    
</body>
</html>