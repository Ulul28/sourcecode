    
        <?= form_open('home/cari', ['id' => 'form_tambah', 'class'=>'form-inline ml-3', 'role' => 'form', 'method' => 'post']) ?>
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar bg-light" type="text" placeholder="Search......" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
        <?= form_close() ?>
    
    