
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
					<div id="profile" class="card shadow-sm mb-3">
						<div class="card-body">
							<div class="row">
								<div class="col-md-3 mb-2">
									<div class="card-title text-center">
										<?php
										if ($su['foto'] != null) {
										$path = base_url('assets/berkas/').$su['npm'].'/'.$su['foto'];
										} else {
										$path = base_url('assets/img/profile/default.jpg');
										}
										?>
										<img class="img-fluid rounded-circle mb-2" src="<?= $path ?>" style="height: 200px; width: 200px">
										<h4><b><?= $su['nama']; ?></b></h4>
									</div>								
								</div>
								<div class="col-md-6">
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
								<div class="col-md-3">
									<b>Berkas</b>
									<p>
										<a href="<?= base_url('assets/berkas/').$su['npm'].'/'.$su['cv'] ?>" target="_blank" class="btn btn-sm btn-block btn-primary text-left">
											<i class="fas fa-file mr-2"></i>CV
										</a>
									</p>
									<p>
										<a href="<?= base_url('assets/berkas/').$su['npm'].'/'.$su['transkrip'] ?>" target="_blank" class="btn btn-sm btn-block btn-primary text-left">
											<i class="fas fa-file mr-2"></i>Transkrip Nilai
										</a>
									</p>
									<p>
										<a href="<?= base_url('assets/berkas/').$su['npm'].'/'.$su['sertifikat'] ?>" target="_blank" class="btn btn-sm btn-block btn-primary text-left">
											<i class="fas fa-file mr-2"></i>Sertifikat
										</a>
									</p>
								</div>
							</div>
						</div>
					</div>
					<h4 class="mt-4">Penilaian</h4>
					<?php if ($tes == 'tutor'): ?>
						<style type="text/css">
							table td {
								position: relative;
							}
							table td input {
								position: absolute;
								display: block;
								top:0;
								left:0;
								margin: 0;
								height: 100% !important;
								width: 100%;
								border-radius: 0 !important;
								border: none;
								padding: 10px;
								box-sizing: border-box;
							}
						</style>
						<form method="post" action="<?= base_url('superuser/nilai/tutor/'.$su['npm']) ?>">
							<div class="card shadow-sm mb-3">
								<div class="card-header py-2 green">
									<h6 class="m-0 font-weight-bold white-text">Tes Tutor</h6>
								</div>
								<div class="card-body">
									<table class="table table-bordered table-responsive">
										<thead class="text-center">
											<th style="width: 5%">Penyampaian Materi</th>
											<th style="width: 5%">Penguasaan Materi</th>
											<th style="width: 5%">Pengetahuan Umum</th>
											<th class="align-middle" style="width: 5%">Kerapihan</th>
											<th class="align-middle" style="width: 5%">Ketegasan</th>
											<th class="align-middle">Rekomendasi</th>
										</thead>
										<tbody>
											<tr>
												<td class="py-4"><input type="number" placeholder="Nilai" name="penyampaian"></td>
												<td><input type="number" placeholder="Nilai" name="penguasaan"></td>
												<td><input type="number" placeholder="Nilai" name="umum"></td>
												<td><input type="number" placeholder="Nilai" name="kerapihan"></td>
												<td><input type="number" placeholder="Nilai" name="ketegasan"></td>
												<td><input type="text" placeholder="Isi rekomendasi ..." name="rekomendasi"></td>
											</tr>
										</tbody>
									</table>
									<div class="col-md-4 p-0">
										<div class="form-group mt-4">
											<input class="form-control" type="text" name="penilai" id="penilai" placeholder="Nama Penilai">
										</div>
										<input type="submit" name="tutor" value="Input Nilai Tutor" class="btn btn-primary">
									</div>
								</div>
							</div>
						</form>
					<?php endif ?>

					<?php if ($tes == 'wawancara'): ?>
						<form method="post" action="<?= base_url('superuser/nilai/wawancara/'.$su['npm']) ?>">
							<div class="card shadow-sm">
								<div class="card-header py-2 green">
									<h6 class="m-0 font-weight-bold white-text">Wawancara SPV</h6>
								</div>
								<div class="card-body">
									<div class="form-group">
										<label>Komentar</label>
										<textarea class="form-control" rows="4" name="komentar"></textarea>
									</div>
									<div class="col-md-4 p-0">
										<div class="form-group">
											<input class="form-control" type="text" name="penilai" id="penilai" placeholder="Nama Penilai">
										</div>
										<input type="submit" name="wawancara" value="Input Nilai Wawancara" class="btn btn-primary">	
									</div>
								</div>
							</div>
						</form>
					<?php endif ?>

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