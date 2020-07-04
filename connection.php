<?php
$connect = mysqli_connect('localhost','root','','login');
if(!$connect){
    echo "Database Not Connected";
}
