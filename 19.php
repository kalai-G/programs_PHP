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
        for($j=5;$j>=1;$j--)
        {
            if($j==$i)
            {
                echo"*";
            }
            else{
                echo"$j";
            }
        }
        echo"<br>";

    }
    ?>
    
</body>
</html>