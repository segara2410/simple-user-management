<?php
session_start();

include('config.php');

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($db_connection, "select * from member where username='$username'");

$cek = mysqli_num_rows($data);

if ($cek > 0) {
  while ($row = mysqli_fetch_assoc($data)) {
    if(password_verify($password, $row["password"])){
      $_SESSION['username'] = $username;
      $_SESSION['status'] = "login";
      $_SESSION['role'] = $row['role'];
    }
  }

  header("location:menu.php");
} else {
  header("location:index.php?pesan=gagal");
}
