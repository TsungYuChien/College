<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>表單應用</title>
</head>
<body>
  
   <h2 align="center">表單應用-HTML畫面</h2>
   <hr>
   
   <b>個人資料</b>
   <form action="ex04.php" method="post">
       
       您的姓名：<input type="text" name="usrname"><br>
       您的密碼：<input type="password" name="usrpsd"><br>
       住址：<input type="text" name="address" size="50"><br>
       性別：<input type="radio" name="sex" value="男" checked="true">男
            <input type="radio" name="sex" value="女">女<br>
        
       <br>
       <input type="submit" value="送出資料">
       <input type="reset" value="清除資料">
       
   </form>

   <br><br><br>

   <?php

        $usrname=$_POST["usrname"];
        $usrpsd=$_POST["usrpsd"];
        $address=$_POST["address"];
        $sex=$_POST["sex"];
        
        echo "姓名：".$usrname."<br>";
        echo "密碼：".$usrpsd."<br>";
        echo "住址：".$address."<br>";
        echo "性別：".$sex."<br>";
    
        echo "<a href=ex04.php>上一頁</a>";
    
    ?>
    
</body>
</html>