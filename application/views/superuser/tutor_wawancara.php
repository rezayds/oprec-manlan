
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
              <h1 class="h3 mb-0 text-gray-800">Seleksi Tes Tutor, Wawancara SPV, Programmer</h1>
              <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">  <i class="fas fa-download fa-sm text-white-50"></i> 
                Generate Report
              </a> -->
            </div>

            <!-- Content Row -->
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary">Tabel Asisten dan Programmer</h6>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead class="text-center">
											<tr>
                        <th width="20">No.</th>
												<th>NPM</th>
												<th>Nama</th>
												<th>Posisi</th>
												<th>Region</th>
                        <th>Status</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tfoot class="text-center">
											<tr>
                        <th>No.</th>
												<th>NPM</th>
												<th>Nama</th>
												<th>Posisi</th>
												<th>Region</th>
                        <th>Status</th>
												<th>Aksi</th>
											</tr>
										</tfoot>
										<tbody>
                      <?php $no=1; foreach ($su as $s): ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $s['npm'] ?></td>
                        <td><?= $s['nama'] ?></td>
                        <td><?= $s['posisi'] ?></td>
                        <td><?= $s['domisili'] ?></td>
                        <td>
                          <?php 
                          if ($s['tahap_3'] == 1) {
                            echo "<b class='green-text'>Lolos</b>";
                          } elseif ($s['tahap_3'] == 2) {
                            echo "<b class='red-text'>Ditolak</b>";
                          } else {
                            echo "<b>Pending</b>";
                          }
                          ?>
                          
                        </td>
                        <td class="text-center">
                          <a href="<?= base_url('superuser/view/tutor_wawancara/').$s['npm'] ?>" target="_blank" class="btn btn-primary btn-sm">
                            <i class="fas fa-eye mr-1"></i>Lihat
                          </a>
                          <a href="<?= base_url('superuser/nilai/tutor/').$s['npm'] ?>" target="_blank" class="btn btn-primary btn-sm">
                            <i class="fas fa-eye mr-1"></i>Tutor
                          </a>
                          <a href="<?= base_url('superuser/nilai/wawancara/').$s['npm'] ?>" target="_blank" class="btn btn-primary btn-sm">
                            <i class="fas fa-eye mr-1"></i>Wawancara
                          </a>
                        </td>
                      </tr>
                      <?php endforeach ?>
										</tbody>
									</table>
								</div>
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
    
