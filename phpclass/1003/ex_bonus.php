<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>成績計算</title>
</head>
<body>

    <?php
        $total=$_GET["total"];
        $w=$_GET["width"];
        
        $count=1;
        
        echo "<table border='1'>";
        //for($i=$count; $count<=$total; )
        while($count<=$total){
            echo "<tr>";

            for($j=1; $j<=$w; $j++){
                if($count<=$total){
                    echo "<td><a href='../0926/php_exercise_03.php?N=".$count."'><img src='pic/". (int)($count/10) .".GIF'><img src='pic/". $count%10 .".GIF'></a></td>";
                    $count++;
                }
                else{
                    echo "<td> x </td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";

    ?>
    
</body>
</html>