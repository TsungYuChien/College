<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>倒數計時</title>
</head>
<body>

<?php

    $stamp1=time();
    $stamp2=mktime(0, 0, 0, 1, 1, 2020);

    $sec_diff=$stamp2-$stamp1;
    echo "距離2020/1/1還有：".$sec_diff."秒";

?>
    
</body>
</html>