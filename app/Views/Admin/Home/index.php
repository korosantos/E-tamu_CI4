<!-- Begin Page Content -->

<div class="container-fluid bg-light">


<!-- Isi Konten Disini -->
<h1 class="h3 my-5 text-gray-800 text-uppercase text-center">Selamat Datang Admin</h1>

<div class="row mt-5 text-info">
    <div class="col-md-4">
        <div class="bg-white py-3 shadow rounded">
            <div class="d-flex justify-content-between mx-3">
                <h1>0</h1>
                <h1><i class="fas fa-user"></i></h1>
            </div>
            <p class="lead mx-3">Jumlah Pegawai</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="bg-white py-3 shadow rounded">
            <div class="d-flex justify-content-between mx-3">
                <h1>0</h1>
                <h1><i class="fas fa-users"></i></h1>
            </div>
            <p class="lead mx-3">Pengunjung Hari Ini</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="bg-white py-3 shadow rounded">
            <div class="d-flex justify-content-between mx-3">
                <h1>0</h1>
                <h1><i class="fas fa-users"></i></h1>
            </div>
            <p class="lead mx-3">Total Pengunjung</p>
        </div>
    </div>
    
</div>
<!-- Input Data Tamu -->
<p class="lead mt-5 text-info">Form Input Data Pengunjung</p>
<hr class="bg-info mb-5">

    <div class="row">
    
        <div class="col-md-6">
                <div class="row my-4">
                    <div class="col-md-2">Nama Tamu</div>
                    <div class="col-md-1">:</div>
                    <div class="col-md-9"><input type="text" name="nama" placeholder="nama tamu" class="form-control"></div>
                </div>
                <div class="row my-4">
                    <div class="col-md-2">Asal</div>
                    <div class="col-md-1">:</div>
                    <div class="col-md-9"><input type="text" name="asal" placeholder="asal" class="form-control"></div>
                </div>
                <div class="row my-4">
                    <div class="col-md-2">No Hp</div>
                    <div class="col-md-1">:</div>
                    <div class="col-md-9"><input type="number" name="nohp" placeholder="no hp" class="form-control"></div>
                </div>
                <div class="row my-4">
                    <div class="col-md-2">Bertemu Dengan</div>
                    <div class="col-md-1">:</div>
                    <div class="col-md-9"><select name="bertemu" id="" class="form-control"><option value="">pilih</option></select></div>
                </div>
                <div class="row my-4">
                    <div class="col-md-2">#</div>
                    <div class="col-md-1">:</div>
                    <div class="col-md-9"><select name="bertemu" id="" class="form-control"><option value="">pilih</option></select></div>
                </div>
                <div class="row my-4">
                    <div class="col-md-2">Keperluan</div>
                    <div class="col-md-1">:</div>
                    <div class="col-md-9"><textarea name="perlu" id="" placeholder="jelaskan keperluan tamu" class="form-control" rows="3"></textarea></div>
                </div>
        </div>
        <div class="col-md-6">
        <div class="row">
            <div class="col-md-6">
            <div class="border border-info h-100 w-100 mt-4"></div>
                <button type="button" class="btn btn-outline-info my-2 btn-sm"><i class="fas fa-camera"></i> Ambil Foto</button>

                <div class="form-group my-3">
                <label for="">input foto ktp</label>
                    <input type="file" class="form-control" name="ktp">
                </div>
            </div>
            <div class="col-md-6">
                <div class="border border-info h-100 w-100 mt-4"></div>
                <label for="" class="my-3">Hasil Foto</label>
            </div>
        </div>
        </div>
      
    </div>
    <div class="row">
        <div class="col-md-12">
        <div class="text-center my-4">
        <button type="submit" class="btn btn-info px-5"><i class="fas fa-paper-plane"></i> Kirim</button>
        </div>
        </div>
    </div>
    <hr>

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->