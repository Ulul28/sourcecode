<div class="modal fade" id="modal_edit">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title"><?= $title ?></h4>
			</div>
			<?= form_open('master/users/update', ['id' => 'form_edit'], ['kode' => $data['id_user']]) ?>
			<div class="modal-body">
				<div class="form-group">
					<label><span class="required">*</span>Nama</label>
					<input type="text" name="nama" class="form-control" placeholder="Nama" required value="<?= $data['nama_user'] ?>">
				</div>
				<div class="form-group">
					<label><span class="required">*</span>Username</label>
					<input type="text" name="user" class="form-control" placeholder="Username" required value="<?= $data['username'] ?>">
				</div>
				<div class="form-group">
					<label><span class="required">*</span>Password</label>
					<input type="password" name="pass" class="form-control" placeholder="Password">
					<span class="help-block"><i>Kosongkan jika tidak rubah password</i></span>
				</div>
				<div class="form-group">
					<label><span class="required">*</span>Level</label>
					<select class="form-control" name="level">
						<option value="">Pilih Level</option>
						<?php
						foreach ($level as $key => $value) {
							if ($key == $data['level_user']) {
								echo '<option value="' . $key . '" selected>' . $value . '</option>';
							} else {
								echo '<option value="' . $key . '">' . $value . '</option>';
							}
						} ?>
					</select>
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
