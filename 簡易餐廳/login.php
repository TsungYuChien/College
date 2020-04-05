<?php

error_reporting(0);
session_start();

$reserve_href="login.php";
$member="會員登入";
$memberE="Login";

if($_SESSION['name']!=null){
    $reserve_href="action/logout.php";
    $member=$_SESSION['name'];
    $memberE="登出";
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/navBar_footer.css">
    <link rel="stylesheet" href="css/loginstyle.css">
    <script src="_js/jquery.min.js"></script>
    
</head>

<body>

    <div class="allcontain">
        
        <div>
           <div id="navBar">
               <ul>
                    <li><a href="index.php">主頁</a></li>
                    <li><a href="menu.php">菜單</a></li>
                    <li><a href="reserve.php">訂位</a></li>
                    <li><a href="index.php#here">關於我們</a></li>
                </ul>
           </div>
           
            
            <a class="reserveA" href="<?php echo $reserve_href; ?>">
                <div class="reserve">
                    <img src="img/member.png">
                    <p><?php echo $member; ?></p>
                    <p><?php echo $memberE; ?></p>
                
                </div>
            </a>
            
            
            <div class="content">
               
               <div class="input">
                  
                  <div class="inputCover">
                        <img src="img/icons8-unlock-100.png">
                    </div>
                  
                   <form action="action/loginaction.php" method="post">
               
                
                   <h2>會員登入</h2>
                   
                    <input type="text" name="logingemail" value="" placeholder="信箱" class="">
                    <input type="password" name="logingpwd" placeholder="密碼" class="">
                    
                    <input class="" type="submit" value="login" >
    
                    <div class="regNew">
                         <h3>註冊新帳號</h3>
                     </div>
                    
                     </form>
                     
                     
                     
 
                 </div>
                 
                 
                 <div class="fillin">
                    
                    <div class="fillinCover">
                        <img src="img/icons8-add-user-male-filled-100.png">
                    </div>
                    
                     <form action="action/registeraction.php" method="post">
                     
                         
                         <h2>會員註冊</h2>
                         
                         <span id="nametxt">姓名&nbsp;</span>
                         <input type="text" name="name" value="" placeholder="姓名" class="" disabled>
                         
                         <input type="radio" name="gender" value="Male" disabled>
                             <label>先生</label>
                         <input type="radio" name="gender" value="Female" disabled>
                             <label>女士</label>
                             <p></p>
                            
                         
                         <span>手機&nbsp;</span>
                         <input type="text" name="phone" value="" placeholder="手機" class="" disabled>
                            
                         <span>生日&nbsp;</span>
                         <input type="date" name="birth" value="" class="" disabled> 
                            
                         <span>信箱&nbsp;</span> 
                         <input type="text" name="registermail" value="" placeholder="此信箱將作為帳號" class="" disabled>
                         
                         <span>密碼&nbsp;</span>
                         <input type="password" name="registerpwd" placeholder="密碼" class="" disabled>
                         
                         <span>確認密碼&nbsp;</span>
                         <input type="password" placeholder="確認密碼" class="" disabled>
                         
                         <p></p>
                         
                         <input class="" type="submit" value="Register" disabled>
                         
                         <div class="backtologin">
                             <h3>已經有帳號了</h3>
                         </div>
                         
                         
                     </form>
                     
                     
                     
                     
                 </div>
                
                
                
            </div>
    
           
            
           
            
            
        </div>
        
        
    
    <!--------------------------------------------------------------------->
    
        
    
     </div>
    
    <script>
        
    $(document).ready(function() {
        
        $(".inputCover").hide();
        
        $(".reserve").animate({
            
            top: '0%',
            opacity: 0.8
            
        },1500);
        
        $("#navBar").animate({
           
            opacity:1
            
        },1500);
        
        
        $('.regNew h3').click(function(){
            
            
            $(".fillinCover").animate({
                height: "0px"
            },1000,  function(){
                $(this).hide();
                $(".inputCover").show();
                $(".inputCover").animate({
                    height: "400px"
                },1000);  
            });
            
            
            
            $('.input input').prop('disabled',true);
            $('.fillin input').prop('disabled',false);
                           
            
        });
        
        
        $('.backtologin h3').click(function(){
            
            $(".inputCover").animate({
                height: "0px"
            },1000, function(){
                $(this).hide();
                $(".fillinCover").show();
                $(".fillinCover").animate({
                    height: "400px"
                },1000);
            });
            
            $('.fillin input').prop('disabled',true);
            $('.input input').prop('disabled',false);
            
            
        });
        
        
        
        
        
    });
        
    </script>
    
    
    
    
</body>


</html>