<?php
include('config.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
if ($_POST['password']) {
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
}
$role = $_POST['role'] ? $_POST['role'] : 'User';

if ($_POST['password']) {
    $sql =
      "update member set 
        nama = '" . $nama . "',
        username = '" . $username . "',
        password = '" . $password . "',
        role = '" . $role . "'
        where id = " . $id;
}
else {
    $sql =
      "update member set 
        nama = '" . $nama . "',
        username = '" . $username . "',
        role = '" . $role . "'
        where id = " . $id;
}

$query = mysqli_query($db_connection, $sql);

if ($query) {
  header("location:list-member.php?status=sukses");
} else {
  header("location:list-member.php?status=gagal");
}
