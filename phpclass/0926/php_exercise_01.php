<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>

    <center>
    <?php
        $name=$_GET["name"];
        $like=$_GET["love"];
        echo $name . " 歡迎您! <br> 您喜歡的課程是 " . $like . "!";

    ?>
    </center>
    
</body>
</html>