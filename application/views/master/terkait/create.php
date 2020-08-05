
<div class="modal fade" id="modal_tambah">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title"><?= $title ?></h4>
			</div>
			<?= form_open('master/slider/store', ['enctype' => 'multipart/form-data']) ?>
			<div class="modal-body">
				<div class="form-group">
					<label><span class="required">*</span>nama-instansi.</label>
					<input type="text" name="xjudul" class="form-control" placeholder="judul-slider." required>
				</div>
				<div class="form-group">
					<label><span class="required">*</span>logo-instansi.</label>
					<input type="file" name="filefoto" class="form-control" placeholder="file." required>
				</div>
				<div class="form-group">
					<label><span class="required">*</span>link-instansi.</label>
					<input type="text" name="xlink" class="form-control" placeholder="judul-slider." required>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary"><i class="icon-floppy-disk"></i> Simpan</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cross2"></i> Close</button>
			</div>
			<?= form_close() ?>
		</div>
	</div>
</div>
