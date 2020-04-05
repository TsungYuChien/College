<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>整數確認並求最小值</title>
</head>

<body>

    <?php

        $N1 = $_GET["N1"];
        $N2 = $_GET["N2"];
        

        /* is_int只在 當檔案中設定一個變數x=100判斷x是不是整數時有用 他必須直接訂死在程式中才有用 他不能訂在網址列中被GET使用 */
        /* 改用floor或ceil來配合做是否為整數的判斷 */
        if (floor($N1)==$N1 && floor($N2)==$N2) {
            echo "目前輸入值為：" . $N1 . "和" . $N2 . "<br/>";
            $min = getMax($N1, $N2);
            echo "最小值為：".$min;
        } else {
            echo "請輸入整數";
        }
        

    ?>

</body>
</html>


<?php

    /* 函數可以放在檔案中任意處 */
    function getMax($a, $b)
    {
        if ($a < $b) {
            return $a;
        } else {
            return $b;
        }
    }


?>