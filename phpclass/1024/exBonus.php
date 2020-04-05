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

    $day_diff=floor($sec_diff/(60*60*24));
    $hour_diff=floor($sec_diff%(60*60*24)/(60*60));
    $min_diff=floor($sec_diff%(60*60*24)%(60*60)/60);
    $secOnly_diff=$sec_diff%(60*60*24)%(60*60)%60;
    echo "距離2020/1/1還有：".$sec_diff."秒";
    echo "<br>";
    echo "距離2020/1/1還有：".$day_diff."天".$hour_diff."時".$min_diff."分".$secOnly_diff."秒";

?>
    
</body>
</html>