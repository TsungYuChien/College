<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>分頁顯示</title>
</head>
<body>
    
    <?php
    
        $total = $_GET["total"];    //資料總數
        $count = $_GET["count"];    //每頁筆數
        $page = $_GET["page"];      //第幾頁
    
        $total_page = ceil($total/$count);
    
        echo "<p>共 ".$total_page." 頁 / 第 ".$page." 頁</p>";
    
        for($i=1;$i<=$total_page;$i++){
            echo "<a href='ex02.php?total=".$total."&count=".$count."&page=".$i."'>第 ".$i." 頁</a> &nbsp;&nbsp;";
        }
    
        if($page==1){
            $lastPage=1;
        }
        else {
            $lastPage=$page-1;
            echo "<p><a href='ex02.php?total=".$total."&count=".$count."&page=".$lastPage."'>上一頁</a></p>";
        }
              
        if($page==$total_page){
            $nextPage=$total_page;
        }
        else {
            $nextPage=$page+1;
            echo "<p><a href='ex02.php?total=".$total."&count=".$count."&page=".$nextPage."'>下一頁</a></p>";
        }
    ?>

    <br>
    <br>
    
    <table border="1">
        <?php

            $x = $count * ($page-1) + 1;    //本頁開頭
            $y = $count * $page;            //本頁結尾
            if($y > $total)$y = $total;
            
            for($i=$x; $i<=$y; $i++){
                echo "<tr>";
                echo "<td>第" .$i. "筆</td>";
                echo "<td>xxxxxxx</td>";
                echo "</tr>";
            }
        
        
        ?>
    </table>
    
    
</body>
</html>