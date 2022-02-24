<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$prodi = $_POST['prodi'];
$kelas = $_POST['kelas'];
$id = $_POST['id'];

if (empty($nama) || empty($nim) || empty($email) || empty($prodi) || empty($kelas)) {
    header("location: " . BASE_URL . 'dashboard.php?page=edit&id=' . $id . '&emptyform=true');
} else {
    mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', nim = '$nim', email='$email', prodi = '$prodi', kelas = '$kelas' WHERE id='$id'");
    header("location: " . BASE_URL . 'dashboard.php?page=home&status=success');
}