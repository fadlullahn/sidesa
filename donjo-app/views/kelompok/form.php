<?php if (can('u')): ?>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>Master <?= ucfirst($this->controller) ?></h1>
			<ol class="breadcrumb">
				<li><a href="<?= site_url('beranda')?>"><i class="fa fa-home"></i> Beranda</a></li>
				<li><a href="<?= site_url($this->controller)?>"> Daftar <?= ucfirst($this->controller) ?></a></li>
				<li class="active">Master <?= ucfirst($this->controller) ?></li>
			</ol>
		</section>
		<section class="content">
			<div class="box box-info">
				<div class="box-header with-border">
					<a href="<?= site_url($this->controller)?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-arrow-circle-left "></i> Kembali Ke Daftar <?= ucfirst($this->controller) ?></a>
				</div>
				<form id="validasi" action="<?= $form_action?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
					<div class="box-body">
						<div class="form-group">
							<label  class="col-sm-3 control-label" for="nama">Nama <?= ucfirst($this->controller) ?></label>
							<div class="col-sm-7">
								<input  id="nama" class="form-control input-sm nama_terbatas required" type="text" placeholder="Nama <?= ucfirst($this->controller) ?>" name="nama" value="<?= $kelompok['nama']?>" maxlength="50">
							</div>
						</div>
						<div class="form-group ">
							<label  class="col-sm-3 control-label" for="kode">Kode <?= ucfirst($this->controller) ?></label>
							<div class="col-sm-7">
								<input  id="kode" class="form-control input-sm nomor_sk required" type="text" placeholder="Kode <?= ucfirst($this->controller) ?>" name="kode" value="<?= $kelompok['kode']?>" maxlength="16">
								<p><code>*Pastikan kode belum pernah dipakai di data lembaga / di data kelompok.</code></p>
							</div>
						</div>
						<div class="form-group">
							<label  class="col-sm-3 control-label" for="id_master">Kategori <?= ucfirst($this->controller) ?></label>
							<div class="col-sm-7">
								<select class="form-control input-sm select2 required" id="id_master" name="id_master">
									<option value="">-- Silakan Masukkan Kategori <?= ucfirst($this->controller) ?>--</option>
									<?php foreach ($list_master as $data): ?>
										<option value="<?= $data['id']; ?>" <?= selected($kelompok['id_master'], $data['id']); ?>><?= $data['kelompok']; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label  class="col-sm-3 control-label" for="id_ketua">Ketua <?= ucfirst($this->controller) ?></label>
							<div class="col-sm-7">
								<select class="form-control input-sm required" id="kelompok_penduduk" name="id_ketua">
									<option value="">-- Silakan Masukkan NIK / Nama--</option>
									<?php foreach ($list_penduduk as $data): ?>
										<option value="<?= $data['id']; ?>" <?= selected($data['id'], $kelompok['id_ketua']); ?>>NIK :<?= $data['nik'] . ' - ' . $data['nama'] . ' - ' . $data['alamat']; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label  class="col-sm-3 control-label" for="keterangan">Deskripsi <?= ucfirst($this->controller) ?></label>
							<div class="col-sm-7">
								<textarea name="keterangan" class="form-control input-sm" placeholder="Deskripsi <?= ucfirst($this->controller) ?>"  rows="3" maxlength="300"><?= $kelompok['keterangan']?></textarea>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<button type="reset" class="btn btn-social btn-flat btn-danger btn-sm"><i class="fa fa-times"></i> Batal</button>
						<button type="submit" class="btn btn-social btn-flat btn-info btn-sm pull-right"><i class="fa fa-check"></i> Simpan</button>
					</div>
				</form>
			</div>
		</section>
	</div>
<?php endif; ?>