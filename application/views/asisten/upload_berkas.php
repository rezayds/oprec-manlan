<div class="container">
	<?= $this->session->flashdata('message') ?>
	<div class="row">
		<div class="col-md-6">
			<?php echo form_open_multipart('dashboard/upload-berkas'); ?>
				<?php if ($calonAsisten['foto'] == null): ?>
				<div class="card shadow-sm">
					<div class="card-header py-3 amber">
						<h6 class="m-0 font-weight-bold white-text">
						<i class="fas fa-exclamation-circle mr-2"></i> Upload Foto
						</h6>
					</div>
					<div class="card-body">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="file" name="foto" accept="image/x-png,image/jpeg" onchange="this.nextElementSibling.innerText = this.files[0].name">
							<label class="custom-file-label text-truncate" for="file">Pilih File</label>
						</div>
						<small class="form-text text-muted">Format JPG|JPEG|PNG. Maks ukuran 2MB</small>
						<?= form_error('foto', '<small class="text-danger pl-2">', '</small>');?>
						<input type="submit" name="upload-foto" class="btn btn-sm amber white-text mt-2" value="Upload Foto">
					</div>
				</div>
				<?php else: ?>
				<div class="card shadow-sm green">
					<div class="card-body">
						<i class="fas fa-check-circle white-text mr-2"></i>
						<b class="white-text">Foto sudah di upload!</b>
					</div>
				</div>
				<?php endif ?>
			</form>				
		</div>
		<div class="col-md-6">
			<?php echo form_open_multipart('dashboard/upload-berkas'); ?>	
				<?php if ($calonAsisten['cv'] == null): ?>
				<div class="card shadow-sm">
					<div class="card-header py-3 amber">
						<h6 class="m-0 font-weight-bold white-text">
							<i class="fas fa-exclamation-circle mr-2"></i> Upload CV
						</h6>
					</div>
					<div class="card-body">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="file" name="cv" accept="application/pdf" onchange="this.nextElementSibling.innerText = this.files[0].name">
							<label class="custom-file-label" for="file">Pilih File</label>
						</div>
						<small class="form-text text-muted">Format PDF. Maks 2MB</small>
						<input type="submit" name="upload-cv" class="btn btn-sm amber white-text mt-2" value="Upload CV">
					</div>
				</div>
				<?php else: ?>
				<div class="card shadow-sm green">
					<div class="card-body">
						<i class="fas fa-check-circle white-text mr-2"></i>
						<b class="white-text">CV sudah di upload!</b>
					</div>
				</div>
				<?php endif ?>
			</form>
		</div>
	</div>

	<div class="row mt-2">
		<div class="col-md-6">
			<?php echo form_open_multipart('dashboard/upload-berkas'); ?>
				<?php if ($calonAsisten['lamaran'] == null): ?>
				<div class="card shadow-sm">
					<div class="card-header py-3 amber">
						<h6 class="m-0 font-weight-bold white-text">
						<i class="fas fa-exclamation-circle mr-2"></i> Upload Surat Lamaran
						</h6>
					</div>
					<div class="card-body">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="file" name="lamaran" accept="application/pdf" onchange="this.nextElementSibling.innerText = this.files[0].name">
							<label class="custom-file-label" for="file">Pilih File</label>
						</div>
						<small class="form-text text-muted">Format PDF. Maks 2MB</small>
						<input type="submit" name="upload-lamaran" class="btn btn-sm amber white-text mt-2" value="Upload Surat Lamaran">
					</div>
				</div>
				<?php else: ?>
				<div class="card shadow-sm green">
					<div class="card-body">
						<i class="fas fa-check-circle white-text mr-2"></i>
						<b class="white-text">Surat Lamaran sudah di upload!</b>
					</div>
				</div>
				<?php endif ?>
			</form>				
		</div>
		<div class="col-md-6">
			<?php echo form_open_multipart('dashboard/upload-berkas'); ?>
				<?php if ($calonAsisten['transkrip'] == null): ?>
				<div class="card shadow-sm">
					<div class="card-header py-3 amber">
						<h6 class="m-0 font-weight-bold white-text">
						<i class="fas fa-exclamation-circle mr-2"></i> Upload Transkrip Nilai
						</h6>
					</div>
					<div class="card-body">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="file" name="transkrip" accept="application/pdf" onchange="this.nextElementSibling.innerText = this.files[0].name">
							<label class="custom-file-label" for="file">Pilih File</label>
						</div>
						<small class="form-text text-muted">Format PDF. Maks 2MB</small>
						<input type="submit" name="upload-transkrip" class="btn btn-sm amber white-text mt-2" value="Upload Transkrip Nilai">
					</div>
				</div>
				<?php else: ?>
				<div class="card shadow-sm green">
					<div class="card-body">
						<i class="fas fa-check-circle white-text mr-2"></i>
						<b class="white-text">Transkrip Nilai sudah di upload!</b>
					</div>
				</div>
				<?php endif ?>
			</form>				
		</div>
	</div>

	<div class="row mt-2">
		<div class="col-md-6">
			<?php echo form_open_multipart('dashboard/upload-berkas'); ?>
				<?php if ($calonAsisten['krs'] == null): ?>
				<div class="card shadow-sm">
					<div class="card-header py-3 amber">
						<h6 class="m-0 font-weight-bold white-text">
						<i class="fas fa-exclamation-circle mr-2"></i> Upload KRS Aktif
						</h6>
					</div>
					<div class="card-body">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="file" name="krs" accept="application/pdf" onchange="this.nextElementSibling.innerText = this.files[0].name">
							<label class="custom-file-label" for="file">Pilih File</label>
						</div>
						<small class="form-text text-muted">Format PDF. Maks 2MB</small>
						<input type="submit" name="upload-krs" class="btn btn-sm amber white-text mt-2" value="Upload KRS">
					</div>
				</div>
				<?php else: ?>
				<div class="card shadow-sm green">
					<div class="card-body">
						<i class="fas fa-check-circle white-text mr-2"></i>
						<b class="white-text">KRS sudah di upload!</b>
					</div>
				</div>
				<?php endif ?>
			</form>				
		</div>
		<div class="col-md-6">
			<?php echo form_open_multipart('dashboard/upload-berkas'); ?>
				<?php if ($calonAsisten['ktm'] == null): ?>
				<div class="card shadow-sm">
					<div class="card-header py-3 amber">
						<h6 class="m-0 font-weight-bold white-text">
						<i class="fas fa-exclamation-circle mr-2"></i> Upload KTM
						</h6>
					</div>
					<div class="card-body">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="file" name="ktm" accept="application/pdf,image/x-png,image/jpeg" onchange="this.nextElementSibling.innerText = this.files[0].name">
							<label class="custom-file-label" for="file">Pilih File</label>
						</div>
						<small class="form-text text-muted">Format PDF. Maks 2MB</small>
						<input type="submit" name="upload-ktm" class="btn btn-sm amber white-text mt-2" value="Upload KTM">
					</div>
				</div>
				<?php else: ?>
				<div class="card shadow-sm green">
					<div class="card-body">
						<i class="fas fa-check-circle white-text mr-2"></i>
						<b class="white-text">KTM sudah di upload!</b>
					</div>
				</div>
				<?php endif ?>
			</form>			
		</div>
	</div>

	<div class="row justify-content-center mt-2">
		<div class="col-md-6">
			<?php echo form_open_multipart('dashboard/upload-berkas'); ?>		
				<?php if ($calonAsisten['sertifikat'] == null): ?>
				<div class="card shadow-sm">
					<div class="card-header py-3 amber">
						<h6 class="m-0 font-weight-bold white-text">
						<i class="fas fa-exclamation-circle mr-2"></i> Upload Sertifikat (Jika ada)
						</h6>
					</div>
					<div class="card-body">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="file" name="sertifikat" accept="application/pdf" onchange="this.nextElementSibling.innerText = this.files[0].name">
							<label class="custom-file-label" for="file">Pilih File</label>
						</div>
						<small class="form-text text-muted">Format PDF. Maks 2MB. Jika sertifikat lebih dari 1 maka gabungkan dengan <a href="https://www.ilovepdf.com/merge_pdf" target="_blank">Merge PDF</a></small>
						<input type="submit" name="upload-sertifikat" class="btn btn-sm amber white-text mt-2" value="Upload Sertifikat">
					</div>
				</div>
				<?php else: ?>
				<div class="card shadow-sm green">
					<div class="card-body">
						<i class="fas fa-check-circle white-text mr-2"></i>
						<b class="white-text">Sertifikat sudah di upload!</b>
					</div>
				</div>
				<?php endif ?>
			</form>				
		</div>
	</div>
</div>