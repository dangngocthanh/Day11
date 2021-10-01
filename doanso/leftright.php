<?php
include_once 'computer.php';
if ($_SERVER['REQUEST_METHOD']=='GET'){
    $inp=$_REQUEST['inp'];
    if ($inp=='left'){
        left();
    }elseif ($inp='right'){
        right();
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Is your number <?php echo $_SESSION['mid']; ?>??</p>
<a href="index.php">
    <button>Yes</button>
</a>
<a href="leftright.php?inp=left">
    <button>No my number is smaller</button>
</a>
<a href="leftright.php?inp=right">
    <button>No my number is bigger</button>
</a>
</body>
</html>

