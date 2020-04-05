<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>求最大值</title>
</head>

<body>

    <?php

    $N1 = $_GET["N1"];
    $N2 = $_GET["N2"];
    echo "目前輸入值為：" . $N1 . "和" . $N2 . "<br/>";

    /* 呼叫 getMax() 函數 */
    getMax($N1, $N2);

    /* 函數可以放在檔案中任意處 */
    function getMax($a, $b)
    {
        if ($a > $b) {
            echo "最大值為：" . $a;
        } else {
            echo "最大值為：" . $b;
        }
    }

    ?>

</body>

</html>