<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>簡易連線測試(PHP - MySQL)</title>
</head>
<body>
    <?php
        if (empty($_POST["send"])==true) {
            ?>

    <form action="ex02.php" method="post">
        <input type="hidden" name="send" value="ok">
        <center><h1>簡易連線測試(PHP - MySQL)</h1></center><hr>
        MySQL機器名稱（或IP Address）：<input type="text" name="DataSource" size="20"><br>
        使用者帳號：<input type="text" name="UserID" size="20"><br>
        使用者密碼：<input type="password" name="UserPWD" size="20"><br>
        資料庫名稱：<input type="text" name="DBName" size="20"><br>
        <input type="submit" value="確定連線">
        <input type="reset" value="重新輸入">
    
    </form>

    <?php
        } else {
            if (empty($_POST["DataSource"]) || empty($_POST["UserID"]) || empty($_POST["UserPWD"]) || empty($_POST["DBName"])) {
                echo "請勿留空白！";
            } else {
                $link = mysqli_connect(
                    $_POST["DataSource"],
                    $_POST["UserID"],
                    $_POST["UserPWD"],
                    $_POST["DBName"]
                );
                if ($link) {
                    mysqli_query($link, "SET CHARACTER SET utf-8");
                    mysqli_query($link, "SET collation_connection = 'big5_chinese_ci'");
                    
                    //指定SQL查詢字串
                    $sql = "SELECT * FROM students";

                    //送出查詢的SQL指令
                    if ($result = mysqli_query($link, $sql)) {

                        //顯示欄位名稱
                        $str = "";
                        while ($meta = mysqli_fetch_field($result)) {
                            $str = $str.$meta->name . ", ";
                        }
                        echo substr($str, 0, strlen($str)-2);
                        echo "<br>";


                        //取得蘭位數
                        $total_fields = mysqli_num_fields($result);

                        //顯示每一筆紀錄
                        while ($row = mysqli_fetch_row($result)) {
                            $str = "";
                            for ($i=0;$i<=$total_fields-1;$i++) {
                                $str = $str . $row[$i] . ",";
                            }
                            echo substr($str, 0, strlen($str)-2)."<br>";
                        }
                    }
                }
                mysqli_close($link);
            } ?>

    <p><a href="ex02.php">回上一頁</a></p>
    
    <?php
        }
    ?>

</body>
</html>