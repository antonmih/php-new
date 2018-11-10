<html>
<head>
    <title>Welcome</title>
</head>
<body>
<h1 style="text-align: center">4 домашняя работа</h1>
<?php

function Guest($file, $text) {

    $res = file(__DIR__.'/'.$file);
    $res[] = "\n".$text;
    file_put_contents(__DIR__.'/'.$file, $res);
    return $res;
}

?>

<form action="Guest.php" method="post">
    <input type="text" name="newtext">
    <input type="submit">
</form>


</body>
</html>