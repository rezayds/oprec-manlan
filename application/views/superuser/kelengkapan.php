<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Oprec Admin</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?php echo base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    
    <link href="<?php echo base_url('assets/') ?>css/material-color.css" rel="stylesheet">

    
  </head>
  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <div class="container mt-3">
          <h1 class="display-4 text-center">Kelengkapan Berkas</h1>  
          <h3><b>Depok</b></h3>
          <hr>
          <h4>Asisten</h4>
          <table class="table table-bordered">
            <thead class="text-center">
              <th>No.</th>
              <th width="10%">NPM</th>
              <th width="20%">Nama</th>
              <th width="10%">Telepon</th>
              <th>Data Diri</th>
              <th>Foto</th>
              <th>CV</th>
              <th>Lamaran</th>
              <th>Transkrip</th>
              <th>KRS</th>
              <th>KTM</th>
              <th>Sertifikat</th>
            </thead>
            <tbody class="text-center small">
              <?php $no = 1; foreach ($depok_a as $calon): ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $calon['npm'] ?></td>
                  <td class="text-left"><?= $calon['nama'] ?></td>
                  <td><a href="https://wa.me/62<?= substr($calon['no_telp'], 1)?>?text=Halo+<?= $calon['nama'] ?>!%0d%0aKami+dari+Lab+Manajemen+Lanjut+mau+mengingatkan+untuk+melengkapi+berkas+berikut%3a%0d%0a
                    <?php 
                    if ($calon['alamat'] == '') echo '%0d%0a%3e+Data+Diri%0d%0a';
                    if ($calon['foto'] == '') echo '%3e+Pas+Foto%0d%0a';
                    if ($calon['cv'] == '') echo '%3e+CV%0d%0a';
                    if ($calon['lamaran'] == '') echo '%3e+Surat+Lamaran%0d%0a';
                    if ($calon['transkrip'] == '') echo '%3e+Transkrip+Nilai%0d%0a';
                    if ($calon['krs'] == '') echo '%3e+KRS%0d%0a';
                    if ($calon['ktm'] == '') echo '%3e+KTM%0d%0a';
                    if ($calon['sertifikat'] == '') echo '%3e+Sertifikat+jika+ada%0d%0a';
                    ?>
                    %0d%0aBatas+akhir+untuk+melengkapi+berkas+tanggal+11+Januari+2020.+Jangan+sampai+terlewat+yaa!%0d%0a%5bPesan+otomatis%5d" target="_blank"><?= $calon['no_telp'] ?></a></td>
                  <td>
                    <?php if ($calon['alamat'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['foto'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['cv'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['lamaran'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['transkrip'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['krs'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['ktm'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['sertifikat'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
          <?php  
            $lengkap = 0;
            $kurang = 0;

            foreach ($depok_a as $x) {
              if ($x['alamat'] != ''
                && $x['foto'] != ''
                && $x['cv'] != ''
                && $x['lamaran'] != ''
                && $x['transkrip'] != ''
                && $x['krs'] != ''
                && $x['ktm'] != ''
                && $x['sertifikat'] != '') {
                $lengkap+=1;
              } else {
                $kurang+=1;
              }
            }
          ?>
          <div class="text-right mb-4">
            <b>Berkas Lengkap: <?= $lengkap ?></b> ||
            <b>Berkas Kurang: <?= $kurang ?></b><br>
            <b>Total: <?= $lengkap+$kurang ?></b>
          </div>

          <h4>Programmer</h4>
          <table class="table table-bordered">
            <thead class="text-center">
              <th>No.</th>
              <th width="10%">NPM</th>
              <th width="20%">Nama</th>
              <th width="10%">Telepon</th>
              <th>Data Diri</th>
              <th>Foto</th>
              <th>CV</th>
              <th>Lamaran</th>
              <th>Transkrip</th>
              <th>KRS</th>
              <th>KTM</th>
              <th>Sertifikat</th>
            </thead>
            <tbody class="text-center small">
              <?php $no = 1; foreach ($depok_p as $calon): ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $calon['npm'] ?></td>
                  <td class="text-left"><?= $calon['nama'] ?></td>
                  <td><a href="https://wa.me/62<?= substr($calon['no_telp'], 1)?>?text=Halo+<?= $calon['nama'] ?>!%0d%0aKami+dari+Lab+Manajemen+Lanjut+mau+mengingatkan+untuk+melengkapi+berkas+berikut%3a%0d%0a
                    <?php 
                    if ($calon['alamat'] == '') echo '%0d%0a%3e+Data+Diri%0d%0a';
                    if ($calon['foto'] == '') echo '%3e+Pas+Foto%0d%0a';
                    if ($calon['cv'] == '') echo '%3e+CV%0d%0a';
                    if ($calon['lamaran'] == '') echo '%3e+Surat+Lamaran%0d%0a';
                    if ($calon['transkrip'] == '') echo '%3e+Transkrip+Nilai%0d%0a';
                    if ($calon['krs'] == '') echo '%3e+KRS%0d%0a';
                    if ($calon['ktm'] == '') echo '%3e+KTM%0d%0a';
                    if ($calon['sertifikat'] == '') echo '%3e+Sertifikat+jika+ada%0d%0a';
                    ?>
                    %0d%0aBatas+akhir+untuk+melengkapi+berkas+tanggal+11+Januari+2020.+Jangan+sampai+terlewat+yaa!%0d%0a%5bPesan+otomatis%5d" target="_blank"><?= $calon['no_telp'] ?></a></td>
                  <td>
                    <?php if ($calon['alamat'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['foto'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['cv'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['lamaran'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['transkrip'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['krs'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['ktm'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['sertifikat'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                </tr>
              <?php endforeach ?>
              
            </tbody>
          </table>
          <?php  
            $lengkap = 0;
            $kurang = 0;

            foreach ($depok_p as $x) {
              if ($x['alamat'] != ''
                && $x['foto'] != ''
                && $x['cv'] != ''
                && $x['lamaran'] != ''
                && $x['transkrip'] != ''
                && $x['krs'] != ''
                && $x['ktm'] != ''
                && $x['sertifikat'] != '') {
                $lengkap+=1;
              } else {
                $kurang+=1;
              }
            }
          ?>
          <div class="text-right mb-4">
            <b>Berkas Lengkap: <?= $lengkap ?></b> ||
            <b>Berkas Kurang: <?= $kurang ?></b><br>
            <b>Total: <?= $lengkap+$kurang ?></b>
          </div>



          <h3 class="mt-5"><b>Kalimalang</b></h3>
          <hr>
          <h4>Asisten</h4>
          <table class="table table-bordered">
            <thead class="text-center">
              <th>No.</th>
              <th width="10%">NPM</th>
              <th width="20%">Nama</th>
              <th width="10%">Telepon</th>
              <th>Data Diri</th>
              <th>Foto</th>
              <th>CV</th>
              <th>Lamaran</th>
              <th>Transkrip</th>
              <th>KRS</th>
              <th>KTM</th>
              <th>Sertifikat</th>
            </thead>
            <tbody class="text-center small">
              <?php $no = 1; foreach ($kalimalang_a as $calon): ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $calon['npm'] ?></td>
                  <td class="text-left"><?= $calon['nama'] ?></td>
                  <td><a href="https://wa.me/62<?= substr($calon['no_telp'], 1)?>?text=Halo+<?= $calon['nama'] ?>!%0d%0aKami+dari+Lab+Manajemen+Lanjut+mau+mengingatkan+untuk+melengkapi+berkas+berikut%3a%0d%0a
                    <?php 
                    if ($calon['alamat'] == '') echo '%0d%0a%3e+Data+Diri%0d%0a';
                    if ($calon['foto'] == '') echo '%3e+Pas+Foto%0d%0a';
                    if ($calon['cv'] == '') echo '%3e+CV%0d%0a';
                    if ($calon['lamaran'] == '') echo '%3e+Surat+Lamaran%0d%0a';
                    if ($calon['transkrip'] == '') echo '%3e+Transkrip+Nilai%0d%0a';
                    if ($calon['krs'] == '') echo '%3e+KRS%0d%0a';
                    if ($calon['ktm'] == '') echo '%3e+KTM%0d%0a';
                    if ($calon['sertifikat'] == '') echo '%3e+Sertifikat+jika+ada%0d%0a';
                    ?>
                    %0d%0aBatas+akhir+untuk+melengkapi+berkas+tanggal+11+Januari+2020.+Jangan+sampai+terlewat+yaa!%0d%0a%5bPesan+otomatis%5d" target="_blank"><?= $calon['no_telp'] ?></a></td>
                  <td>
                    <?php if ($calon['alamat'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['foto'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['cv'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['lamaran'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['transkrip'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['krs'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['ktm'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['sertifikat'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
          <?php  
            $lengkap = 0;
            $kurang = 0;

            foreach ($kalimalang_a as $x) {
              if ($x['alamat'] != ''
                && $x['foto'] != ''
                && $x['cv'] != ''
                && $x['lamaran'] != ''
                && $x['transkrip'] != ''
                && $x['krs'] != ''
                && $x['ktm'] != ''
                && $x['sertifikat'] != '') {
                $lengkap+=1;
              } else {
                $kurang+=1;
              }
            }
          ?>
          <div class="text-right mb-4">
            <b>Berkas Lengkap: <?= $lengkap ?></b> ||
            <b>Berkas Kurang: <?= $kurang ?></b><br>
            <b>Total: <?= $lengkap+$kurang ?></b>
          </div>

          <h4>Programmer</h4>
          <table class="table table-bordered">
            <thead class="text-center">
              <th>No.</th>
              <th width="10%">NPM</th>
              <th width="20%">Nama</th>
              <th width="10%">Telepon</th>
              <th>Data Diri</th>
              <th>Foto</th>
              <th>CV</th>
              <th>Lamaran</th>
              <th>Transkrip</th>
              <th>KRS</th>
              <th>KTM</th>
              <th>Sertifikat</th>
            </thead>
            <tbody class="text-center small">
              <?php $no = 1; foreach ($kalimalang_p as $calon): ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $calon['npm'] ?></td>
                  <td class="text-left"><?= $calon['nama'] ?></td>
                  <td><a href="https://wa.me/62<?= substr($calon['no_telp'], 1)?>?text=Halo+<?= $calon['nama'] ?>!%0d%0aKami+dari+Lab+Manajemen+Lanjut+mau+mengingatkan+untuk+melengkapi+berkas+berikut%3a%0d%0a
                    <?php 
                    if ($calon['alamat'] == '') echo '%0d%0a%3e+Data+Diri%0d%0a';
                    if ($calon['foto'] == '') echo '%3e+Pas+Foto%0d%0a';
                    if ($calon['cv'] == '') echo '%3e+CV%0d%0a';
                    if ($calon['lamaran'] == '') echo '%3e+Surat+Lamaran%0d%0a';
                    if ($calon['transkrip'] == '') echo '%3e+Transkrip+Nilai%0d%0a';
                    if ($calon['krs'] == '') echo '%3e+KRS%0d%0a';
                    if ($calon['ktm'] == '') echo '%3e+KTM%0d%0a';
                    if ($calon['sertifikat'] == '') echo '%3e+Sertifikat+jika+ada%0d%0a';
                    ?>
                    %0d%0aBatas+akhir+untuk+melengkapi+berkas+tanggal+11+Januari+2020.+Jangan+sampai+terlewat+yaa!%0d%0a%5bPesan+otomatis%5d" target="_blank"><?= $calon['no_telp'] ?></a></td>
                  <td>
                    <?php if ($calon['alamat'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['foto'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['cv'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['lamaran'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['transkrip'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['krs'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['ktm'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['sertifikat'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                </tr>
              <?php endforeach ?>
              
            </tbody>
          </table>
          <?php  
            $lengkap = 0;
            $kurang = 0;

            foreach ($kalimalang_p as $x) {
              if ($x['alamat'] != ''
                && $x['foto'] != ''
                && $x['cv'] != ''
                && $x['lamaran'] != ''
                && $x['transkrip'] != ''
                && $x['krs'] != ''
                && $x['ktm'] != ''
                && $x['sertifikat'] != '') {
                $lengkap+=1;
              } else {
                $kurang+=1;
              }
            }
          ?>
          <div class="text-right mb-4">
            <b>Berkas Lengkap: <?= $lengkap ?></b> ||
            <b>Berkas Kurang: <?= $kurang ?></b><br>
            <b>Total: <?= $lengkap+$kurang ?></b>
          </div>



          <h3 class="mt-5"><b>Karawaci</b></h3>
          <hr>
          <h4>Asisten</h4>
          <table class="table table-bordered">
            <thead class="text-center">
              <th>No.</th>
              <th width="10%">NPM</th>
              <th width="20%">Nama</th>
              <th width="10%">Telepon</th>
              <th>Data Diri</th>
              <th>Foto</th>
              <th>CV</th>
              <th>Lamaran</th>
              <th>Transkrip</th>
              <th>KRS</th>
              <th>KTM</th>
              <th>Sertifikat</th>
            </thead>
            <tbody class="text-center small">
              <?php $no = 1; foreach ($karawaci_a as $calon): ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $calon['npm'] ?></td>
                  <td class="text-left"><?= $calon['nama'] ?></td>
                  <td><a href="https://wa.me/62<?= substr($calon['no_telp'], 1)?>?text=Halo+<?= $calon['nama'] ?>!%0d%0aKami+dari+Lab+Manajemen+Lanjut+mau+mengingatkan+untuk+melengkapi+berkas+berikut%3a%0d%0a
                    <?php 
                    if ($calon['alamat'] == '') echo '%0d%0a%3e+Data+Diri%0d%0a';
                    if ($calon['foto'] == '') echo '%3e+Pas+Foto%0d%0a';
                    if ($calon['cv'] == '') echo '%3e+CV%0d%0a';
                    if ($calon['lamaran'] == '') echo '%3e+Surat+Lamaran%0d%0a';
                    if ($calon['transkrip'] == '') echo '%3e+Transkrip+Nilai%0d%0a';
                    if ($calon['krs'] == '') echo '%3e+KRS%0d%0a';
                    if ($calon['ktm'] == '') echo '%3e+KTM%0d%0a';
                    if ($calon['sertifikat'] == '') echo '%3e+Sertifikat+jika+ada%0d%0a';
                    ?>
                    %0d%0aBatas+akhir+untuk+melengkapi+berkas+tanggal+11+Januari+2020.+Jangan+sampai+terlewat+yaa!%0d%0a%5bPesan+otomatis%5d" target="_blank"><?= $calon['no_telp'] ?></a></td>
                  <td>
                    <?php if ($calon['alamat'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['foto'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['cv'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['lamaran'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['transkrip'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['krs'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['ktm'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['sertifikat'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
          <?php  
            $lengkap = 0;
            $kurang = 0;

            foreach ($karawaci_a as $x) {
              if ($x['alamat'] != ''
                && $x['foto'] != ''
                && $x['cv'] != ''
                && $x['lamaran'] != ''
                && $x['transkrip'] != ''
                && $x['krs'] != ''
                && $x['ktm'] != ''
                && $x['sertifikat'] != '') {
                $lengkap+=1;
              } else {
                $kurang+=1;
              }
            }
          ?>
          <div class="text-right mb-4">
            <b>Berkas Lengkap: <?= $lengkap ?></b> ||
            <b>Berkas Kurang: <?= $kurang ?></b><br>
            <b>Total: <?= $lengkap+$kurang ?></b>
          </div>

          <h4>Programmer</h4>
          <table class="table table-bordered">
            <thead class="text-center">
              <th>No.</th>
              <th width="10%">NPM</th>
              <th width="20%">Nama</th>
              <th width="10%">Telepon</th>
              <th>Data Diri</th>
              <th>Foto</th>
              <th>CV</th>
              <th>Lamaran</th>
              <th>Transkrip</th>
              <th>KRS</th>
              <th>KTM</th>
              <th>Sertifikat</th>
            </thead>
            <tbody class="text-center small">
              <?php $no = 1; foreach ($karawaci_p as $calon): ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $calon['npm'] ?></td>
                  <td class="text-left"><?= $calon['nama'] ?></td>
                  <td><a href="https://wa.me/62<?= substr($calon['no_telp'], 1)?>?text=Halo+<?= $calon['nama'] ?>!%0d%0aKami+dari+Lab+Manajemen+Lanjut+mau+mengingatkan+untuk+melengkapi+berkas+berikut%3a%0d%0a
                    <?php 
                    if ($calon['alamat'] == '') echo '%0d%0a%3e+Data+Diri%0d%0a';
                    if ($calon['foto'] == '') echo '%3e+Pas+Foto%0d%0a';
                    if ($calon['cv'] == '') echo '%3e+CV%0d%0a';
                    if ($calon['lamaran'] == '') echo '%3e+Surat+Lamaran%0d%0a';
                    if ($calon['transkrip'] == '') echo '%3e+Transkrip+Nilai%0d%0a';
                    if ($calon['krs'] == '') echo '%3e+KRS%0d%0a';
                    if ($calon['ktm'] == '') echo '%3e+KTM%0d%0a';
                    if ($calon['sertifikat'] == '') echo '%3e+Sertifikat+jika+ada%0d%0a';
                    ?>
                    %0d%0aBatas+akhir+untuk+melengkapi+berkas+tanggal+11+Januari+2020.+Jangan+sampai+terlewat+yaa!%0d%0a%5bPesan+otomatis%5d" target="_blank"><?= $calon['no_telp'] ?></a></td>
                  <td>
                    <?php if ($calon['alamat'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['foto'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['cv'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['lamaran'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['transkrip'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['krs'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['ktm'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['sertifikat'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                </tr>
              <?php endforeach ?>
              
            </tbody>
          </table>
          <?php  
            $lengkap = 0;
            $kurang = 0;

            foreach ($karawaci_p as $x) {
              if ($x['alamat'] != ''
                && $x['foto'] != ''
                && $x['cv'] != ''
                && $x['lamaran'] != ''
                && $x['transkrip'] != ''
                && $x['krs'] != ''
                && $x['ktm'] != ''
                && $x['sertifikat'] != '') {
                $lengkap+=1;
              } else {
                $kurang+=1;
              }
            }
          ?>
          <div class="text-right mb-4">
            <b>Berkas Lengkap: <?= $lengkap ?></b> ||
            <b>Berkas Kurang: <?= $kurang ?></b><br>
            <b>Total: <?= $lengkap+$kurang ?></b>
          </div>


          <h3 class="mt-5"><b>Salemba</b></h3>
          <hr>
          <h4>Asisten</h4>
          <table class="table table-bordered">
            <thead class="text-center">
              <th>No.</th>
              <th width="10%">NPM</th>
              <th width="20%">Nama</th>
              <th width="10%">Telepon</th>
              <th>Data Diri</th>
              <th>Foto</th>
              <th>CV</th>
              <th>Lamaran</th>
              <th>Transkrip</th>
              <th>KRS</th>
              <th>KTM</th>
              <th>Sertifikat</th>
            </thead>
            <tbody class="text-center small">
              <?php $no = 1; foreach ($salemba_a as $calon): ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $calon['npm'] ?></td>
                  <td class="text-left"><?= $calon['nama'] ?></td>
                  <td><a href="https://wa.me/62<?= substr($calon['no_telp'], 1)?>?text=Halo+<?= $calon['nama'] ?>!%0d%0aKami+dari+Lab+Manajemen+Lanjut+mau+mengingatkan+untuk+melengkapi+berkas+berikut%3a%0d%0a
                    <?php 
                    if ($calon['alamat'] == '') echo '%0d%0a%3e+Data+Diri%0d%0a';
                    if ($calon['foto'] == '') echo '%3e+Pas+Foto%0d%0a';
                    if ($calon['cv'] == '') echo '%3e+CV%0d%0a';
                    if ($calon['lamaran'] == '') echo '%3e+Surat+Lamaran%0d%0a';
                    if ($calon['transkrip'] == '') echo '%3e+Transkrip+Nilai%0d%0a';
                    if ($calon['krs'] == '') echo '%3e+KRS%0d%0a';
                    if ($calon['ktm'] == '') echo '%3e+KTM%0d%0a';
                    if ($calon['sertifikat'] == '') echo '%3e+Sertifikat+jika+ada%0d%0a';
                    ?>
                    %0d%0aBatas+akhir+untuk+melengkapi+berkas+tanggal+11+Januari+2020.+Jangan+sampai+terlewat+yaa!%0d%0a%5bPesan+otomatis%5d" target="_blank"><?= $calon['no_telp'] ?></a></td>
                  <td>
                    <?php if ($calon['alamat'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['foto'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['cv'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['lamaran'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['transkrip'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['krs'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['ktm'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['sertifikat'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
          <?php  
            $lengkap = 0;
            $kurang = 0;

            foreach ($salemba_a as $x) {
              if ($x['alamat'] != ''
                && $x['foto'] != ''
                && $x['cv'] != ''
                && $x['lamaran'] != ''
                && $x['transkrip'] != ''
                && $x['krs'] != ''
                && $x['ktm'] != ''
                && $x['sertifikat'] != '') {
                $lengkap+=1;
              } else {
                $kurang+=1;
              }
            }
          ?>
          <div class="text-right mb-4">
            <b>Berkas Lengkap: <?= $lengkap ?></b> ||
            <b>Berkas Kurang: <?= $kurang ?></b><br>
            <b>Total: <?= $lengkap+$kurang ?></b>
          </div>

          <h4>Programmer</h4>
          <table class="table table-bordered">
            <thead class="text-center">
              <th>No.</th>
              <th width="10%">NPM</th>
              <th width="20%">Nama</th>
              <th width="10%">Telepon</th>
              <th>Data Diri</th>
              <th>Foto</th>
              <th>CV</th>
              <th>Lamaran</th>
              <th>Transkrip</th>
              <th>KRS</th>
              <th>KTM</th>
              <th>Sertifikat</th>
            </thead>
            <tbody class="text-center small">
              <?php $no = 1; foreach ($salemba_p as $calon): ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $calon['npm'] ?></td>
                  <td class="text-left"><?= $calon['nama'] ?></td>
                  <td><a href="https://wa.me/62<?= substr($calon['no_telp'], 1)?>?text=Halo+<?= $calon['nama'] ?>!%0d%0aKami+dari+Lab+Manajemen+Lanjut+mau+mengingatkan+untuk+melengkapi+berkas+berikut%3a%0d%0a
                    <?php 
                    if ($calon['alamat'] == '') echo '%0d%0a%3e+Data+Diri%0d%0a';
                    if ($calon['foto'] == '') echo '%3e+Pas+Foto%0d%0a';
                    if ($calon['cv'] == '') echo '%3e+CV%0d%0a';
                    if ($calon['lamaran'] == '') echo '%3e+Surat+Lamaran%0d%0a';
                    if ($calon['transkrip'] == '') echo '%3e+Transkrip+Nilai%0d%0a';
                    if ($calon['krs'] == '') echo '%3e+KRS%0d%0a';
                    if ($calon['ktm'] == '') echo '%3e+KTM%0d%0a';
                    if ($calon['sertifikat'] == '') echo '%3e+Sertifikat+jika+ada%0d%0a';
                    ?>
                    %0d%0aBatas+akhir+untuk+melengkapi+berkas+tanggal+11+Januari+2020.+Jangan+sampai+terlewat+yaa!%0d%0a%5bPesan+otomatis%5d" target="_blank"><?= $calon['no_telp'] ?></a></td>
                  <td>
                    <?php if ($calon['alamat'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['foto'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['cv'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['lamaran'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['transkrip'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['krs'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['ktm'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['sertifikat'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                </tr>
              <?php endforeach ?>
              
            </tbody>
          </table>
          <?php  
            $lengkap = 0;
            $kurang = 0;

            foreach ($salemba_p as $x) {
              if ($x['alamat'] != ''
                && $x['foto'] != ''
                && $x['cv'] != ''
                && $x['lamaran'] != ''
                && $x['transkrip'] != ''
                && $x['krs'] != ''
                && $x['ktm'] != ''
                && $x['sertifikat'] != '') {
                $lengkap+=1;
              } else {
                $kurang+=1;
              }
            }
          ?>
          <div class="text-right mb-4">
            <b>Berkas Lengkap: <?= $lengkap ?></b> ||
            <b>Berkas Kurang: <?= $kurang ?></b><br>
            <b>Total: <?= $lengkap+$kurang ?></b>
          </div>


          <h3 class="mt-5"><b>Cengkareng</b></h3>
          <hr>
          <h4>Asisten</h4>
          <table class="table table-bordered">
            <thead class="text-center">
              <th>No.</th>
              <th width="10%">NPM</th>
              <th width="20%">Nama</th>
              <th width="10%">Telepon</th>
              <th>Data Diri</th>
              <th>Foto</th>
              <th>CV</th>
              <th>Lamaran</th>
              <th>Transkrip</th>
              <th>KRS</th>
              <th>KTM</th>
              <th>Sertifikat</th>
            </thead>
            <tbody class="text-center small">
              <?php $no = 1; foreach ($cengkareng_a as $calon): ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $calon['npm'] ?></td>
                  <td class="text-left"><?= $calon['nama'] ?></td>
                  <td><a href="https://wa.me/62<?= substr($calon['no_telp'], 1)?>?text=Halo+<?= $calon['nama'] ?>!%0d%0aKami+dari+Lab+Manajemen+Lanjut+mau+mengingatkan+untuk+melengkapi+berkas+berikut%3a%0d%0a
                    <?php 
                    if ($calon['alamat'] == '') echo '%0d%0a%3e+Data+Diri%0d%0a';
                    if ($calon['foto'] == '') echo '%3e+Pas+Foto%0d%0a';
                    if ($calon['cv'] == '') echo '%3e+CV%0d%0a';
                    if ($calon['lamaran'] == '') echo '%3e+Surat+Lamaran%0d%0a';
                    if ($calon['transkrip'] == '') echo '%3e+Transkrip+Nilai%0d%0a';
                    if ($calon['krs'] == '') echo '%3e+KRS%0d%0a';
                    if ($calon['ktm'] == '') echo '%3e+KTM%0d%0a';
                    if ($calon['sertifikat'] == '') echo '%3e+Sertifikat+jika+ada%0d%0a';
                    ?>
                    %0d%0aBatas+akhir+untuk+melengkapi+berkas+tanggal+11+Januari+2020.+Jangan+sampai+terlewat+yaa!%0d%0a%5bPesan+otomatis%5d" target="_blank"><?= $calon['no_telp'] ?></a></td>
                  <td>
                    <?php if ($calon['alamat'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['foto'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['cv'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['lamaran'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['transkrip'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['krs'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['ktm'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['sertifikat'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
          <?php  
            $lengkap = 0;
            $kurang = 0;

            foreach ($cengkareng_a as $x) {
              if ($x['alamat'] != ''
                && $x['foto'] != ''
                && $x['cv'] != ''
                && $x['lamaran'] != ''
                && $x['transkrip'] != ''
                && $x['krs'] != ''
                && $x['ktm'] != ''
                && $x['sertifikat'] != '') {
                $lengkap+=1;
              } else {
                $kurang+=1;
              }
            }
          ?>
          <div class="text-right mb-4">
            <b>Berkas Lengkap: <?= $lengkap ?></b> ||
            <b>Berkas Kurang: <?= $kurang ?></b><br>
            <b>Total: <?= $lengkap+$kurang ?></b>
          </div>

          <h4>Programmer</h4>
          <table class="table table-bordered">
            <thead class="text-center">
              <th>No.</th>
              <th width="10%">NPM</th>
              <th width="20%">Nama</th>
              <th width="10%">Telepon</th>
              <th>Data Diri</th>
              <th>Foto</th>
              <th>CV</th>
              <th>Lamaran</th>
              <th>Transkrip</th>
              <th>KRS</th>
              <th>KTM</th>
              <th>Sertifikat</th>
            </thead>
            <tbody class="text-center small">
              <?php $no = 1; foreach ($cengkareng_p as $calon): ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $calon['npm'] ?></td>
                  <td class="text-left"><?= $calon['nama'] ?></td>
                  <td><a href="https://wa.me/62<?= substr($calon['no_telp'], 1)?>?text=Halo+<?= $calon['nama'] ?>!%0d%0aKami+dari+Lab+Manajemen+Lanjut+mau+mengingatkan+untuk+melengkapi+berkas+berikut%3a%0d%0a
                    <?php 
                    if ($calon['alamat'] == '') echo '%0d%0a%3e+Data+Diri%0d%0a';
                    if ($calon['foto'] == '') echo '%3e+Pas+Foto%0d%0a';
                    if ($calon['cv'] == '') echo '%3e+CV%0d%0a';
                    if ($calon['lamaran'] == '') echo '%3e+Surat+Lamaran%0d%0a';
                    if ($calon['transkrip'] == '') echo '%3e+Transkrip+Nilai%0d%0a';
                    if ($calon['krs'] == '') echo '%3e+KRS%0d%0a';
                    if ($calon['ktm'] == '') echo '%3e+KTM%0d%0a';
                    if ($calon['sertifikat'] == '') echo '%3e+Sertifikat+jika+ada%0d%0a';
                    ?>
                    %0d%0aBatas+akhir+untuk+melengkapi+berkas+tanggal+11+Januari+2020.+Jangan+sampai+terlewat+yaa!%0d%0a%5bPesan+otomatis%5d" target="_blank"><?= $calon['no_telp'] ?></a></td>
                  <td>
                    <?php if ($calon['alamat'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['foto'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['cv'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['lamaran'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['transkrip'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['krs'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['ktm'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                  <td>
                    <?php if ($calon['sertifikat'] != ''): ?>
                      <i class="fas fa-check green-text"></i>
                    <?php else: ?>
                      <i class="fas fa-times red-text"></i>
                    <?php endif ?>
                  </td>
                </tr>
              <?php endforeach ?>
              
            </tbody>
          </table>
          <?php  
            $lengkap = 0;
            $kurang = 0;

            foreach ($cengkareng_p as $x) {
              if ($x['alamat'] != ''
                && $x['foto'] != ''
                && $x['cv'] != ''
                && $x['lamaran'] != ''
                && $x['transkrip'] != ''
                && $x['krs'] != ''
                && $x['ktm'] != ''
                && $x['sertifikat'] != '') {
                $lengkap+=1;
              } else {
                $kurang+=1;
              }
            }
          ?>
          <div class="text-right mb-4">
            <b>Berkas Lengkap: <?= $lengkap ?></b> ||
            <b>Berkas Kurang: <?= $kurang ?></b><br>
            <b>Total: <?= $lengkap+$kurang ?></b>
          </div>


        </div>

        
      
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Oprec Manlan 2020</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
    
      </div>
      <!-- End of Content Wrapper -->
    
    </div>
    <!-- End of Page Wrapper -->
    
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
  </body>
</html>