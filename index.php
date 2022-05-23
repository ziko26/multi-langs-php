<?php 
require_once 'functions.php';
require_once 'langs/'.$_SESSION['lang'].'.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<ul>
    <li><a href="?lang=ar"><?php echo $header['ar'] ?></a></li>
    <li><a href="?lang=en"><?php echo $header['en'] ?></a></li>
</ul>

<p style="margin-top:20px"><?php echo $header['title'] ?></p>
    
</body>
</html>