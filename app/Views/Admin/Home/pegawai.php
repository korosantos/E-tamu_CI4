<!-- Begin Page Content -->
<div class="container-fluid bg-light">

<!-- Isi Konten Disini -->
<h1 class="h3 my-5 text-gray-800 text-uppercase text-center my-5">Rekap Data Pegawai</h1>
<button type="button" class="btn btn-info btn-sm my-2"><i class="fas fa-plus"></i> Tambah Pegawai</button>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nip</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php $no=1; foreach($dataPegawai as $data) : ?>
   
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data['nip'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><button class="btn btn-warning btn-sm"><i class="fas fa-pen"></i></button> <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    
</table>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->