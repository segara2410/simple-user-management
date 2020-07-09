<?php
include('config.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'] ? $_POST['role'] : 'User';

$sql =
  "update member set 
    nama = '" . $nama . "',
    username = '" . $username . "',
    password = '" . $password . "',
    role = '" . $role . "'
    where id = " . $id;

$query = mysqli_query($db_connection, $sql);

if ($query) {
  header("location:list-member.php?status=sukses");
} else {
  header("location:list-member.php?status=gagal");
}
