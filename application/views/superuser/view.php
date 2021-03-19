
	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">
		<!-- Main Content -->
		<div id="content">
			
			<!-- Topbar -->
			<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
				<!-- Sidebar Toggle (Topbar) -->
				<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
				<i class="fa fa-bars"></i>
				</button>
				<!-- Topbar Navbar -->
				<ul class="navbar-nav ml-auto">
					<!-- Nav Item - User Information -->
					<li class="nav-item dropdown no-arrow">
						<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="mr-2 d-none d-lg-inline text-gray-600 small">Superuser</span>
							<!-- <img class="img-profile rounded-circle" src="img/undraw_profile.svg"> -->
							<i class="fas fa-user"></i>
						</a>
						
						<!-- Dropdown - User Information -->
						<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
							<a class="dropdown-item" data-toggle="modal" data-target="#logoutModal" onclick="logout()" href="#">
								<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
								Logout
							</a>
						</div>
					</li>
				</ul>
			</nav>
			<!-- End of Topbar -->

			<!-- Begin Page Content -->
			<div class="container-fluid">
				<!-- Page Heading -->
				<div class="d-sm-flex align-items-center justify-content-between mb-4">
					
				</div>
				<!-- Content Row -->
				<div class="container">
					<div class="row">
						<div class="col-md-6 mb-4">
							<div id="profile" class="card shadow-sm mb-3">
								<div class="card-body text-center">
									<div class="card-title text-center">
										<?php
										if ($su['foto'] != null) {
										$path = base_url('assets/berkas/').$su['npm'].'/'.$su['foto'];
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
												<span>: <?= $su['nama']; ?></span>
											</div>
										</div>
										<div class="row">
											<div class="col-4">NPM</div>
											<div class="col-8">
												<span>: <?= $su['npm']; ?></span>
											</div>
										</div>
										<div class="row">
											<div class="col-4">Kelas</div>
											<div class="col-8">
												<span>: <?= $su['kelas']; ?></span>
											</div>
										</div>
										<div class="row">
											<div class="col-4">Domisili</div>
											<div class="col-8">
												<span>: <?= $su['domisili']; ?></span>
											</div>
										</div>
										<div class="row">
											<div class="col-4">Jurusan</div>
											<div class="col-8">
												<span>: <?= $su['jurusan']; ?></span>
											</div>
										</div>
										<div class="row">
											<div class="col-4">Angkatan</div>
											<div class="col-8">
												<span>: <?= $su['angkatan']; ?></span>
											</div>
										</div>
										<div class="row">
											<div class="col-4">Posisi</div>
											<div class="col-8">
												<span>: <?= $su['posisi']; ?></span>
											</div>
										</div>
										<div class="row">
											<div class="col-4">No. Whatsapp</div>
											<div class="col-8">
												<span>: <?= $su['no_telp']; ?></span>
											</div>
										</div>
										<div class="row">
											<div class="col-4">Tanggal Lahir</div>
											<div class="col-8">
												<?php if ($su['tanggal_lahir'] == null): ?>
												<span>: <i class="red-text">Kosong!</i></span>
												<?php else: ?>
												<span>: <?= $su['tanggal_lahir']; ?></span>
												<?php endif ?>
											</div>
										</div>
										<div class="row">
											<div class="col-4">Tempat Lahir</div>
											<div class="col-8">
												<?php if ($su['tempat_lahir'] == null): ?>
												<span>: <i class="red-text">Kosong!</i></span>
												<?php else: ?>
												<span>: <?= $su['tempat_lahir']; ?></span>
												<?php endif ?>
											</div>
										</div>
										<div class="row">
											<div class="col-4">Alamat</div>
											<div class="col-8">
												<?php if ($su['alamat'] == null): ?>
												<span>: <i class="red-text">Kosong!</i></span>
												<?php else: ?>
												<span class="d-inline-block text-truncate" style="max-width: 100%">: <?= $su['alamat']; ?></span>
												<?php endif ?>
											</div>
										</div>
									</div>									
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card shadow-sm mb-3">
								<div class="card-header py-2 blue">
									<h6 class="m-0 font-weight-bold white-text">Kelengkapan Berkas</h6>
								</div>
								<div class="card-body p-0 text-center">
									<ul class="list-group list-group-flush text-left">
										<li class="list-group-item">
											<?php if ($su['foto'] == null): ?>
											<i class="fas fa-exclamation-circle red-text mr-2"></i>
											<?php else: ?>
											<i class="fas fa-check-circle green-text mr-2"></i>
											<?php endif ?>
											Pas Foto
											<a href="<?= base_url('assets/berkas/').$su['npm'].'/'.$su['foto'] ?>" class="float-right" target="_blank">
												<i class="fas fa-eye mr-2"></i>Open
											</a>
										</li>
										<li class="list-group-item">
											<?php if ($su['cv'] == null): ?>
											<i class="fas fa-exclamation-circle red-text mr-2"></i>
											<?php else: ?>
											<i class="fas fa-check-circle green-text mr-2"></i>
											<?php endif ?>
											Curriculum vitae
											<a href="<?= base_url('assets/berkas/').$su['npm'].'/'.$su['cv'] ?>" class="float-right" target="_blank">
												<i class="fas fa-eye mr-2"></i>Open
											</a>
										</li>
										<li class="list-group-item">
											<?php if ($su['lamaran'] == null): ?>
											<i class="fas fa-exclamation-circle red-text mr-2"></i>
											<?php else: ?>
											<i class="fas fa-check-circle green-text mr-2"></i>
											<?php endif ?>
											Surat Lamaran
											<a href="<?= base_url('assets/berkas/').$su['npm'].'/'.$su['lamaran'] ?>" class="float-right" target="_blank">
												<i class="fas fa-eye mr-2"></i>Open
											</a>
										</li>
										<li class="list-group-item">
											<?php if ($su['transkrip'] == null): ?>
											<i class="fas fa-exclamation-circle red-text mr-2"></i>
											<?php else: ?>
											<i class="fas fa-check-circle green-text mr-2"></i>
											<?php endif ?>
											Transkrip Nilai
											<a href="<?= base_url('assets/berkas/').$su['npm'].'/'.$su['transkrip'] ?>" class="float-right" target="_blank">
												<i class="fas fa-eye mr-2"></i>Open
											</a>
										</li>
										<li class="list-group-item">
											<?php if ($su['krs'] == null): ?>
											<i class="fas fa-exclamation-circle red-text mr-2"></i>
											<?php else: ?>
											<i class="fas fa-check-circle green-text mr-2"></i>
											<?php endif ?>
											KRS Aktif
											<a href="<?= base_url('assets/berkas/').$su['npm'].'/'.$su['krs'] ?>" class="float-right" target="_blank">
												<i class="fas fa-eye mr-2"></i>Open
											</a>
										</li>
										<li class="list-group-item">
											<?php if ($su['ktm'] == null): ?>
											<i class="fas fa-exclamation-circle red-text mr-2"></i>
											<?php else: ?>
											<i class="fas fa-check-circle green-text mr-2"></i>
											<?php endif ?>
											KTM
											<a href="<?= base_url('assets/berkas/').$su['npm'].'/'.$su['ktm'] ?>" class="float-right" target="_blank">
												<i class="fas fa-eye mr-2"></i>Open
											</a>
										</li>
										<li class="list-group-item">
											<?php if ($su['sertifikat'] == null): ?>
											<i class="fas fa-exclamation-circle red-text mr-2"></i>
											<?php else: ?>
											<i class="fas fa-check-circle green-text mr-2"></i>
											<?php endif ?>
											Sertifikat
											<a href="<?= base_url('assets/berkas/').$su['npm'].'/'.$su['sertifikat'] ?>" class="float-right" target="_blank">
												<i class="fas fa-eye mr-2"></i>Open
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<?php if ($tahap == 'tutor_wawancara'): ?>
						<h4 class="mt-2">Hasil Penilaian Tes Tutor</h4>
						<table class="table table-bordered table-responsive">
							<thead class="text-center">
								<th class="align-middle" style="width: 5%">No.</th>
								<th style="width: 5%">Penyampaian Materi</th>
								<th style="width: 5%">Penguasaan Materi</th>
								<th style="width: 5%">Pengetahuan Umum</th>
								<th class="align-middle" style="width: 5%">Kerapihan</th>
								<th class="align-middle" style="width: 5%">Ketegasan</th>
								<th class="align-middle" style="width: 5%">Total</th>
								<th class="align-middle">Rekomendasi</th>
							</thead>
							<tbody>
								<?php $no = 1; foreach ($tutor as $t): ?>
									<tr>
										<td class="text-center"><?= $no++ ?></td>
										<td class="text-center"><?= $t['penyampaian'] ?></td>
										<td class="text-center"><?= $t['penguasaan'] ?></td>
										<td class="text-center"><?= $t['umum'] ?></td>
										<td class="text-center"><?= $t['kerapihan'] ?></td>
										<td class="text-center"><?= $t['ketegasan'] ?></td>
										<td class="text-center"><?= $t['penyampaian'] + $t['penguasaan'] + $t['umum'] + $t['kerapihan'] + $t['ketegasan'] ?></td>
										<td class="text-center"><?= $t['rekomendasi'] ?>. (<?= $t['nama_penilai'] ?>)</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>

						<h4 class="mt-4">Hasil Penilaian Wawancara SPV</h4>
						<table class="table table-bordered table-responsive">
							<thead class="text-center">
								<th class="align-middle" style="width: 5%">No.</th>
								<th style="width: 20%">Nama Pewawancara</th>
								<th class="align-middle" >Komentar</th>
							</thead>
							<tbody>
								<?php $no = 1; foreach ($wawancara as $w): ?>
									<tr>
										<td class="text-center"><?= $no++ ?></td>
										<td><?= $w['nama_penilai'] ?></td>
										<td><?= $w['komentar'] ?></td>
									</tr>	
								<?php endforeach ?>
							</tbody>
						</table>
						
					<?php endif ?>

					<div class="text-center">
						<?php if ($tahap != 'none'): ?>
							<form action="<?= base_url('superuser/').$tahap ?>" method="POST">
							<input type="hidden" name="npm" value="<?= $su['npm'] ?>">
							<input type="submit" name="terima" class="btn btn-lg btn-success" value="TERIMA">
							<input type="submit" name="tolak" class="btn btn-lg btn-danger" value="TOLAK">
						</form>
						<?php endif ?>
						
					</div>

				</div>
			</div>
			<!-- /.container-fluid -->
		</div>
		<!-- End of Main Content -->
		
		<!-- Footer -->
		<footer class="sticky-footer bg-white">
			<div class="container my-auto">
				<div class="copyright text-center my-auto">
					<span>Copyright &copy; Lab Manajemen Lanjut 2020</span>
				</div>
			</div>
		</footer>
		<!-- End of Footer -->
		
	</div>
	<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->