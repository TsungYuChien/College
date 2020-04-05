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

    <form action="ex01.php" method="post">
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
                if (!$link) {
                    echo "MySQL資料庫連接錯誤！<br>";
                    exit();
                } else {
                    echo "MySQL資料庫myschool連接成功！<br>";
                }
                mysqli_close($link);
            } ?>

    <p><a href="ex01.php">回上一頁</a></p>
    
    <?php
        }
    ?>

</body>
</html>