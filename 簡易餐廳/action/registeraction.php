<?php

//--------------------------------------------------------------------//
error_reporting(0);
session_start();
require('config.php');

$regName=$_POST["name"];
$regGender=$_POST["gender"];
$regPhone=$_POST["phone"];
$regBirth=$_POST["birth"];
$regMail=$_POST["registermail"];
$regPwd=$_POST["registerpwd"];

$_SESSION["mail"]=$regMail;
$_SESSION["password"]=$regPwd;
$_SESSION["name"]=$regName;
$_SESSION["gender"]=$regGender;
$_SESSION["phone"]=$regPhone;
$_SESSION["birth"]=$regBirth;


//伺服器連線，選擇資料庫
$con=mysqli_connect($db_host,$db_user,$db_pass);
    
//mysql_error()函數會返回上一個mysql操作產生的文本錯誤信息
    
if (mysqli_connect_errno($con))  
{  
    echo "Unable to connect: " . mysqli_connect_error();  
}  
    
mysqli_query($con,'SET CHARACTER SET utf8');
$db_seleted=mysqli_select_db($con,$db_name);
$sql="INSERT INTO users(name,gender,phone,birth,mail,password) VALUES ('$regName','$regGender','$regPhone','$regBirth','$regMail','$regPwd')";

$result=mysqli_query($con,$sql) or die ("無法新增".mysqli_error($con));


while($row=mysqli_fetch_array($result)){
    
            
}

header('Location: ../registersuccess.php');

?>
