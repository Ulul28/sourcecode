<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>PUPR Kabupaten Padang Pariaman</title>
  <link rel="shortcut icon" type="image/x-icon" href="<?= frontend()?>img/pupr.ico" />
  <!-- <link rel="stylesheet" href="<?= frontend()?>plugins/fontawesome-free/css/all.min.css"> -->
  <link rel="stylesheet" href="<?= frontend()?>dist/css/adminlte.min.css">
  <link rel="stylesheet" type="text/css" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= frontend()?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= frontend()?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,423;0,500;1,100;1,200;1,300;1,400;1,423;1,500&display=swap" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
    <?php $this->load->view('frontend/layout/header');?>
    <div class="content-wrapper">
    <?php if (isset($content) && $content) {
        $this->load->view($content);
    } else if (isset($page) && $page) { ?>
        <ul class="breadcrumb">
        {link}
        </ul>
        <?php $this->load->view($page); ?>
        <!-- <div class="scroll-img"><i class="fa fa-angle-up" aria-hidden="true"></i></div> -->
    <?php }?>
    <?php $this->load->view('frontend/layout/footer'); ?>
    </div>
</div>
</body>
<script src="<?= frontend()?>plugins/jquery/jquery.min.js"></script>
<script src="<?= frontend()?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?= frontend()?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= frontend()?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= frontend()?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= frontend()?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script src="<?= frontend()?>dist/js/adminlte.min.js"></script>
<script src="<?= frontend()?>dist/js/demo.js"></script>
</html>
