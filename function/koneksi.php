<?php

$server = "localhost";
$username ="root";
$password ="";
$dbname ="crudphp";

$koneksi = mysqli_connect($server, $username, $password, $dbname) or die ("koneksi ke database gagal"); 