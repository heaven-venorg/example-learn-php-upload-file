<?php
require_once "./config.php";

if ($_POST['submit']) {
    $name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $file_upload = move_uploaded_file($tmp_name, "./file/" . $name);
    $sql = mysqli_query($con, "INSERT INTO files(files)VALUES('$name')");
    if ($file_upload && $sql) {
        echo "Upload Selesai";
    } elseif (empty($file_upload)) {
        echo "Inputkan FIle";
    } else {
        echo "Upload Tidak Dapat Dijalankan";
    };
};