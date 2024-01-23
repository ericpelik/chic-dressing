<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file']))
{
    $file = $_FILES['file'];
    if($file['error'] == UPLOAD_ERR_OK && $file['size'] > 0)
    {
        // File uploaded successfully
        echo 'File uploaded successfully';
    }
    else
    {
        // Error uploading file
        echo 'Error uploading file';
    }
}
?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="Upload">
</form>