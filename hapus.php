<?php
include('config.php');

if (!isset($_GET['id'])) {
  header('Location:list-member.php');
}

$id = $_GET['id'];

$sql = 'delete from member where id =' . $id;
$query = mysqli_query($db_connection, $sql);

if ($query) {
  header("location:list-member.php?status=delete_sukses");
} else {
  header("location:list-member.php?status=delete_gagal");
}
