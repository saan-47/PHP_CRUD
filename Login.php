<?php
include 'connection.php';
include 'function.php';
if(isset($_POST['submit'])){
create();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="col-md-6">
        <form method="post" action="Login.php">
            <h1>Create Record</h1>
            <br>
            <div class="form-group">
              <label>Username</label>
            </div>
            <div class="form-group">
            <input name="username" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>lastname</label>
            </div>
            <div class="form-group">
                <input name="lastname" type="text"  class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
            </div>
            <div class="form-group">
                <input name="password" type="password" class="form-control">
            </div>
            <div class="form-group">
                <input name="submit" type="submit" value="Submit" class="form-control btn btn-success">
            </div>

        </form>
    </div>
</div>
</body>
</html>