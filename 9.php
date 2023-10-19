<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $student_scores=[array("Alice",95),array("Bob",82),array("eve",88)];
    $sum=0;
    $count=count($student_scores);
    foreach($student_scores as $arr)
    {
        $sum=$sum+$arr[1];
     }
     $average=$sum/$count;
     echo" $average";
    
    ?>
    
</body>
</html>