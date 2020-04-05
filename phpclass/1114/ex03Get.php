<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <h2>表單欄位-PHP接收畫面</h2>
    <hr>
    
    
    <?php

        $usrname=$_POST["usrname"];
        $usrpsd=$_POST["usrpsd"];
        $address=$_POST["address"];
        $sex=$_POST["sex"];
        $web=$_POST["web"];
        
        echo "姓名：".$usrname."<br>";
        echo "密碼：".$usrpsd."<br>";
        echo "住址：".$address."<br>";
        echo "性別：".$sex."<br>";
        echo "喜愛網站：".$web."<br>";
    
    
        echo "<a href=ex03Send.html>上一頁</a>";
    
    
    ?>
    
    
</body>
</html>