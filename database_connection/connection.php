<?php
$server = "localhost";
$user = "u133767641_dausnet";
$password = "123.Firdaus";
$database = "u133767641_test_login";

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));
