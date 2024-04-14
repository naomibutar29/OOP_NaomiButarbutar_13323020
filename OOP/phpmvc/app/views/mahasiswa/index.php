<div class="container mt-3">

    <div class="row">
        <div class="col-6">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
            Tambah Data Mahasiswa
        </button>
        <br></br>
            <h3>Daftar Mahasiswa</h3>
                <ul class="list-group">
                    <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $mhs['nama'] ?>
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary">detail</a>
                </li>
                    <?php endforeach; ?>
                </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="JudulModal" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="JudulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

      <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama">
      </div>

      <div class="form-group">
        <label for="nim">NIM</label>
        <input type="number" class="form-control" id="nim" name="nim">
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>

      <div class="form-group">
    <label for="Jurusan">Jurusan</label>
    <select class="form-control" id="Jurusan" name="Jurusan">
      <option value="Informatika">Informatika</option>
      <option value="Metalurgi">Metalurgi</option>
      <option value="Teknologi Komputer">Teknologi Komputer</option>
      <option value="Sistem Informasi">Sistem Informasi</option>
      <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
      <option value="Bioproses">Bioproses</option>
    </select>
  </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
    </div>
  </div>
</div>