<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{page} | <?= title() ?></title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<?php $this->load->view('layout/assets') ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		?>
		<div class="content-wrapper">
			<section class="content-header">
				<h1>
					{page}
					<small>{info}</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="<?= site_url() ?>"><i class="fa fa-dashboard"></i> Home</a></li>
					{urls}
				</ol>
			</section>
			<section class="content">
				<?php
				if (isset($file) && $file)
					$this->load->view($file);
				?>
			</section>
		</div>
		<?php $this->load->view('layout/footer') ?>
	</div>
</body>

</html>
