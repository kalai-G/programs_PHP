<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n=7;
    for($i=1;$i<=7;$i++)
    {
      //  $c='A';
      //  $count=$rows;
        for($j=0;$j<=$i;$j++)
        {
            echo"&nbsp;&nbsp";
        }
        for($j=0;$j<=$n-$i;$j++)
        {
            echo chr(65+$j);
          //  $c++;
        }
        //$count=$c+$count;
        for($j=$n-$i;$j>=0;$j--)
        {
            echo chr(65+$j);
            //--$count;
        }
        echo"<br>";
    }
    ?>
    
</body>
</html>