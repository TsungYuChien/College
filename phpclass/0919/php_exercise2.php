<html>
<head>
    <meta charset="utf-8">
    <title>目前時刻</title>
</head>
<body>
    
  <?php 
    $today=getdate(time());
    echo($today["seconds"]);
  ?> 
    
</body>
</html>