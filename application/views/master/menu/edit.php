<div class="modal fade" id="modal_edit">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title"><?= $title ?></h4>
			</div>
			<?= form_open('master/menu/update', ['id' => 'form_edit'], ['kode' => $data['id']]) ?>
			<div class="modal-body">
				<div class="form-group">
					<label><span class="required">*</span>judul-menu.</label>
					<input type="text" name="judul" class="form-control" placeholder="judul-menu." required value="<?= $data['judul_menu'] ?>">
				</div>
				<div class="form-group">
					<label><span class="required">*</span>link-menu.</label>
					<input type="text" name="link" class="form-control" placeholder="link-menu." required value="<?= $data['link'] ?>">
				</div>
				<div class="form-group">
					<label><span class="required">*</span>main-menu.</label>
					<input type="text" name="is_main_menu" class="form-control" placeholder="link-menu." required value="<?= $data['is_main_menu'] ?>">
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
