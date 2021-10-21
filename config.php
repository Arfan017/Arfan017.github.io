<?php
$host = 'localhost';
$username = 'Arfan';
$password = 'python';
$bd = 'uts_upj';

$con = mysqli_connect($host, $username, $password, $bd);

if (mysqli_connect_errno()) {
    echo("Koneksi Gagal");
}
