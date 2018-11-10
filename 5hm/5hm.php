<html>
<head>
    <title>Welcome</title>
</head>
<body>
<h1 style="text-align: center">5 домашняя работа</h1>
<?php

class GuestBook
{
    public $file;
    public $guest;
    public $text;

    public function __construct($file)
    {
        $this->file = __DIR__ . '/' . $file;
        $this->guest = file($this->file);
    }

    public function getData()
    {
        return $this->guest;
    }

    public function append($text)
    {
        $this->guest[] = "\n" . $text;
    }

    public function save()
    {
        file_put_contents($this->file, $this->guest);
    }
}

    $guest = new GuestBook('db.txt');
    $guest->append('Anna');
    $guest->save();
    var_dump($guest->getData());




?>
</body>
</html>
