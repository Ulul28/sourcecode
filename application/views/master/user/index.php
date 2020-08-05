<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header with-border">
				<button type="button" class="btn btn-primary" onclick="tambah()"><i class="icon-plus2"></i> Tambah</button>
			</div>
			<div class="box-body table-responsive">
				<?= $this->session->flashdata('pesan'); ?>
				<table class="table table-bordered table-hover data-tabel">
					<thead>
						<tr>
							<th class="text-center" width="30px">No</th>
							<th class="text-center" width="70px">Action</th>
							<th>Nama</th>
							<th>Username</th>
							<th width="150px">Level</th>
							<th width="80px" class="text-center">Status</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($data as $d) { ?>
							<tr>
								<td class="text-center"><?= $no . '.' ?></td>
								<td class="text-center">
									<a href="javascript:void(0)" onclick="edit('<?= $d['id_user'] ?>')">
										<i class="icon-pencil7 text-green"></i>
									</a>
									<a href="<?php echo site_url('master/users/destroy/' . $d['id_user']) ?>" onclick="return confirm('Yakin akan hapus data ini ?');">
										<i class="icon-trash text-red"></i>
									</a>
								</td>
								<td><?= $d['nama_user'] ?></td>
								<td><?= $d['username'] ?></td>
								<td>
									<?php
									foreach ($level as $key => $value) {
										if ($key == $d['level_user'])
											echo $value;
									} ?>
								</td>
								<td class="text-center">
									<?php if ($d['status_user'] == '1') { ?>
										<a href="<?php echo site_url('master/users/status/' . $d['id_user']) ?>" class="btn btn-primary btn-xs">Aktif</a>
									<?php } else { ?>
										<a href="<?php echo site_url('master/users/status/' . $d['id_user']) ?>" class="btn btn-danger btn-xs">Tidak Aktif</a>
									<?php } ?>
								</td>
							</tr>
						<?php $no++;
						} ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div id="tampil_modal"></div>
<script>
	function tambah() {
		$.ajax({
			url: "<?= site_url('master/users/create') ?>",
			type: "post",
			success: function(ajaxData) {
				$("#tampil_modal").html(ajaxData);
				$("#modal_tambah").modal('show');
			}
		});
	}

	function edit(kode) {
		datanya = "&kode=" + kode;
		$.ajax({
			url: "<?= site_url('master/users/edit') ?>",
			type: "post",
			data: datanya,
			success: function(ajaxData) {
				$("#tampil_modal").html(ajaxData);
				$("#modal_edit").modal('show');
			}
		});
	}
</script>
