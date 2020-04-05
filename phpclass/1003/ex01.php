<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>成績計算</title>
</head>
<body>

    <?php
        $x=$_GET["X"];
        $y=$_GET["Y"];
        
        echo "<table border='1'>";
        for($i=1; $i<=$x; $i++){
            echo "<tr>";

            for($j=1; $j<=$y; $j++){
                echo "<td>";
                echo " (" . $i . "," . $j . ") ";  
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

    ?>
    
</body>
</html>