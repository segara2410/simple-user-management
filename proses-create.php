<?php
include('config.php');

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'] ? $_POST['role'] : 'User';

$sql = "insert into member values (NULL, '$nama', '$username', '$password', '$role')";
$query = mysqli_query($db_connection, $sql);

header("location:menu.php");