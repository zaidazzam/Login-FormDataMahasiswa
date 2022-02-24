<?php

require_once('function/koneksi.php');

$process = isset($_GET['process']) ? ($_GET['process']) : false;
$status = isset($_GET['status']) ? ($_GET['status']) : false;

?>



<?php if ($process == 'success') : ?>
<div class="alert alert-success" role="alert">
    Data berhasil dimasukan
</div>
<?php endif; ?>

<?php if ($status == 'success') : ?>
<div class="alert alert-success" role="alert">
    Data berhasil dihapus
</div>
<?php endif; ?>


<!-- mengambil data dari data base -->
<?php 

$mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");

?>

<table class="table table-dark table-striped">

    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Email</th>
            <th scope="col">Prodi</th>
            <th scope="col">Kelas</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1;?>
        <?php foreach($mahasiswa as $m) : ?>
        <tr>
            <th scope="row"><?= $no++;?></th>
            <td><?= $m['nama'] ?></td>
            <td><?= $m['nim'] ?></td>
            <td><?= $m['email'] ?></td>
            <td><?= $m['prodi'] ?></td>
            <td><?= $m['kelas'] ?></td>
            <td>
                <a class="btn btn-danger"
                    href="<?= BASE_URL . 'process/process_delete.php? id=' . $m['id'] ?>">Delete</a>
                <a class="btn btn-success btn-in badge"
                    href="<?= BASE_URL . 'dashboard.php ? page=edit& id=' . $m['id'] ?>">Edit</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>