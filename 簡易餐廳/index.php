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
    <link rel="stylesheet" href="css/indexstyle.css">
    <script src="_js/jquery.min.js"></script>
    
</head>

<body>

    <div class="allcontain">
        
        <div>
           <div id="navBar">
               <ul>
                    <li><a href="#">主頁</a></li>
                    <li><a href="menu.php">菜單</a></li>
                    <li><a href="reserve.php">訂位</a></li>
                    <li><a href="#">關於我們</a></li>
                </ul>
           </div>
           
           
           
            <a class="reserveA" href="<?php echo $reserve_href; ?>">
                <div class="reserve">
                    <img src="img/member.png">
                    <p><?php echo $member; ?></p>
                    <p><?php echo $memberE; ?></p>
                
                </div>
            </a>
            
            
    
           
            <img class="burgerPic" src="img/bread-bun-burger-1639562.jpg">
            
            <div class="mainlogo">
                <img src="img/Jamies.png">
             </div>
           
            
            
        </div>
        
    <!-- slide show
       
        <div class="container">
       
           <div class="slide 1">
               <img src="img/asparagus-barbecue-bbq-675951.jpg" style="width: 100%">
            </div>
           <div class="slide 2">
               <img src="img/burrito-chicken-close-up-461198.jpg" style="width: 100%">
            </div>
           <div class="slide 3">
               <img src="img/close-up-dinner-fish-46239.jpg" style="width: 100%">
            </div>
            
            <a class="prev">&#10094;</a>
            <a class="next">&#10095;</a>
        
        </div>
        
    ->
        
    
    <!--------------------------------------------------------------------->
    
        <div class="content">
            
            <div class="contentText">
               
               <span id="here"></span>
                <h2>品牌經營理念</h2>
                <p><img src="img/caffeine-coffee-cuisine-1528013.jpg">秉持著精心以及創新的服務，帶給顧客歡樂的美食時光，向全世界傳達我們的堅持與理念，創造全新的飲食體驗 </p> 
                
                
                <h2>營業時間</h2>
                <p>11:00~21:00</p>
                <p>10:30~22:00</p>
                
                
                <h2>電話</h2>
                <p>03-123-4567</p>
                
            </div>
            
            
                     
            
        </div>
    
    
     </div>
    
    <script>
        
    $(document).ready(function() {
    
    
        
        $(".reserve").animate({
            
            top: '0%',
            opacity: 0.8
            
        },1500);
        
        $("#navBar").animate({
           
            opacity:1
            
        },1500);
        
        /* slide show
        
        var num=1;
        var slide=document.getElementsByClassName("slide");
        
        $(".slide.1").css("display","block");
        
        $(".next").click(function(){
            num++;
            if(num>slide.length)num=1;
            $(".slide").css("display","none");
            $(".slide."+num.toString()).css("display","block");
            setTimeout(5000);
            
        })
        
        $(".prev").click(function(){
            num--;
            if(num<1)num=slide.length;
            $(".slide").css("display","none");
            $(".slide."+num.toString()).css("display","block");
            setTimeout(5000);
            
        })
        
        setInterval(function() {
            num++;
            if(num>slide.length)num=1;
            $(".slide").css("display","none");
            $(".slide."+num.toString()).css("display","block");
        }, 5000);
        
        */
        //---------------------------------------------------------
        var setArea=$(".content");
        var showHeight=250;
        
        $(window).on('load scroll resize',function(){
            setArea.each(function(){
                var setThis=$(this);
                var areaTop=setThis.offset().top;
                
                if($(window).scrollTop()>(areaTop+showHeight)-$(window).height()){
                    setThis.stop().animate({opacity:"1"},500);
                }else{
                    setThis.stop().animate({opacity:"0"},500);
                }
                
            });
        });
        
        
    });
    
    </script>
    
    
    
    
</body>


</html>