    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Halaman Login</h1>
                    </div>
                    <?= $this->session->flashdata('message') ?>
                    <form class="user" method="post" action="<?= base_url('asisten/login')?>">
                      <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="text" class="form-control form-control-user" id="npm" name="npm" placeholder="Nomor Pokok Mahasiswa (NPM)">
                        <?= form_error('npm', '<small class="text-danger pl-2">', '</small>');?>
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                        <?= form_error('password', '<small class="text-danger pl-2">', '</small>');?>
                      </div>
                      <button type="submit" class="btn btn-primary btn-user btn-block">
                        MASUK
                      </button>
                    </form>
                    <hr>
                    <div class="text-center">
                      <a href="<?= base_url('/') ?>" class=small>Kembali ke Home</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>