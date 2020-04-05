<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
   <?php
    
    $N = $_GET["N"];
    
    for($i=0;$i<$N;$i++){
        $num[$i]=0;    
    }
    
    echo "原數字:(".$N."個) <br/>";
    for($i=0;$i<$N;$i++){
        $num[$i]=rand(1,100);
        echo $num[$i];
        if($i!=$N-1 && $i<$N) echo ",";
    }
    
    echo "<br/>";
    echo "由小到大排序結果為: <br/> ";
    
    for($i=0;$i<$N;$i++){
        for($j=0;$j<$N-$i-1;$j++){
            if($num[$j]>$num[$j+1]){
                $temp=$num[$j];
                $num[$j]=$num[$j+1];
                $num[$j+1]=$temp;   
            }
        }
    }
    
    for($i=0;$i<$N;$i++){
        echo $num[$i];
        if($i!=$N-1 && $i<$N) echo ",";
    }
    
    
   ?>
    
</body>
</html>