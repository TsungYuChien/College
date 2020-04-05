<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>表單應用</title>
  </head>
  <body>
    <h2 align="center">表單應用-結合畫面</h2>
    <hr />

    <?php if (empty($_POST["send"])==true) { ?>

    <b>個人資料</b>
    <form action="ex01mix.php" method="post">
      <input type="hidden" name="send" value="ok">
      您的姓名：<input type="text" name="usrname" /><br />
      您的密碼：<input type="password" name="usrpsd" /><br />
      住址：<input type="text" name="address" size="50" /><br />
      性別：<input type="radio" name="sex" value="男" checked="true" />男
      <input type="radio" name="sex" value="女" />女<br />

      喜愛網站：<select name="web">
        <option value="Yahoo!奇摩">Yahoo!奇摩</option>
        <option value="momo購物" selected="true">momo購物</option>
        <option value="蝦皮購物">蝦皮購物</option>
        <option value="元智大學">元智大學</option> </select
      ><br />
      興趣：<input type="checkbox" name="interest[]" value="宅在家裡" />宅在家裡
      <input type="checkbox" name="interest[]" value="滑滑手機" />滑滑手機
      <input type="checkbox" name="interest[]" value="戶外活動" />戶外活動
      <input type="checkbox" name="interest[]" value="社團活動" />社團活動
      <br />

      喜愛網站II：<select name="webs[]" size="4" multiple="true">
        <option value="Yahoo!奇摩">Yahoo!奇摩</option>
        <option value="momo購物" selected="true">momo購物</option>
        <option value="蝦皮購物">蝦皮購物</option>
        <option value="元智大學">元智大學</option> </select
      ><br />

      自我期許：<br />
      <textarea name="myhope" rows="5" cols="40"></textarea>


      <br />
      <input type="submit" value="送出資料" />
      <input type="reset" value="清除資料" />
    </form>


    <?php
        } else {
            if (empty($_POST["usrname"]) || empty($_POST["usrpsd"]) || empty($_POST["address"]) || empty($_POST["sex"]) || empty($_POST["web"]) || empty($_POST["interest"]) || empty($_POST["webs"])) {
                echo "資料不齊";
            } else {
                $usrname=$_POST["usrname"];
                $usrpsd=$_POST["usrpsd"];
                $address=$_POST["address"];
                $sex=$_POST["sex"];
                $web=$_POST["web"];
                $interest=$_POST["interest"];
                $webs=$_POST["webs"];
                $myhope=$_POST["myhope"];
                
                echo "姓名：".$usrname."<br>";
                echo "密碼：".$usrpsd."<br>";
                echo "住址：".$address."<br>";
                echo "性別：".$sex."<br>";
                echo "喜愛網站：".$web."<br>";
                echo "興趣：";
                $interest_total = "";
                foreach ($interest as $element) {
                    $interest_total = $interest_total . $element . "、";
                }
                echo substr($interest_total, 0, strlen($interest_total)-2)."<br>";

                echo "喜愛網站II：";
                $webs_total = implode("、", $webs);
                echo $webs_total . "<br>";

                echo "我的期許：<br>";
                echo str_replace("\n", "<br>", $myhope)."<br>";
                    
                echo "<br>";
                echo "<a href=ex01mix.php>上一頁</a>";
            }
        }
    
    ?>



  </body>
</html>
