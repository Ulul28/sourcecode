<link rel="stylesheet" href="<?= theme() ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= theme() ?>bower_components/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?= theme() ?>bower_components/Ionicons/css/ionicons.min.css">
<link rel="stylesheet" href="<?= theme() ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="<?= theme() ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="<?= theme() ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="<?= theme() ?>dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="<?= theme() ?>plugins/iCheck/all.css">
<link rel="stylesheet" href="<?= theme() ?>dist/css/skins/_all-skins.min.css">
<link rel="stylesheet" href="<?= theme() ?>plugins/icomoon/styles.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<script src="<?= theme() ?>bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?= theme() ?>bower_components/jquery-ui/jquery-ui.min.js"></script>
<script>
	$.widget.bridge('uibutton', $.ui.button);
</script>
<script src="<?= theme() ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?= theme() ?>plugins/iCheck/icheck.min.js"></script>
<script src="<?= theme() ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= theme() ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?= theme() ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?= theme() ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?= theme() ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?= theme() ?>bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?= theme() ?>dist/js/adminlte.min.js"></script>
<script src="<?= theme() ?>dist/js/pages/dashboard.js"></script>

<script src="<?= theme() ?>dist/js/demo.js"></script>
<script>
	$(function() {
		$('.data-tabel').DataTable({
			'ordering': false,
		});
	})
</script>
    <link rel="shortcut icon" href="<?= theme() ?>/img/pupr.ico" />
    <script src="<?= theme() ?>global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?= theme() ?>global/plugins/select2/select2.min.js"></script>
    <script type="text/javascript" src="<?= theme() ?>global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?= theme() ?>global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
    <script>
        jQuery(document).ready(function() {
            Metronic.init(); 
            Layout.init(); 
            QuickSidebar.init(); 
            Demo.init(); 
            TableManaged.init();
        });
    </script>
    <script src="<?= theme() ?>ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
        $(function () {
                CKEDITOR.replace('ckeditor',{
                    filebrowserImageBrowseUrl : '<?php echo base_url('assets/kcfinder/browse.php');?>',
                    height: '400px'             
                });
            });
    </script>