<html>
  <head>
    <title>Welcome</title>
  </head>
  <body>
    <h1 style="text-align: center">5 lesson</h1>

    <?php

    class Item
    {
      public $color;

      public function show()
      {
        echo  $this->color;
      }
    }


    class Table
    extends Item
    {
      public $legs;

      public function show()
      {
        echo 'Я потомок!';
        parent::show();
      }

    }

    $table1 = new Table();
    $table1->color = 'red';
    $table1->show();



    class Chair
    {
      protected $color;
      public $legs;

      public function __construct($color)
      {
        $this->color = $color;
      }

      public function show()
      {
        echo 'Я kreslo!';
        echo $this->color;
      }
    }

    $chair = new Chair('orange');
    $chair->show();

    ?>
  </body>
</html>
