<?php
require __DIR__.'/4hm.php';

$text = $_POST['newtext'];

$guest = Guest("db.txt", $text);

foreach ($guest as $item) {
    echo $item;
}

?>