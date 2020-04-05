<?php
require('config.php');

$account=$_POST['logingemail'];
$password=$_POST['logingpwd'];

$error_flag=FALSE;


//伺服器連線，選擇資料庫
$con=mysqli_connect($db_host,$db_user,$db_pass);
    
//mysql_error()函數會返回上一個mysql操作產生的文本錯誤信息
    
if (mysqli_connect_errno($con))  
{  
    echo "Unable to connect: " . mysqli_connect_error();  
}  
    
 mysqli_query($con,'SET CHARACTER SET utf8');
 $db_seleted=mysqli_select_db($con,$db_name);
 $sql="SELECT * FROM users";
 $result=mysqli_query($con,$sql);
    
 while($row=mysqli_fetch_array($result)){
    if(empty($_POST['logingemail']&&$_POST['logingpwd'])==FALSE){
     
        //攻擊防範
        $userPassword=$_POST["logingpwd"];
        $userPassword=mysqli_real_escape_string($con,$userPassword);
            
        if($row["mail"]==$account && $row["password"]==$password){
            //如果相符合，則設定 Session，再轉址到選擇頁面
            session_start();
            $_SESSION["mail"]=$_POST["logingemail"];
            $_SESSION["password"]=$_POST["logingpwd"];
            $_SESSION["id"]=$row["id"];
            $_SESSION["name"]=$row["name"];
            $_SESSION["gender"]=$row["gender"];
            $_SESSION["phone"]=$row["phone"];
            $_SESSION["birth"]=$row["birth"];
            
            header('Location: ../loginsuccess.php ');
            
        }
        else{
            $error_flag=TRUE;
            
            
        }
    }else{
        //如果沒收到，繼續顯示網頁内容
       
    }
    
      
}

?>
