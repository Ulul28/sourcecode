<?php $url = $this->uri->segment(1);?>
<nav class="main-header navbar navbar-expand-md navbar-white bg-light">
  <div class="container">
    
      <div class="col-md-7">
            <a href="<?= site_url()?>" class="navbar-brand roundeds">
              <img src="<?= frontend()?>img/head2.png" alt="Logo" class="brand-image" style="width: 190px; height: 55px">
            </a>
      </div>
      <div class="col-md-5">
            <a href="https://www.instagram.com/dpupr_padangpariaman/?hl=id" class="navbar-brand roundeds">
              <img src="<?= frontend()?>img/instagram.png" alt="Logo" class="brand-image" style="width: 30px; height:30px">
            </a>
            <a href="https://www.youtube.com/channel/UCD2zipBPzQYMCrp15AEWGyA" class="navbar-brand roundeds">
              <img src="<?= frontend()?>img/yt.png" alt="Logo" class="brand-image" style="width: 50px; height:40px">
            </a>
            
              <img src="<?= frontend()?>img/email.png" alt="Logo" class="brand-image" style="width: 30px; height:30px"><small class="text-dark"> dinaspuprpadangpariaman.kab@gmail.com</small>
      </div>
    
  </div>
</nav>
  <nav class="main-header navbar sticky-top navbar-expand-md navbar-dark" style="background: #1e2d5b;">
    <div class="container">
      <div class="row">
      <div class="container">
        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <ul class="navbar-nav">
                    <?php
                        // data main menu
                        $main_menu = $this->db->get_where('menu', array('is_main_menu' => 0));
                        foreach ($main_menu->result() as $main) {
                            // Query untuk mencari data sub menu
                            $sub_menu = $this->db->get_where('menu', array('is_main_menu' => $main->id));
                            // periksa apakah ada sub menu
                            if ($sub_menu->num_rows() == 0) {
                                // main menu dengan sub menu
                                echo "<li class='nav-item'><a href='$main->link' class='nav-link'>".$main->judul_menu."</a></li>";
                            } else {
                                // main menu tanpa sub menu
                              echo "<li class='nav-item dropdown dropdown-hover'><a id='dropdownSubMenu1' href='' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' class='nav-link dropdown-toggle'>".$main->judul_menu."</a>";
                                // sub menu nya disini
                                echo "<ul aria-labelledby='dropdownSubMenu1' class='dropdown-menu border-0 shadow bg-warning'>";
                                foreach ($sub_menu->result() as $sub) {
                                    echo "<li ><a href='$sub->link' class='dropdown-item'>". $sub->judul_menu. "</a></li>";
                                }
                                echo"</ul></li>";
                            }
                        }
                        ?>
        </ul>
        <?php $this->load->view('frontend/layout/cari')?>
        </div>
      </div>
    </div>
    </div>
  </nav>
<script type="text/javascript">
  $(function(){
    $('.dropdown').hover(function() {
        $(this).addClass('open');
    },
    function() {
        $(this).removeClass('open');
    });
});

</script>