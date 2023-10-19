<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for($i=1;$i<=4;$i++)
    {
        $c=1;
        for($j=4;$j>=$i;$j--)
        {
            echo"$c";
            $c++;
        }
        for($j=1;$j<=$i-1;$j++)
        {
            echo"*";
            
        }
        for($j=1;$j<=$i-1;$j++)
        {
            echo"*";
            
        }
        for($j=(5-$i);$j>=1;$j--)
        {
            echo"$j";
            
        }
        echo"<br>";
    }
    ?>
    
</body>
</html>