<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header py-3 amber">
          <h6 class="m-0 font-weight-bold white-text">Lengkapi Data Diri</h6>
        </div>
        <div class="card-body">
        <?php if ($calonAsisten['tanggal_lahir'] != null
        || $calonAsisten['tempat_lahir'] != null
        || $calonAsisten['alamat'] != null): ?>

        <div class="text-center">
          <h5 >Data Diri Sudah Lengkap</h5>
          <a href="<?= base_url('dashboard') ?>" class="btn btn-sm amber white-text " >Kembali ke Dashboard</a>
        </div>
        

        <?php else: ?>
        <form method="post" action="<?= base_url('dashboard/complete-register');?>" >
          <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" class="form-control disabled">
            <small class="form-text text-muted">Tekan icon calendar untuk memilih tanggal</small>
            <?= form_error('tanggal_lahir', '<small class="text-danger pl-2">', '</small>');?>
          </div>
          <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" class="form-control">
            <?= form_error('tempat_lahir', '<small class="text-danger pl-2">', '</small>');?>
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" class="form-control" rows="3" placeholder="Alamat Lengkap"></textarea>
            <small class="form-text text-muted">Masukan alamat lengkap meliputi nama jalan, RT, RW</small>
            <?= form_error('alamat', '<small class="text-danger pl-2">', '</small>');?>
          </div>
          <div class="form-group text-center">
            <input type="submit" name="submit" class="btn btn-transparent amber white-text">
          </div>
        </form>
        <?php endif ?>
            
        </div>
      </div>
    </div>
  </div>
</div>