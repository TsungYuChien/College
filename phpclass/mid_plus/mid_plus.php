<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>期中加分</title>
</head>
<body>
   
   <?php
    
    $year=$_GET["Y"];   //民國
    $month=$_GET["M"];  
    
   ?>
   
   <table border="1">
       
       <?php
       
        echo "<tr>
                <td colspan=7>
                    <center>民國".$year."年".$month."月</center>
                </td>
              </tr>";
       
       
        echo "<tr>
                <td><center>日</center></td>
                <td><center>一</center></td>
                <td><center>二</center></td>
                <td><center>三</center></td>
                <td><center>四</center></td>
                <td><center>五</center></td>
                <td><center>六</center></td>
              </tr>";
       
       $targetTime=mktime(0,0,0,$month,1,$year+1911);   //目標時間
       $maxDay=date("t",$targetTime);                   //取得目標月份的總天數
       $firstDayInWeek=date("w",$targetTime);           //目標月份第一天在星期幾
       $countMonthDay=1;
       
       /* The first col */
       echo "<tr>";
       for($i=0;$i<7;$i++){
           while($i<$firstDayInWeek){
               echo "<td></td>";
               $i++;
           }
           echo "<td><center>".$countMonthDay."</center></td>";
           $countMonthDay++;
       }
       echo "</tr>";
       
       /* The other col */
       while($countMonthDay<=$maxDay){
           
           echo "<tr>";
           for($countWeekDay=0;$countWeekDay<7;$countWeekDay++){
               if($countMonthDay<=$maxDay){
                   echo "<td><center>".$countMonthDay."</center></td>";
                   $countMonthDay++;
               }else{
                   echo "<td></td>";
               }
           }
           
           echo "</tr>";
       }
       
       
       ?>
          
   </table>
   
   <br><br>
   
   <table border="1">
       
       <?php
       
        echo "<tr>
                <td colspan=7>
                    <center>民國".$year."年".$month."月</center>
                </td>
              </tr>";
       
       
        echo "<tr>
                <td><center>一</center></td>
                <td><center>二</center></td>
                <td><center>三</center></td>
                <td><center>四</center></td>
                <td><center>五</center></td>
                <td><center>六</center></td>
                <td><center>日</center></td>
              </tr>";
       
        $countMonthDay=1;               //這個要恢復初始值
        
        if($firstDayInWeek==0){         //調整整個月第一天的位置 0->6 , 1->0 , 2->1 ,......
            $firstDayInWeek=6;          //因為後面的日期是用+1的方式做的 所以只要修改第一個位置的值 後面就全部
        }else{                          //都會修改了
            $firstDayInWeek--;
        }
        
        /* The first col */
       echo "<tr>";
       for($i=0;$i<7;$i++){
           while($i<$firstDayInWeek){
               echo "<td></td>";
               $i++;
           }
           echo "<td><center>".$countMonthDay."</center></td>";
           $countMonthDay++;
       }
       echo "</tr>";
       
       /* The other col */
       while($countMonthDay<=$maxDay){
           
           echo "<tr>";
           for($countWeekDay=0;$countWeekDay<7;$countWeekDay++){
               if($countMonthDay<=$maxDay){
                   echo "<td><center>".$countMonthDay."</center></td>";
                   $countMonthDay++;
               }else{
                   echo "<td></td>";
               }
           }
           
           echo "</tr>";
       }
       
       
       ?>
         
   </table>
   
   
    
</body>
</html>