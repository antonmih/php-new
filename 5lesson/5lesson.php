<html>
  <head>
    <title>Welcome</title>
  </head>
  <body>
    <h1 style="text-align: center">5 lesson</h1>

    <?php
    class Table
    {
      public $color;
      public $legs;

      public function show()
      {
        echo 'Hello, im table!';
        echo 'У меня ' . $this->legs . ' ног';
      }
    }

    $table1 = new Table();
    $table1->color = 'red';
    $table1->legs = '4';
    $table1->show();

    $table2 = new Table();
    $table2->color = 'green';
    $table2->legs = '3';
    var_dump($table2);
    ?>
  </body>
</html>
