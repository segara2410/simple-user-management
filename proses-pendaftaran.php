<?php
include('config.php');

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
$role = $_POST['role'] ? $_POST['role'] : 'User';

$sql = "insert into member values (NULL, '$nama', '$username', '$password', '$role')";
$query = mysqli_query($db_connection, $sql);

if ($query) {
  header("location:index.php?pesan=register_sukses");
} else {
  header("location:form-daftar.php?pesan=register_gagal");
}
