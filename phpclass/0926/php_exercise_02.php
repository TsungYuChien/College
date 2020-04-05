<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>成績計算</title>
</head>
<body>

    <?php
        $name=$_GET["name"];
        $php_score=$_GET["PHP"];
        $sql_score=$_GET["SQL"];
        $html_score=$_GET["HTML"];

        $total=$php_score+$sql_score+$html_score;

        echo $name . "<br>";
        echo "你的總分是 : ".$total . "<br>";
        echo "平均分數是 : ".$total/3;

    ?>
    
</body>
</html>