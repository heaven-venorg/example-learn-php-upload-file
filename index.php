<?php
require_once "./config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="action.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>