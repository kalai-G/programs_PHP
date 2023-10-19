<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $inventory=[array("Apple",10),array("Banana",15),array("Orange",8)];
    $find="Orange";
    $q=0;
    foreach($inventory as $item)
    {
        if($item[0]==$find)
        {
            $q=$item[1];
        }

    }
    echo $q;
    ?>
    
</body>
</html>