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
        $a=4;
        $n=$i;
        for($j=$i;$j>=1;$j--)
        {
            echo"$n ";
            $n=$n+$a;
            $a--;
        }
        echo"<br>";
    }
    ?>
</body>
</html>