<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>點數計次</title>
</head>
<body>
    <?php
    
        $N=$_GET["N"];
        for($i=0;$i<6;$i++){
            $dice[$i]=0;
        }
    
        for($i=0;$i<$N;$i++){
            $r=rand(1,6);
            $dice[$r-1]++;
        }
    
        echo "投擲次數:".$N."次<br/>";
        echo "<br/>";
        for($i=0;$i<6;$i++){
            echo "點數為". ($i+1) .":出現". $dice[$i]. "次<br/>";
        }
    ?>
</body>
</html>