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
        $c=1;
        for($j=1;$j<=5-$i;$j++)
        {
            echo"&nbsp;&nbsp";
        }
        for($j=1;$j<=2*$i-1;$j++)
        {
            echo"$c";
            $c++;
        }
        echo"<br>";
    }
    ?>
    
</body>
</html>