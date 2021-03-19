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
              <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
              <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">  <i class="fas fa-download fa-sm text-white-50"></i> 
                Generate Report
              </a> -->
            </div>

            <!-- Content Row -->
            <div class="row">
              <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <i class="fas fa-book-reader fa-3x text-gray-300 mr-4"></i>
                      </div>
                      <div class="col mr-2">
                        <h1 class="display-4 font-weight-bold text-gray-800"><?= $total_asisten ?></h1>
                        <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                          Asisten
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <i class="fas fa-laptop fa-3x text-gray-300 mr-4"></i>
                      </div>
                      <div class="col mr-2">
                        <h1 class="display-4 font-weight-bold text-gray-800"><?= $total_programmer ?></h1>
                        <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                          Programmer
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <i class="fas fa-users fa-3x text-gray-300 mr-4"></i>
                      </div>
                      <div class="col mr-2">
                        <h1 class="display-4 font-weight-bold text-gray-800"><?= $total_calon ?></h1>
                        <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                          Total Pendaftar
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Content Row -->
            <div class="row">
              <!-- Pie Chart -->
              <div class="col-md-6">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pendaftar Berdasarkan Region</h6>
                  </div>  
                  <div class="card-body">
                    <div class="chart-pie pt-2 pb-2">
                      <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                      <span class="mr-1">
                        <i class="fas fa-circle text-primary"></i> Depok
                      </span>
                      <span class="mr-1">
                        <i class="fas fa-circle text-success"></i> Kalimalang
                      </span>
                      <span class="mr-1">
                        <i class="fas fa-circle text-info"></i> Karawaci
                      </span>
                      <span class="mr-1">
                        <i class="fas fa-circle amber-text"></i> Salemba
                      </span>
                      <span class="mr-1">
                        <i class="fas fa-circle purple-text"></i> Cengkareng
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pendaftar Berdasarkan Tingkat</h6>
                  </div>  
                  <div class="card-body">
                    <div class="chart-pie pt-2 pb-2">
                      <canvas id="myPieChart2"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                      <span class="mr-1">
                        <i class="fas fa-circle text-primary"></i> Tingkat 2 (2019)
                      </span>
                      <span class="mr-1">
                        <i class="fas fa-circle text-success"></i>Tingkat 3 (2018)
                      </span>
                      <span class="mr-1">
                        <i class="fas fa-circle text-info"></i> Tingkat 4 (2017)
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Detail Per Region</h1>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                      Depok <span class="float-right">Total: <b><?= $depok ?></b></span>
                    </h6>
                  </div>
                  <div class="card-body">
                    <h4 class="font-weight-bold">Asisten</h4>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <td>Tingkat 2</td>
                          <td>Tingkat 3</td>
                          <td>Tingkat 4</td>
                          <td>Total</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?= $depok_a_2 ?></td>
                          <td><?= $depok_a_3 ?></td>
                          <td><?= $depok_a_4 ?></td>
                          <td><?= $depok_a_t ?></td>
                        </tr>
                      </tbody>
                    </table>
                    <br>
                    <h4 class="font-weight-bold">Programmer</h4>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <td>Tingkat 2</td>
                          <td>Tingkat 3</td>
                          <td>Tingkat 4</td>
                          <td>Total</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?= $depok_p_2 ?></td>
                          <td><?= $depok_p_3 ?></td>
                          <td><?= $depok_p_4 ?></td>
                          <td><?= $depok_p_t ?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                      Kalimalang <span class="float-right">Total: <b><?= $kalimalang ?></b></span>
                    </h6>
                  </div>
                  <div class="card-body">
                    <h4 class="font-weight-bold">Asisten</h4>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <td>Tingkat 2</td>
                          <td>Tingkat 3</td>
                          <td>Tingkat 4</td>
                          <td>Total</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?= $kalimalang_a_2 ?></td>
                          <td><?= $kalimalang_a_3 ?></td>
                          <td><?= $kalimalang_a_4 ?></td>
                          <td><?= $kalimalang_a_t ?></td>
                        </tr>
                      </tbody>
                    </table>
                    <br>
                    <h4 class="font-weight-bold">Programmer</h4>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <td>Tingkat 2</td>
                          <td>Tingkat 3</td>
                          <td>Tingkat 4</td>
                          <td>Total</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?= $kalimalang_p_2 ?></td>
                          <td><?= $kalimalang_p_3 ?></td>
                          <td><?= $kalimalang_p_4 ?></td>
                          <td><?= $kalimalang_p_t ?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                      Karawaci <span class="float-right">Total: <b><?= $karawaci ?></b></span>
                    </h6>
                  </div>
                  <div class="card-body">
                    <h4 class="font-weight-bold">Asisten</h4>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <td>Tingkat 2</td>
                          <td>Tingkat 3</td>
                          <td>Tingkat 4</td>
                          <td>Total</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?= $karawaci_a_2 ?></td>
                          <td><?= $karawaci_a_3 ?></td>
                          <td><?= $karawaci_a_4 ?></td>
                          <td><?= $karawaci_a_t ?></td>
                        </tr>
                      </tbody>
                    </table>
                    <br>
                    <h4 class="font-weight-bold">Programmer</h4>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <td>Tingkat 2</td>
                          <td>Tingkat 3</td>
                          <td>Tingkat 4</td>
                          <td>Total</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?= $karawaci_p_2 ?></td>
                          <td><?= $karawaci_p_3 ?></td>
                          <td><?= $karawaci_p_4 ?></td>
                          <td><?= $karawaci_p_t ?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                      Salemba <span class="float-right">Total: <b><?= $salemba ?></b></span>
                    </h6>
                  </div>
                  <div class="card-body">
                    <h4 class="font-weight-bold">Asisten</h4>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <td>Tingkat 2</td>
                          <td>Tingkat 3</td>
                          <td>Tingkat 4</td>
                          <td>Total</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?= $salemba_a_2 ?></td>
                          <td><?= $salemba_a_3 ?></td>
                          <td><?= $salemba_a_4 ?></td>
                          <td><?= $salemba_a_t ?></td>
                        </tr>
                      </tbody>
                    </table>
                    <br>
                    <h4 class="font-weight-bold">Programmer</h4>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <td>Tingkat 2</td>
                          <td>Tingkat 3</td>
                          <td>Tingkat 4</td>
                          <td>Total</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?= $salemba_p_2 ?></td>
                          <td><?= $salemba_p_3 ?></td>
                          <td><?= $salemba_p_4 ?></td>
                          <td><?= $salemba_p_t ?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                      Cengkareng <span class="float-right">Total: <b><?= $cengkareng ?></b></span>
                    </h6>
                  </div>
                  <div class="card-body">
                    <h4 class="font-weight-bold">Asisten</h4>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <td>Tingkat 2</td>
                          <td>Tingkat 3</td>
                          <td>Tingkat 4</td>
                          <td>Total</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?= $cengkareng_a_2 ?></td>
                          <td><?= $cengkareng_a_3 ?></td>
                          <td><?= $cengkareng_a_4 ?></td>
                          <td><?= $cengkareng_a_t ?></td>
                        </tr>
                      </tbody>
                    </table>
                    <br>
                    <h4 class="font-weight-bold">Programmer</h4>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <td>Tingkat 2</td>
                          <td>Tingkat 3</td>
                          <td>Tingkat 4</td>
                          <td>Total</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?= $cengkareng_p_2 ?></td>
                          <td><?= $cengkareng_p_3 ?></td>
                          <td><?= $cengkareng_p_4 ?></td>
                          <td><?= $cengkareng_p_t ?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
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
    
    