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
        $interest=$_POST["interest"];
        
        echo "姓名：".$usrname."<br>";
        echo "密碼：".$usrpsd."<br>";
        echo "住址：".$address."<br>";
        echo "性別：".$sex."<br>";
        echo "喜愛網站：".$web."<br>";
    
        //上課做到這裡，但是沒辦法輸出所有有選的項目
//        echo "興趣：";
//        for($i=0;$i<count($interest);$i++){
//            echo $interest[$i]." ";
//        }
        echo "興趣：".$interest."<br>";
    
        echo "<br>";
        echo "<a href=ex04Send.html>上一頁</a>";
    
    
    ?>
    
    
</body>
</html>