<html>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="newimage">
    <input type="submit">
</form>
<?php

if (!empty($_FILES)) {
    $uploaded = $_FILES['newimage'];
    if ($uploaded['error'] == 0 && $uploaded['type'] == 'image/png' || $uploaded['type'] == 'image/jpg') {
        move_uploaded_file(
            $uploaded['tmp_name'],
            __DIR__ . '/images/'.$uploaded['name']
        );
    }
}
?>
</html>
