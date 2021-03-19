<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div id="profile" class="card shadow-sm mb-3">
        <div class="card-body text-center">
          <div class="card-title text-center">
            <?php
            if ($calonAsisten['foto'] != null) {
            $path = base_url('assets/berkas/').$this->session->userdata('npm').'/'.$calonAsisten['foto'];
            } else {
            $path = base_url('assets/img/profile/default.jpg');
            }
            ?>
            <img class="img-fluid rounded-circle mr-2" src="<?= $path ?>" style="height: 80px; width: 80px">
          </div>
          <hr>
          <div class="text-left">
            <div class="row">
              <div class="col-4">Nama Lengkap</div>
              <div class="col-8">
                <span>: <?= $calonAsisten['nama']; ?></span>
              </div>
            </div>
            <div class="row">
              <div class="col-4">NPM</div>
              <div class="col-8">
                <span>: <?= $calonAsisten['npm']; ?></span>
              </div>
            </div>
            <div class="row">
              <div class="col-4">Kelas</div>
              <div class="col-8">
                <span>: <?= $calonAsisten['kelas']; ?></span>
              </div>
            </div>
            <div class="row">
              <div class="col-4">Domisili</div>
              <div class="col-8">
                <span>: <?= $calonAsisten['domisili']; ?></span>
              </div>
            </div>
            <div class="row">
              <div class="col-4">Jurusan</div>
              <div class="col-8">
                <span>: <?= $calonAsisten['jurusan']; ?></span>
              </div>
            </div>
            <div class="row">
              <div class="col-4">Angkatan</div>
              <div class="col-8">
                <span>: <?= $calonAsisten['angkatan']; ?></span>
              </div>
            </div>
            <div class="row">
              <div class="col-4">Posisi</div>
              <div class="col-8">
                <span>: <?= $calonAsisten['posisi']; ?></span>
              </div>
            </div>
            <div class="row">
              <div class="col-4">No. Whatsapp</div>
              <div class="col-8">
                <span>: <?= $calonAsisten['no_telp']; ?></span>
              </div>
            </div>
            <div class="row">
              <div class="col-4">Tanggal Lahir</div>
              <div class="col-8">
                <?php if ($calonAsisten['tanggal_lahir'] == null): ?>
                <span>: <i class="red-text">Kosong!</i></span>
                <?php else: ?>
                <span>: <?= $calonAsisten['tanggal_lahir']; ?></span>
                <?php endif ?>
              </div>
            </div>
            <div class="row">
              <div class="col-4">Tempat Lahir</div>
              <div class="col-8">
                <?php if ($calonAsisten['tempat_lahir'] == null): ?>
                <span>: <i class="red-text">Kosong!</i></span>
                <?php else: ?>
                <span>: <?= $calonAsisten['tempat_lahir']; ?></span>
                <?php endif ?>
              </div>
            </div>
            <div class="row">
              <div class="col-4">Alamat</div>
              <div class="col-8">
                <?php if ($calonAsisten['alamat'] == null): ?>
                <span>: <i class="red-text">Kosong!</i></span>
                <?php else: ?>
                <span class="d-inline-block text-truncate" style="max-width: 100%">: <?= $calonAsisten['alamat']; ?></span>
                <?php endif ?>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card shadow-sm mb-3">
        <div class="card-header py-3 amber">
          <h6 class="m-0 font-weight-bold white-text">Kelengkapan Berkas</h6>
        </div>
        <div class="card-body p-0 text-center">
          <ul class="list-group list-group-flush text-left">
            <li class="list-group-item">
              <?php if ($calonAsisten['foto'] == null): ?>
              <i class="fas fa-exclamation-circle red-text mr-2"></i>
              <?php else: ?>
              <i class="fas fa-check-circle green-text mr-2"></i>
              <?php endif ?>
              Pas Foto
              <a href="<?= base_url('assets/berkas/').$calonAsisten['npm'].'/'.$calonAsisten['foto'] ?>" class="float-right" target="_blank">
                <i class="fas fa-eye mr-2"></i>Open
              </a>
            </li>
            <li class="list-group-item">
              <?php if ($calonAsisten['cv'] == null): ?>
              <i class="fas fa-exclamation-circle red-text mr-2"></i>
              <?php else: ?>
              <i class="fas fa-check-circle green-text mr-2"></i>
              <?php endif ?>
              Curriculum vitae
              <a href="<?= base_url('assets/berkas/').$calonAsisten['npm'].'/'.$calonAsisten['foto'] ?>" class="float-right" target="_blank">
                <i class="fas fa-eye mr-2"></i>Open
              </a>
            </li>
            <li class="list-group-item">
              <?php if ($calonAsisten['lamaran'] == null): ?>
              <i class="fas fa-exclamation-circle red-text mr-2"></i>
              <?php else: ?>
              <i class="fas fa-check-circle green-text mr-2"></i>
              <?php endif ?>
              Surat Lamaran
              <a href="<?= base_url('assets/berkas/').$calonAsisten['npm'].'/'.$calonAsisten['foto'] ?>" class="float-right" target="_blank">
                <i class="fas fa-eye mr-2"></i>Open
              </a>
            </li>
            <li class="list-group-item">
              <?php if ($calonAsisten['transkrip'] == null): ?>
              <i class="fas fa-exclamation-circle red-text mr-2"></i>
              <?php else: ?>
              <i class="fas fa-check-circle green-text mr-2"></i>
              <?php endif ?>
              Transkrip Nilai
              <a href="<?= base_url('assets/berkas/').$calonAsisten['npm'].'/'.$calonAsisten['foto'] ?>" class="float-right" target="_blank">
                <i class="fas fa-eye mr-2"></i>Open
              </a>
            </li>
            <li class="list-group-item">
              <?php if ($calonAsisten['krs'] == null): ?>
              <i class="fas fa-exclamation-circle red-text mr-2"></i>
              <?php else: ?>
              <i class="fas fa-check-circle green-text mr-2"></i>
              <?php endif ?>
              KRS
              <a href="<?= base_url('assets/berkas/').$calonAsisten['npm'].'/'.$calonAsisten['foto'] ?>" class="float-right" target="_blank">
                <i class="fas fa-eye mr-2"></i>Open
              </a>
            </li>
            <li class="list-group-item">
              <?php if ($calonAsisten['ktm'] == null): ?>
              <i class="fas fa-exclamation-circle red-text mr-2"></i>
              <?php else: ?>
              <i class="fas fa-check-circle green-text mr-2"></i>
              <?php endif ?>
              KTM
              <a href="<?= base_url('assets/berkas/').$calonAsisten['npm'].'/'.$calonAsisten['foto'] ?>" class="float-right" target="_blank">
                <i class="fas fa-eye mr-2"></i>Open
              </a>
            </li>
            <li class="list-group-item">
              <?php if ($calonAsisten['sertifikat'] == null): ?>
              <i class="fas fa-exclamation-circle red-text mr-2"></i>
              <?php else: ?>
              <i class="fas fa-check-circle green-text mr-2"></i>
              <?php endif ?>
              Sertifikat
              <a href="<?= base_url('assets/berkas/').$calonAsisten['npm'].'/'.$calonAsisten['foto'] ?>" class="float-right" target="_blank">
                <i class="fas fa-eye mr-2"></i>Open
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>