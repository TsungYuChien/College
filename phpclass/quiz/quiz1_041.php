<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>quiz1_041</title>
</head>

<body>

    <?php

    $total = $_GET["total"];
    $height = $_GET["height"];
    $p = $_GET["p"];
    $type = $_GET["type"];

    ?>

    <div>
        <p>學號:1062041</p>
        <p>姓名:簡琮育</p>

        <br>
        <p><a href="<?php echo 'quiz1_041.php?total=' . $total . '&height=' . $height . '&p=' . $p . '&type=1' ?>">1.粗體標記</a></p>
        <p><a href="<?php echo 'quiz1_041.php?total=' . $total . '&height=' . $height . '&p=' . $p . '&type=2' ?>">2.紅字標記</a></p>
        <br>
    </div>

    <?php



    if ($total % $height == 0) {
        $width = (int) ($total / $height);
    } else {
        $width = (int) ($total / $height) + 1;
    }

    $countH = 1;
    $countW;
    echo "<table border='1'>";
    for ($i = 0; $i < $height; $i++) {

        echo "<tr>";
        for ($countW = $countH, $j = 1; $j <= $width; $j++) {

            if ($countW <= $total) {
                echo "<td>";
                if ($countW % $p == 0) {
                    if ($type == 1) {
                        echo "<b>";
                    } else if ($type == 2) {
                        echo "<font color='red'>";
                    }
                }
                echo $countW;
                echo "</td>";
                $countW += $height;
            } else {
                echo "<td>";
                echo " x ";
                echo "</td>";
            }
        }
        $countH++;
        echo "</tr>";
    }



    ?>

</body>

</html>