<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <h2 align="center">表單欄位-PHP接收畫面</h2>
    <hr>
    
    <center>
    <?php

        $name=$_GET["name"];
        $like=$_GET["like"];
        echo $name . " 歡迎您! <br> 您喜歡的課程是 " . $like . "!";
    
    
    ?>
    </center>
    
    
</body>
</html>