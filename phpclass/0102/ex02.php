	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>簡易連線測試(PHP - MySQL)</title>
	</head>
	<body>

        <?php
            if(!isset($_SESSION)){
                session_start();
            }
        
			if (empty($_POST["send"])==true) {
				?>

		<form action="ex02.php" method="post">
			<input type="hidden" name="send" value="ok">
			<center><h1>登入系統(1)</h1></center><hr>
			<center>帳號: <input type="text" name="user_ID"></center>
            <center>密碼: <input type="password" name="user_pwd"></center>
            
            <center>
                <input type="submit" value="確認送出">
                <input type="reset" value="重新輸入">
            </center>
           
            
            
		
		</form>

		<?php
        
                }else{
                    
					if (empty($_POST["user_ID"]) || empty($_POST["user_pwd"])) {
					       echo "請勿留空白！";
				    } else {

                        
					$link = mysqli_connect("localhost","sqluser","123456","myschool");
					if ($link) {
						//mysqli_query($link, "SET CHARACTER SET utf-8");
						//mysqli_query($link, "SET collation_connection = 'big5_chinese_ci'");
						mysqli_query($link,"SET NAMES UTF8");
						
						//指定SQL查詢字串
						$sql = "SELECT * FROM students WHERE username='".$_POST["user_ID"]."' and password='".$_POST["user_pwd"]."'";

						//送出查詢的SQL指令
				        if ($result = mysqli_query($link, $sql)) {
							if(mysqli_num_rows($result) == 1){
                                //echo "登入成功!";
                                $_SESSION["user_ID"]=$_POST["user_ID"];
                                $_SESSION["user_pwd"]=$_POST["user_pwd"];
                                header("Location: ex02_frame.html");
                                exit;
                            }
                            else
                                echo "登入失敗!";
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
	
	  