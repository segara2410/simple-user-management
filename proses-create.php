<?php
include('config.php');

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
$role = $_POST['role'];

$sql = "insert into member values (NULL, '$nama', '$username', '$password', '$role')";
$query = mysqli_query($db_connection, $sql);

header("location:menu.php");