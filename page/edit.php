<?php
require_once('function/helper.php');
require_once('function/koneksi.php');

$process =  isset($_GET['process']) ? ($_GET['process']) : false;
if ($_SESSION["id"] == null) {
    header("location: " . BASE_URL);
    exit();
}


$id =  isset($_GET['id']) ? ($_GET['id']) : false;

$mahasiswa = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id=$id"));

$error = isset($_GET['emptyform']) ? ($_GET['emptyform']) : false;
?>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <?php if ($error == 'true') : ?>
                <div class="alert alert-danger" role="alert">
                    Proses gagal, pastikan semua formulir terisi
                </div>
                <?php endif; ?>
                <div class="row">
                    <h1 style="text-align: center; color: #185ADB;">Form Edit Mahasiswa</h1>
                </div>
                <form method="POST" action="<?= BASE_URL . 'process/process_edit.php' ?>">
                    <input name="id" value="<?= $mahasiswa['id'] ?>" type="hidden">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama']?>">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">NIM</label>
                        <input type="number" class="form-control" id="nim" name="nim" value="<?= $mahasiswa['nim']?>">
                    </div>
                    <div class=" mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email"
                            value="<?= $mahasiswa['email']?>">
                    </div>
                    <div class=" mb-3">
                        <label for="prodi" class="form-label">Prodi</label>
                        <input type="text" class="form-control" id="prodi" name="prodi"
                            value="<?= $mahasiswa['prodi']?>">
                    </div>
                    <div class=" mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas"
                            value="<?= $mahasiswa['kelas']?>">
                    </div>
                    <button type=" submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>