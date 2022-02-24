<?php

$process = isset($_GET['process']) ? ($_GET['process']) : false;

?>

<?php if ($process == 'failed') : ?>
<div class="alert alert-danger" role="alert">
    Semua formulir harus diisi
</div>


<?php endif; ?>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <h1 style="text-align: center; color: #185ADB;">Form Data Mahasiswa</h1>
                </div>
                <form method="POST" action="<?= BASE_URL . 'process/process_add.php' ?>">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">NIM</label>
                        <input type="number" class="form-control" id="nim" name="nim">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="prodi" class="form-label">Prodi</label>
                        <input type="text" class="form-control" id="prodi" name="prodi">
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>