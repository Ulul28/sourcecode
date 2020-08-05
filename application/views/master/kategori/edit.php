<div class="modal fade" id="modal_edit">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title"><?= $title ?></h4>
			</div>
			<?= form_open('master/kategori/update', ['id' => 'form_edit'], ['kode' => $data['id_kategori']]) ?>
			<div class="modal-body">
				<div class="form-group">
					<label><span class="required">*</span>title-kategori.</label>
					<input type="text" name="title" class="form-control" placeholder="title-kategori." required value="<?= $data['title_kategori'] ?>">
				</div>
				<div class="form-group">
					<label><span class="required">*</span>slug-kategori.</label>
					<input type="text" name="slug" class="form-control" placeholder="slug-kategori." required value="<?= $data['slug_kategori'] ?>">
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
