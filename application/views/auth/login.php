<p class="login-box-msg">Silahkan masukkan detail login Anda</p>
<?= form_open('login/validate', ['id' => 'form_login', 'class' => 'login-form']) ?>
<div class="form-group">
	<select name="level" class="form-control">
		<option value="">-- Pilih Level --</option>
		<?php
		foreach ($level as $key => $value) {
			echo '<option value="' . $key . '">' . $value . '</option>';
		} ?>
	</select>
	<span class="error level text-red"></span>
</div>
<div class="form-group has-feedback">
	<input type="text" name="username" class="form-control" placeholder="Username">
	<span class="glyphicon glyphicon-user form-control-feedback"></span>
	<span class="error username text-red"></span>
</div>
<div class="form-group has-feedback">
	<input type="password" name="password" class="form-control" placeholder="Password">
	<span class="glyphicon glyphicon-lock form-control-feedback"></span>
	<span class="error password text-red"></span>
</div>
<div class="row">
	<div class="col-xs-12">
		<button type="submit" class="btn btn-primary btn-flat pull-right btnLogin"><i class="fa fa-key"></i> Simpan</button>
	</div>
</div>
<?= form_close(); ?>
<script>
	$(document).ready(function() {
		$("#form_login").submit(function(e) {
			e.preventDefault();
			var formData = new FormData($("#form_login")[0]);
			$.ajax({
				url: $("#form_login").attr('action'),
				dataType: 'json',
				type: 'POST',
				data: formData,
				contentType: false,
				processData: false,
				beforeSend: function() {
					$('.btnLogin').attr('disabled', 'disabled');
					$('.btnLogin').html('<i class="fa fa-spin fa-spinner"></i> Sedang di Proses');
				},
				success: function(resp) {
					console.log(resp);
					$('.error').html('');
					if (resp.status == false) {
						$.each(resp.pesan, function(i, m) {
							$('.' + i).text(m);
						});
					} else {
						window.location.href = "<?= site_url('welcome') ?>";
					}
					$('#btnLogin').attr('disabled', false);
				},
				complete: function() {
					$('.btnLogin').removeAttr('disabled');
					$('.btnLogin').html('<i class="fa fa-key"></i> Simpan');
				}
			});
		});
	});
</script>
