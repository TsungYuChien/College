<?php

error_reporting(0);
session_start();

$reserve_href="login.php";
$member="會員登入";
$memberE="Login";

$mail="";
$name="";
$gender="";
$phone="";
$birth="";

if($_SESSION['name']!=null){
    $reserve_href="action/logout.php";
    $member=$_SESSION['name'];
    $memberE="登出";
    
    $mail=$_SESSION["mail"];
    $name=$_SESSION["name"];
    $gender=$_SESSION["gender"];
    $phone=$_SESSION["phone"];
    $birth=$_SESSION["birth"];
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/navBar_footer.css">
    <link rel="stylesheet" href="css/reservestyle.css">
    <script src="_js/jquery.min.js"></script>
    
</head>
<body>
    
    <div class="allcontain">
        
        <div>
           <div id="navBar">
               <ul>
                    <li><a href="index.php">主頁</a></li>
                    <li><a href="menu.php">菜單</a></li>
                    <li><a href="#">訂位</a></li>
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
               
               <div class="reserve_top">
                   <div class="imgshow">
                       <img class="imgres" src="img/restaurant.png">
                   </div>
                   <div class="reserveText">
                       <h3>立即預約</h3>
                       <h2>Reservation</h2>
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
               
               <div class="table">
                  
                   <div class="table_border"></div>
                    
                   <form action="#" autocomplete="off">
                   
                      
                       <div class="pic_show">
                       
                          <div>
                              <p>快加入會員</p>
                               <br>
                               <p>立即享有生日優惠</p>
                          </div>
                          
                       </div>
                       
                       <div class="tableContent">
                           
                           <div class="table_title">
                               <h3>Reservation 填寫預約</h3>
                           </div>
                           
                           <!-- name -->
                           <div class="name">
                               <h4>姓名&nbsp;Name</h4>
                               <input type="text" id="name" class="req" value="<?php echo $name; ?>">
                           </div>
                            
                           <!-- sex -->
                           <div class="sex">
                               
                               <select name="sex" id="sex">
                                   <option value="0" selected>稱謂</option>
                                   <option value="1">先生</option>
                                   <option value="2">女士</option>
                               </select>
                               
                           </div>
                           
                           <div class="phone">
                               <h4>電話&nbsp;Phone</h4>
                               <input type="text" id="phone" class="req" value="<?php echo $phone; ?>">
                           </div>
                           
                           <div class="mail">
                               <h4>電子信箱&nbsp;E-mail</h4>
                               <input type="text" id="mail" class="req" value="<?php echo $mail; ?>">
                           </div>
                           
                           
                           <div class="date">
                               <h4>日期&nbsp;Date</h4>
                               <input type="date" id="date" class="req">
                           </div>
                           
                           <div class="time">
                               <h4>時間&nbsp;Time</h4>
                               <input type="text" id="time" class="req">
                           </div>
                           
                           <div class="adult">
                               <h4>大人&nbsp;Adult</h4>
                               <input type="text" id="adult" class="req">
                           </div>
                           
                           <div class="child">
                               <h4>小孩&nbsp;Child</h4>
                               <input type="text" id="child" class="req">
                           </div>
                           
                           <div class="same"><?php echo $same; ?></div>
                           <input class="btnsend" type="submit" value="Send" >
                           
                           
                       </div>
                   
                   
                   </form>
                
                   
               </div>
               
            </div>
            
            
        </div>
        
 

             <div>
               <!-- Copyright -->
              <div class="footer">
               <p>© 2019 Copyright: Only for learning</p>
              </div>
              <!-- Copyright -->  
             </div> 
        
        
        
    </div>
    
    <script>
    
    var x, i, j, selElmnt, a, b, c;
  /*look for any elements with the class "custom-select":*/
        x = document.getElementsByClassName("sex");
        for (i = 0; i < x.length; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
            var y, i, k, s, h;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            h = this.parentNode.previousSibling;
            for (i = 0; i < s.length; i++) {
                if (s.options[i].innerHTML == this.innerHTML) {
                    s.selectedIndex = i;
                h.innerHTML = this.innerHTML;
                y = this.parentNode.getElementsByClassName("same-as-selected");
                for (k = 0; k < y.length; k++) {
                    y[k].removeAttribute("class");
                }
                this.setAttribute("class", "same-as-selected");
                break;
                }
            }
            h.click();
            });
            b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
        });
    }
    function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
        var x, y, i, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        for (i = 0; i < y.length; i++) {
            if (elmnt == y[i]) {
                arrNo.push(i)
            } else {
                y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < x.length; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide");
            }
        }
    }
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
        document.addEventListener("click", closeAllSelect);
        
        
        $(".reserve").animate({
            
            top: '0%',
            opacity: 0.8
            
        },1500);
        
        $("#navBar").animate({
           
            opacity:1
            
        },1500);
        
        
        //-----------------------------------
        
        
    </script>
    
</body>
</html>