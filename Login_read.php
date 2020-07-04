<?php
include 'connection.php';
include 'function.php';
if(isset($_POST['readata'])) {
   read_data();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cRud</title>
</head>
<body>
<div>
    <h1>Read files</h1>
    <form method="post" action="Login_read.php">

    <input type="submit" name="readata" value="Read Data">
    </form>
</div>
</body>
</html>
