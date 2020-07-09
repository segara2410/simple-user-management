<?php

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'latihan_native';

$db_connection = mysqli_connect($server, $user, $password, $database);

if (!$db_connection) {
  die('Gagal terhubung dengan database: ' . mysqli_connect_error());
}
