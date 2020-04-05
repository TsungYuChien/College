<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>函式改成回傳值</title>
</head>

<body>

    <?php

        $N1 = $_GET["N1"];
        $N2 = $_GET["N2"];
        echo "目前輸入值為：" . $N1 . "和" . $N2 . "<br/>";

        /* 呼叫 getMax() 函數 */
        $min = getMax($N1, $N2);
        echo "最小值為：".$min;

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