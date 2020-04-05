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
    <link rel="stylesheet" href="css/menustyle.css">
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
               
               <div class="bg"></div>
               
               <div class="menu_top">
                   <div class="imgshow">
                       <img class="imgres" src="img/menucartoon.png">
                   </div>
                   <div class="menuText">
                       <h3>菜單</h3>
                       <h2>Menu</h2>
                       <p>
                       請詳細填寫下方表格，並確認核對資訊，以免損及相關權益，本餐廳將在收到表單與您聯繫，並且確認您的訂位。若為本餐廳之會員，將優先為您安排位置。
                       <br>
                       <br>
                       加入會員！立即享有來店禮，若為當月壽星，再享免服務費優惠！！
                       <br>
                       <br>
                       </p>
                   </div>
               </div>
               
               <div class="menucontent">
                 
                 <div class="menucontent_border"></div>
                  
                  <div class="leftobject">
                      <div class="hamburger">
                          <img src="img/icons8-hamburger-filled-100.png">
                          <p>漢堡</p>
                      </div>
                  
                      <div class="fries">
                          <img src="img/icons8-fried-chicken-filled-100.png">
                          <p>炸物</p>
                      </div>
                  
                      <div class="drink">
                          <img src="img/icons8-soda-filled-100.png">
                          <p>飲料</p>
                      </div>
                  </div>
                  
                 <div class="rightobject">
                 
                 <div class="back">上一頁</div>
                 
                  <div class="ham con">
                      
                      <div>
                          <div>
                              紐奧良狂牛堡&nbsp;&nbsp;&#36;170
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <span class="a1miner btn">&#45;</span>
                              &nbsp;&nbsp;
                              <span class="a1">0</span>
                              &nbsp;&nbsp;
                              <span class="a1add btn">&#43;</span>
                          </div>
                      </div>
                      
                      <div>
                          <div>
                              雞會降臨之時&nbsp;&nbsp;&#36;160
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <span class="a2miner btn">&#45;</span>
                              &nbsp;&nbsp;
                              <span class="a2">0</span>
                              &nbsp;&nbsp;
                              <span class="a2add btn">&#43;</span>
                          
                          </div>
                          
                      </div>
                      
                      <div>
                          <div>
                              而我是一隻魚&nbsp;&nbsp;&#36;160
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <span class="a3miner btn">&#45;</span>
                              &nbsp;&nbsp;
                              <span class="a3">0</span>
                              &nbsp;&nbsp;
                              <span class="a3add btn">&#43;</span>
                          </div>
                      </div>
                      
                      
                  </div>
                  
                  <div class="fri con">
                      <div>
                          <span>愛的是非對錯火焰球&nbsp;&nbsp;&#36;80</span>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <span class="b1miner btn">&#45;</span>
                          &nbsp;&nbsp;
                          <span class="b1">0</span>
                          &nbsp;&nbsp;
                          <span class="b1add btn">&#43;</span>
                      </div>
                      
                      <div>
                          <span>火鳳凰&nbsp;&nbsp;&#36;60</span>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <span class="b2miner btn">&#45;</span>
                          &nbsp;&nbsp;
                          <span class="b2">0</span>
                          &nbsp;&nbsp;
                          <span class="b2add btn">&#43;</span>
                      </div>
                      
                      <div>
                          <span>光明會的陰謀&nbsp;&nbsp;&#36;40</span>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <span class="b3miner btn">&#45;</span>
                          &nbsp;&nbsp;
                          <span class="b3">0</span>
                          &nbsp;&nbsp;
                          <span class="b3add btn">&#43;</span>
                      </div>
                  </div>
                  
                  <div class="dri con">
                      <div>
                          <span>摩斯拉之怒&nbsp;&nbsp;&#36;50</span>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <span class="c1miner btn">&#45;</span>
                          &nbsp;&nbsp;
                          <span class="c1">0</span>
                          &nbsp;&nbsp;
                          <span class="c1add btn">&#43;</span>
                      </div>
                      
                      <div>
                          <span>血在流&nbsp;&nbsp;&#36;40</span>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <span class="c2miner btn">&#45;</span>
                          &nbsp;&nbsp;
                          <span class="c2">0</span>
                          &nbsp;&nbsp;
                          <span class="c2add btn">&#43;</span>
                      </div>
                      
                      <div>
                          <span>雪中紅&nbsp;&nbsp;&#36;40</span>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <span class="c3miner btn">&#45;</span>
                          &nbsp;&nbsp;
                          <span class="c3">0</span>
                          &nbsp;&nbsp;
                          <span class="c3add btn">&#43;</span>
                      </div>
                  </div>
                  
                  
                  
                  <div class="howmuch">
                      <button class="allcount">計算價格</button>
                      <p>總共 : 0 元</p>
                      
                  </div>
                  
                </div>
                   
               </div>
               
               
            </div>
            
            
        </div>
        
 

              
        
        
        
        
    </div>
    
    <script>
        
    $(document).ready(function() {
        
        
        $(".reserve").animate({
            
            top: '0%',
            opacity: 1
            
        },1500);
        
        $("#navBar").animate({
           
            opacity:1
            
        },1500);
        
        
        $(".ham").hide();
        $(".fri").hide();
        $(".dri").hide();
        
        //click-------------------------------------------------
        
        $(".back").click(function(){
            $(".ham").hide();
            $(".fri").hide();
            $(".dri").hide();
            
            $(".hamburger").animate({
                
                width:"100px"
                
            },1000,function(){$(this).show();});
            $(".fries").animate({
                
                width:"100px"
                
            },1000,function(){$(this).show();});
            $(".drink").animate({
                
                width:"100px"
                
            },1000,function(){$(this).show();});
        });
        
        $(".hamburger").click(function(){
            
            $(".fries p").show();
            $(".drink p").show();
            
            $(".fries").animate({
                
                width:"0px"
                
            },1000,function(){
                $(this).hide();
            });
            $(".drink").animate({
                
                width:"0px"
                
            },1000,function(){
                $(this).hide();
            });
            $(".ham").css("display","block");
            $(".fri").css("display","none");
            $(".dri").css("display","none");
        });
        
        $(".fries").click(function(){
            
            $(".hamburger p").show();
            $(".drink p").show();
            
            $(".hamburger").animate({
                
                width:"0px"
                
            },1000,function(){
                $(this).hide();
            });
            $(".drink").animate({
                
                width:"0px"
                
            },1000,function(){
                $(this).hide();
            });
            $(".ham").css("display","none");
            $(".fri").css("display","block");
            $(".dri").css("display","none");
            
        });
        
        $(".drink").click(function(){
            
            $(".hamburger p").show();
            $(".fries p").show();
            
            $(".hamburger").animate({
                
                width:"0px"
                
            },1000,function(){
                $(this).hide();
            });
            $(".fries").animate({
                
                width:"0px"
                
            },1000,function(){
                $(this).hide();
            });
            $(".ham").css("display","none");
            $(".fri").css("display","none");
            $(".dri").css("display","block");
        });
        
        
        //-----------------------------------------------------------
        //calculate
        
        var a1=0,a2=0,a3=0;
        var b1=0,b2=0,b3=0;
        var c1=0,c2=0,c3=0;
        var allcount=0;
        
        $(".a1miner").click(function(){
            a1--;
            $(".a1").html(a1.toString());
        });
        
        $(".a1add").click(function(){
            a1++;
            $(".a1").html(a1.toString());
        });
        
        $(".a2miner").click(function(){
            a2--;
            $(".a2").html(a2.toString());
        });
        
        $(".a2add").click(function(){
            a2++;
            $(".a2").html(a2.toString());
        });
        
        $(".a3miner").click(function(){
            a3--;
            $(".a3").html(a3.toString());
        });
        
        $(".a3add").click(function(){
            a3++;
            $(".a3").html(a3.toString());
        });
        
        //--
        $(".b1miner").click(function(){
            b1--;
            $(".b1").html(b1.toString());
        });
        
        $(".b1add").click(function(){
            b1++;
            $(".b1").html(b1.toString());
        });
        
        $(".b2miner").click(function(){
            b2--;
            $(".b2").html(b2.toString());
        });
        
        $(".b2add").click(function(){
            b2++;
            $(".b2").html(b2.toString());
        });
        
        $(".b3miner").click(function(){
            b3--;
            $(".b3").html(b3.toString());
        });
        
        $(".b3add").click(function(){
            b3++;
            $(".b3").html(b3.toString());
        });
        //--
        $(".c1miner").click(function(){
            c1--;
            $(".c1").html(c1.toString());
        });
        
        $(".c1add").click(function(){
            c1++;
            $(".c1").html(c1.toString());
        });
        
        $(".c2miner").click(function(){
            c2--;
            $(".c2").html(c2.toString());
        });
        
        $(".c2add").click(function(){
            c2++;
            $(".c2").html(c2.toString());
        });
        
        $(".c3miner").click(function(){
            c3--;
            $(".c3").html(c3.toString());
        });
        
        $(".c3add").click(function(){
            c3++;
            $(".c3").html(c3.toString());
        });
        
        
        
        $(".allcount").click(function(){
            allcount=(a1*170)+(a2*160)+(a3*160)+(b1*80)+(b2*60)+(b3*40)+(c1*50)+(c2*40)+(c3*40);
            allcount=allcount*1.1;
            allcount=Math.round(allcount);
            $(".howmuch p").html("總共 : "+allcount.toString()+" 元");
        });
        
        
    });
        
    </script>
    
    
    
    
</body>


</html>