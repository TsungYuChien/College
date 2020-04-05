<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <center><h2>登入系統</h2></center>
    <hr>
    
    <center>
       <?php
        
        if(!isset($_SESSION)){
                session_start();
        }
        
        $usrname=$_SESSION["user_ID"];
        
        
        echo $usrname." 您好!!! 歡迎登入本系統<hr/>";
        
            
        ?>
    
        <a href="ex02.php">回登入頁面</a> 
    </center>
    
    
    
</body>
</html>