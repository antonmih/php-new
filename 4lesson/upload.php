<?php
var_dump($_FILES);
if (!empty($_FILES)) {
    $uploaded = $_FILES['newimage'];
    if ($uploaded['error'] == 0) {
        move_uploaded_file(
            $uploaded['tmp_name'],
            __DIR__ . '/images/test.png'
        );
    }
}
var_dump(__DIR__ . '/images/test.png');