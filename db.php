<?php
 
require_once "config.php";

$connection=mysqli_connect(
$config['db']['server'],
$config['db']['username'],
$config['db']['password'],
$config['db']['name']
);

if($connection==false)
{
    echo 'Не удалось подключиться к базе данных!<br>';
    echo mysqli_connect_error();
    exit();
}

$fio = $_POST['fio'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$insert_sql = "INSERT INTO `shop`(`fio`, `email`, `phone`) VALUES ('$fio','$email','$phone')";
$result = mysqli_query($connection, $insert_sql);
?>