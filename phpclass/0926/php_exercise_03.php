<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>成績計算</title>
</head>
<body>

    <?php
        $num=$_GET["N"];
        
        if($num<=1)
            echo "輸入數值需要大於1!";
        else{
            $sum=0;
            for($i=1;$i<=$num;$i++)
                $sum += $i;
            
            echo "從1加到".$num."的和為 : ".$sum;

        }

    ?>
    
</body>
</html>