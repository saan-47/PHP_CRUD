<?php
include 'connection.php';
include 'function.php';

global $name;
global $lastname;
if(isset($_POST['submit'])){
    ask_before_deletedata();

}
if(isset($_POST['Delete'])){
    delete_date();
}
?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>Delete files</h1>
<form method="post" action="login_delete.php">
    <div class="form-group">
        <label>Username</label>
    </div>
    <div class="form-group">
        <input name="username" type="text" class="form-control" placeholder="" value="<?php echo $name?>">
    </div>
    <div class="form-group">
        <label>lastname</label>
    </div>
    <div class="form-group">
        <input name="lastname" type="text"  class="form-control" placeholder="" value="<?php echo $lastname?>">
    </div>

    <div class="form-group">
        <select name="identity" id="">
            <?php
            showall();
            ?>

        </select>
    </div>
    <div class="form-group">
        <input name="submit" type="submit" value="Search" class="form-control btn btn-success">
    </div>
    <div class="form-group">
        <input name="Delete" type="submit" value="Delete" class="form-control btn btn-danger">
    </div>
</form>
</div>
</body>
</html>