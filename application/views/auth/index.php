<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login | <?= title() ?></title>

	<link rel="shortcut icon" href="<?= theme() ?>dist/img/favicon.ico" type="image/x-icon">
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?= theme() ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= theme() ?>bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?= theme() ?>bower_components/Ionicons/css/ionicons.min.css">
	<!-- datepicker -->
	<link rel="stylesheet" href="<?= theme() ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="<?= theme() ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= theme() ?>dist/css/AdminLTE.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?= theme() ?>plugins/iCheck/all.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

	<!-- Google Font -->
	<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->

	<script src="<?= theme() ?>bower_components/jquery-ui/jquery-ui.min.js"></script>
	<!-- jQuery 3 -->
	<script src="<?= theme() ?>bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?= theme() ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- iCheck -->
	<script src="<?= theme() ?>plugins/iCheck/icheck.min.js"></script>
	<!-- Date Picker -->
	<!-- datepicker -->
	<script src="<?= theme() ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<script src="<?= theme() ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var bootstrapTooltip = $.fn.tooltip.noConflict();
			$.fn.bstooltip = bootstrapTooltip;
			$('#button').bstooltip();
		})
	</script>
</head>

<body class="hold-transition login-page">
	<div class="login-box" style="margin-top: 0px">
		<br><br>
		<div class="login-logo">
			<img src="<?= theme() ?>img/pupr.png" class="" width="100px" height="100px"><br>
			<!-- <div class="row">
				<img src="<?= theme()?>img/pupr.png" class="img img-circle">
			</div> -->
		</div>
		<div class="login-box-body rounded">
			<?php
			if (isset($file) && $file)
				$this->load->view($file);
			?>
		</div>
	</div>
</body>

</html>
