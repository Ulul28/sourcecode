<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header with-border">
					<h3 class="box-title">Data Menu</h3><br><br>
					<button type="button" class="btn btn-primary" onclick="tambah()"><i class="icon-plus2"></i> Tambah</button>					
			</div>
			<div class="box-body table-responsive">
				<?= $this->session->flashdata('pesan'); ?>
				<table class="table table-bordered table-hover data-tabel">
					<thead>
						<tr>
							<th class="text-center" width="30px">No</th>
							<th class="text-center" width="70px">Action</th>
							<th>judul.</th>
							<th>link.</th>
							<th>main-menu.</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($data as $d) { ?>
							<tr>
								<td class="text-center"><?= $no . '.' ?></td>
									<td class="text-center">
											<a href="javascript:void(0)" onclick="edit('<?= $d['id'] ?>')">
												<i class="icon-pencil7 text-green"></i>
											</a>
											<a href="<?php echo site_url('master/menu/destroy/' . $d['id']) ?>" onclick="return confirm('Yakin akan hapus data ini ?');">
												<i class="icon-trash text-red"></i>
											</a>
								<td><?= $d['judul_menu'] ?></td>
								<td><?= $d['link'] ?></td>
								<td><?= $d['is_main_menu'] ?></td>
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
			url: "<?= site_url('master/menu/create') ?>",
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
			url: "<?= site_url('master/menu/edit') ?>",
			type: "post",
			data: datanya,
			success: function(ajaxData) {
				$("#tampil_modal").html(ajaxData);
				$("#modal_edit").modal('show');
			}
		});
	}
</script>