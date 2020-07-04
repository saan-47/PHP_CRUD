<?php
include 'connection.php';

function showall(){
    global $connect;
    $query = "SELECT * FROM student";
    $result = mysqli_query($connect,$query);
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option name='ide'>$id</option>";
    }
}
function ask_before_deletedata(){
    global $connect;
    echo "you sure you want to delete this data"."<br>";
    $id = $_POST['identity'];
    $query = "SELECT `username`, `lastname`, `password` ";
    $query .="FROM `student` WHERE id = $id";
    $result = mysqli_query($connect,$query);
    while($row = mysqli_fetch_assoc($result)) {
        $name = $row['username'];
        $lastname = $row['lastname'];
    }
}
function delete_date(){
    global $connect;
    $id = $_POST['identity'];
    $q = " DELETE FROM student WHERE id = $id ";
    $result = mysqli_query($connect,$q);
    if(!$result){
        echo "Shit ".mysqli_error($connect);
    }else{
        echo "hurrah";
    }
}
function read_data(){
    global $connect;
    $query = "SELECT * FROM student";
    $result = mysqli_query($connect, $query);
    if (!$result) {
        echo "porfavor" . mysqli_error($connect);
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'] . "<br>";
            $name = $row['username'];
            $lastname = $row['lastname'];
            $pass = $row['password'];

            echo "<b>ID:</b> " . $id . " <b>Username:</b> " . $name . " <b>Lastname:</b> " . $lastname;
        }
    }
}
function create(){
    global $connect;
    $username = $_POST['username'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connect,$username);
    $lastname = mysqli_real_escape_string($connect,$lastname);
    $password = mysqli_real_escape_string($connect,$password);
    $str = 'itisprettynastybaiby22';
    $password = crypt($password, $str);
    $query = "INSERT INTO student(username,lastname,password) VALUES('$username','$lastname','$password')";

    $Confirm_report = mysqli_query($connect,$query);
    if($Confirm_report){
        echo "Submitted";
    }
    else{
        echo "Error".mysqli_error($connect);
    }
}