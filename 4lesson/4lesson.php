<html>
  <head>
    <title>Welcome</title>
  </head>
  <body>
    <h1 style="text-align: center">4 lesson</h1>
    <?php

    $res = fopen(__DIR__.'/db.txt', 'r');

    while (!feof($res)) {
      $str = fgets($res);
      echo $str;
    }

    fclose($res);
    ?>
  <br>
    <?php

    $res1 = file(__DIR__.'/db.txt');
    $res1[] = 'Sveta';
    $str1 = implode("\n", $res1);
    file_get_contents(__DIR__.'/db.txt', $str1);
    var_dump($res1);


    ?>
  <br>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="newimage">
    <input type="submit">
  </form>
  </body>
</html>
