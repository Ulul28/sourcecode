<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header with-border">
					<h3 class="box-title">Data halaman</h3><br><br>
					<a href="<?= site_url('master/halaman/create') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah
                    </a>					
			</div>
			<div class="box-body table-responsive">
				<?= $this->session->flashdata('pesan'); ?>
				<table class="table table-bordered table-hover data-tabel">
					<thead>
						<tr>
							<th class="text-center" width="30px">No</th>
							<th class="text-center" width="70px">Action</th>
							<th>judul.</th>
							<th>isi.</th>
							<th>link.</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($data as $d) { ?>
							<tr>
								<td class="text-center"><?= $no . '.' ?></td>
									<td class="text-center">
											<a href="<?= site_url('master/halaman/edit/' . encryp($d['id_hal'])) ?>"><i class="glyphicon glyphicon-edit text-success"></i></a>
											<a href="<?php echo site_url('master/halaman/destroy/' . $d['id_hal']) ?>" onclick="return confirm('Yakin akan hapus data ini ?');">
												<i class="icon-trash text-red"></i>
											</a>
										</td>
								<td><?= $d['judul'] ?></td>
								<td><?= $d['isi'] ?></td>
								<td><?= $d['link'] ?></td>
							</tr>
						<?php $no++;
						} ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>