          <div class="container">
            
            <div class="row mb-4">
              <!-- TAHAP 1 -->
              <div class="col-md-3 mb-3">
                <?php if ($calonAsisten['tahap_1'] == 1): ?>
                  <div class="card green shadow-sm">
                    <div class="card-body text-center white-text">
                      <h4 class="font-weight-bold text-uppercase mb-0">Tahap 1</h4>
                      <small>Seleksi Berkas</small>
                      <p><i class="fas fa-check-circle fa-4x mt-3 mb-0"></i></p>
                      <b>LULUS</b>
                    </div>
                  </div>
                <?php elseif ($calonAsisten['tahap_1'] == 2): ?>
                  <div class="card red shadow-sm">
                    <div class="card-body text-center white-text">
                      <h4 class="font-weight-bold text-uppercase mb-0">Tahap 1</h4>
                      <small>Seleksi Berkas</small>
                      <p><i class="fas fa-times-circle fa-4x mt-3 mb-0"></i></p>
                      <b>TIDAK LULUS</b>
                    </div>
                  </div>
                <?php else: ?>
                  <div class="card grey shadow-sm">
                    <div class="card-body text-center white-text">
                      <h4 class="font-weight-bold text-uppercase mb-0">Tahap 1</h4>
                      <small>Seleksi Berkas</small>
                      <p><i class="fas fa-clock fa-4x mt-3 mb-0"></i></p>
                      <b>Sedang Proses...</b>
                    </div>
                  </div>
                <?php endif ?>
              </div>

              <!-- TAHAP 2 -->
              <div class="col-md-3 mb-3">
                <?php if ($calonAsisten['tahap_2'] == 1): ?>
                  <div class="card green shadow-sm">
                    <div class="card-body text-center white-text">
                      <h4 class="font-weight-bold text-uppercase mb-0">Tahap 2</h4>
                      <small>Tes Tulis</small>
                      <p><i class="fas fa-check-circle fa-4x mt-3 mb-0"></i></p>
                      <b>LULUS</b>
                    </div>
                  </div>
                <?php elseif ($calonAsisten['tahap_2'] == 2): ?>
                  <div class="card red shadow-sm">
                    <div class="card-body text-center white-text">
                      <h4 class="font-weight-bold text-uppercase mb-0">Tahap 2</h4>
                      <small>Tes Tulis</small>
                      <p><i class="fas fa-times-circle fa-4x mt-3 mb-0"></i></p>
                      <b>TIDAK LULUS</b>
                    </div>
                  </div>
                <?php else: ?>
                  <div class="card grey shadow-sm">
                    <div class="card-body text-center white-text">
                      <h4 class="font-weight-bold text-uppercase mb-0">Tahap 2</h4>
                      <small>Tes Tulis</small>
                      <p><i class="fas fa-clock fa-4x mt-3 mb-0"></i></p>
                      <b>Sedang Proses...</b>
                    </div>
                  </div>
                <?php endif ?>
              </div>

              <!-- TAHAP 3 -->
              <div class="col-md-3 mb-3">
                <?php if ($calonAsisten['tahap_3'] == 1): ?>
                  <div class="card green shadow-sm">
                    <div class="card-body text-center white-text">
                      <h4 class="font-weight-bold text-uppercase mb-0">Tahap 3</h4>
                      <small>Tutor, Wawancara, Pemrograman</small>
                      <p><i class="fas fa-check-circle fa-4x mt-3 mb-0"></i></p>
                      <b>LULUS</b>
                    </div>
                  </div>
                <?php elseif ($calonAsisten['tahap_3'] == 2): ?>
                  <div class="card red shadow-sm">
                    <div class="card-body text-center white-text">
                      <h4 class="font-weight-bold text-uppercase mb-0">Tahap 3</h4>
                      <small>Tutor, Wawancara, Pemrograman</small>
                      <p><i class="fas fa-times-circle fa-4x mt-3 mb-0"></i></p>
                      <b>TIDAK LULUS</b>
                    </div>
                  </div>
                <?php else: ?>
                  <div class="card grey shadow-sm">
                    <div class="card-body text-center white-text">
                      <h4 class="font-weight-bold text-uppercase mb-0">Tahap 3</h4>
                      <small>Tutor, Wawancara, Pemrograman</small>
                      <p><i class="fas fa-clock fa-4x mt-3 mb-0"></i></p>
                      <b>Sedang Proses...</b>
                    </div>
                  </div>
                <?php endif ?>
                </div>

                <!-- TAHAP 4 -->
                <div class="col-md-3 mb-3">
                <?php if ($calonAsisten['tahap_4'] == 1): ?>
                  <div class="card green shadow-sm">
                    <div class="card-body text-center white-text">
                      <h4 class="font-weight-bold text-uppercase mb-0">Tahap 4</h4>
                      <small>Wawancara Staff</small>
                      <p><i class="fas fa-check-circle fa-4x mt-3 mb-0"></i></p>
                      <b>LULUS</b>
                    </div>
                  </div>
                <?php elseif ($calonAsisten['tahap_4'] == 2): ?>
                  <div class="card red shadow-sm">
                    <div class="card-body text-center white-text">
                      <h4 class="font-weight-bold text-uppercase mb-0">Tahap 4</h4>
                      <small>Wawancara Staff</small>
                      <p><i class="fas fa-times-circle fa-4x mt-3 mb-0"></i></p>
                      <b>TIDAK LULUS</b>
                    </div>
                  </div>
                <?php else: ?>
                  <div class="card grey shadow-sm">
                    <div class="card-body text-center white-text">
                      <h4 class="font-weight-bold text-uppercase mb-0">Tahap 4</h4>
                      <small>Wawancara Staff</small>
                      <p><i class="fas fa-clock fa-4x mt-3 mb-0"></i></p>
                      <b>Sedang Proses...</b>
                    </div>
                  </div>
                <?php endif ?>
              </div>

            </div>         

            <div class="card shadow-sm mb-3">
              <div class="card-header py-3 amber">
                <h6 class="m-0 font-weight-bold white-text">
                  <i class="fas fa-bullhorn mr-2"></i>Panel Informasi
                </h6>
              </div>  
              <div class="card-body">

                <p id="info-1">
                  <b>Informasi Seleksi Calon Asisten dan Programmer Tahap 2</b>
                  <br>
                  <small><b>13 Januari 2021</b></small>
                  <br>
                  <p>Bagi seluruh calon asisten dan programmer yang sudah lulus dari seleksi <b>Tahap 1</b>, dapat mengikuti tahap selanjutnya yaitu <b>Tes Tulis</b> yang akan diadakan secara <i>online</i> melalui <a href="http://tes-tulis.oprecmanlan2020.online" target="_blank">http://tes-tulis.oprecmanlan2020.online</a>. Tahap Tes Tulis akan diadakan pada:</p>
                  <p>
                    <table>
                      <tr>
                        <td>Hari/Tanggal</td>
                        <td>:</td>
                        <td><b>Jumat, 15 Januari 2021</b></td>
                      </tr>
                      <tr>
                        <td>Pukul</td>
                        <td>:</td>
                        <td><b>09.00 - 15.00</b></td>
                      </tr>
                    </table>
                  </p>
                  <p>Website Tes Tulis dapat di akses mulai tanggal <b>14 Januari 2021.</b></p>
                  <p>
                    Untuk melihat ketentuan pengerjaan Tes Tulis silahkan buka website yang tertera di atas, masuk menggunakan NPM dan Password yang sama dengan akun ini.
                  </p>
                  <p>
                    Jika ada kendala atau pertanyaan silahkan hubungi CP sesuai region masing-masing
                    <ul class="list-unstyled">
                      <li><i class="fab fa-whatsapp mr-2"></i>Nabilla - 0821 1282 9057 (Depok, Cengkareng, Salemba, Karawaci)</li>
                      <li><i class="fab fa-whatsapp mr-2"></i>Nadila - 0821 1282 9057 (Kalimalang)</li>
                    </ul>
                  </p>
                </p>
                

              </div>
            </div>

          </div>