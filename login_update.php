<?php
include 'connection.php';
include 'function.php';


if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
    $id = $_POST['identity'];
    $query = "UPDATE `student` SET `username`='$username',`lastname`='$lastname',`password`='$password' WHERE id = $id";
    $result = mysqli_query($connect,$query);
    if(!$result){
        echo "Could not update the data".mysqli_error($connect);
    }
    else{
        echo "Muy bien hecho";
    }
}




?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>crUd</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <form method="post" action="Login_update.php">
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
            <select name="identity" id="">
                <?php
                showall();
                ?>

            </select>
        </div>
        <div class="form-group">
            <input name="submit" type="submit" value="Submit" class="form-control btn btn-success">
        </div>


    </form>
</div>

</body>
</html>
