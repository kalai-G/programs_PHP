<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    for($i=5;$i>=1;$i--)
    {
        for($j=$i;$j<=5;$j++)
        {
            echo"$j ";
        }
        for($j=1;$j<=$i-1;$j++)
        {
            echo"5 ";
        }
        echo"<br>";
    }
    ?>
    
</body>
</html>