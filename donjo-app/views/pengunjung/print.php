<table>
	<tbody>
		<tr>
			<td>
				<?php if ($aksi != 'unduh'): ?>
					<img class="logo" src="<?= gambar_desa($config['logo']); ?>" alt="logo-desa">
				<?php endif; ?>
				<h1 class="judul">
					PEMERINTAH <?= strtoupper($this->setting->sebutan_kabupaten . ' ' . $config['nama_kabupaten'] . ' <br>' . $this->setting->sebutan_kecamatan . ' ' . $config['nama_kecamatan'] . ' <br>' . $this->setting->sebutan_desa . ' ' . $config['nama_desa']); ?>
				</h1>
			</td>
		</tr>
		<tr>
			<td><hr class="garis"></td>
		</tr>
		<tr>
			<td class="text-center">
				<h2>LAPORAN DATA STATISTIK PENGUNJUNG WEBSITE <?= strtoupper($main['judul']); ?></h2>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>
				<table class="border thick">
					<thead>
						<tr class="thick">
							<th class="thick">No</th>
							<th class="thick"><?= $main['lblx']?></th>
							<th class="thick">Pengunjung (Orang)</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;

				foreach ($main['pengunjung'] as $data):?>
						<tr>
							<td class="thick" align="center" width="2"><?= $no++; ?></td>
							<td class="thick" align="center">
								<?= ($main['lblx'] == 'Bulan') ? getBulan($data['Tanggal']) . ' ' . date('Y') : tgl_indo2($data['Tanggal']); ?></td>
							<td class="thick" align="center"><?= ribuan($data['Jumlah']); ?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
					<tfoot class="bg-gray disabled color-palette">
						<tr class="thick">
							<th colspan="2" class="text-center">Total</th>
							<th class="text-center"><?= ribuan($main['Total']); ?></th>
						</tr>
					</tfoot>
				</table>
			</td>
		</tr>
	</tbody>
</table>