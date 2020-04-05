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
			if (empty($_POST["send"])==true) {
				?>

		<form action="ex01.php" method="post">
			<input type="hidden" name="send" value="ok">
			<center><h1>簡易查詢</h1></center><hr>
			學生資料查詢：<br/>
			依姓名：<input type="text" name="UserName" size="20"><br>
			<input type="submit" value="確定查詢">
			<input type="reset" value="重新輸入">
		
		</form>

		<?php
			} else {
				if (empty($_POST["UserName"])) {
					echo "請勿留空白！";
				} else {
					
					
					
					$link = mysqli_connect("localhost","yzustd","5487","myschool");
					if ($link) {
						//mysqli_query($link, "SET CHARACTER SET utf-8");
						//mysqli_query($link, "SET collation_connection = 'big5_chinese_ci'");
						mysqli_query($link,"SET NAMES UTF8");
						
						//指定SQL查詢字串
						$sql = "SELECT * FROM `students` WHERE name like '".$_POST["UserName"]."%'";

						//送出查詢的SQL指令
						if ($result = mysqli_query($link, $sql)) {
							echo "<table border='1'>";
							echo "<tr>";

							//顯示欄位名稱
							while ($meta = mysqli_fetch_field($result)) {
								echo "<th>".$meta->name ."</th>";
							}
							echo "</tr>";


							//取得欄位數
							$total_fields = mysqli_num_fields($result);

							//顯示每一筆紀錄
							while ($row = mysqli_fetch_row($result)) {
								echo "<tr>";
								for ($i=0;$i<=$total_fields-1;$i++) {
									echo "<td>".$row[$i]."</td>";
								}
								echo "</tr>";
							}
							echo "</table>";
						}
					}
					mysqli_close($link);
				} ?>

		<p><a href="ex01.php">回上一頁</a></p>
		
		<?php
			}
		?>

	</body>
	</html>   
	  	</body>
	</html>   
	  