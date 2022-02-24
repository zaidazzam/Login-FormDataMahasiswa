<?php 

require_once('../function/helper.php');
require_once('../function/koneksi.php');


$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$prodi = $_POST['prodi'];
$kelas = $_POST['kelas'];


if (empty($nama) || empty ($nim) || empty($email) || empty($prodi) || empty($kelas)) {
    header("location: " . BASE_URL . 'dashboard.php?page=create&process=failed');
}else{
    mysqli_query($koneksi, "INSERT INTO mahasiswa(nama, nim, email, prodi, kelas) VALUES ('$nama', '$nim', '$email', '$prodi', '$kelas')");
    header("location: " . BASE_URL . 'dashboard.php?page=home&process=success');
}