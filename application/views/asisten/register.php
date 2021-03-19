    <div class="container">
      <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Form Pendaftaran</h1>
                </div>
                <?= $this->session->flashdata('message') ?>
                <form class="user" method="post" action="<?= base_url('asisten/register');?>">
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <label for="npm">NPM</label>
                      <input type="text" class="form-control form-control-user" id="npm" name="npm" placeholder="Nomor Pokok Mahasiswa (NPM)" value="<?= set_value('npm')?>">
                      <?= form_error('npm', '<small class="text-danger pl-2">', '</small>');?>
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <label for="nama">Nama Lengkap</label>
                      <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama')?>">
                      <?= form_error('nama', '<small class="text-danger pl-2">', '</small>');?>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <label for="no_telp">No. Whatsapp</label>
                      <input type="text" class="form-control form-control-user" id="no_telp" name="no_telp" placeholder="No Whatsapp" value="<?= set_value('no_telp')?>">
                      <?= form_error('no_telp', '<small class="text-danger pl-2">', '</small>');?>
                    </div>
                    <div class="col-sm-6">
                      <label for="kelas">Kelas</label>
                      <input type="text" class="form-control form-control-user" id="kelas" name="kelas" placeholder="Kelas" value="<?= set_value('kelas')?>">
                      <?= form_error('kelas', '<small class="text-danger pl-2">', '</small>');?>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <label for="domisili">Domisili Kampus</label>
                      <select id="domisili" name="domisili" class="form-control">
                        <option value="<?= set_value('domisili')?>" selected>Pilih domisili...</option>
                        <option value="Depok">Depok</option>
                        <option value="Kalimalang">Kalimalang</option>
                        <option value="Karawaci">Karawaci</option>
                        <option value="Salemba">Salemba</option>
                        <option value="Cengkareng">Cengkareng</option>
                      </select>
                      <?= form_error('domisili', '<small class="text-danger pl-2">', '</small>');?>
                    </div>
                    <div class="col-sm-6">
                      <label for="posisi">Posisi</label>
                      <select id="posisi" name="posisi" class="form-control">
                        <option value="<?= set_value('posisi')?>" selected>Pilih posisi...</option>
                        <option value="Asisten">Asisten</option>
                        <option value="Programmer">Programmer</option>
                      </select>
                      <?= form_error('posisi', '<small class="text-danger pl-2">', '</small>');?>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" value="<?= set_value('password')?>">
                      <?= form_error('password', '<small class="text-danger pl-2">', '</small>');?>
                    </div>
                    <div class="col-sm-6">
                      <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                      <?= form_error('password2', '<small class="text-danger pl-2">', '</small>');?>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">
                    DAFTAR
                  </button>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="<?= base_url('login'); ?>">Sudah Pernah Daftar? Login di Sini!</a>
                  <br>
                  <a href="<?= base_url('/') ?>" class=small>Kembali ke Home</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>