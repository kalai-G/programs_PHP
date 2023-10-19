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
        for($j=1;$j<=$i;$j++)
        {
            if($j%2!=0)
            {
                echo"1 ";
            }
            else
            {
                echo"0 ";
            }
        }
        echo"<br>";
    }
    ?>
    
</body>
</html>