<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header with-border">
               <h3 class="box-title">Pelaporan Masuk</h3><br>
                <br>
            </div>
    <div class="box-body table-responsive">
       <table class="table table-bordered table-hover data-tabel">
            <thead>
                <tr>
                    <th>no.</th>
                    <th>nik.</th>
                    <th>tentang.</th>
                    <th>uraian.</th>
                    <th>gambar-file.</th>
                    <th>Status</th>
                    <th align="center" width="10px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1;
                foreach($data as $d){
            ?>
                <tr>
                    <td><?= $no .'.'?></td>
                    <td><?= $d['nik'] ?></td>
                    <td><?= $d['tentang'] ?></td>
                    <td><?= $d['uraian'] ?></td>
                    <td><img src="<?= base_url().$d['file'] ?>" style="width: 90px;"></td>
                    <td width="10px" align="center"><?php if($d['status']=='1')
                        {
                            echo "<a href=''><i class='glyphicon glyphicon-refresh text-red'></i></a>";
                        }elseif ($d['status']=='2') {
                            echo "<a href=''><i class='glyphicon glyphicon-refresh text-primary'></i></a>";
                        }else{
                            echo "<a href=''><i class='glyphicon glyphicon-check text-success'></i></a>";
                        }
                        ?>
                    <td align="center">
                        <a class="btn btn-primary" href="<?php echo site_url('master/halaman/proses/' . $d['id']) ?>"><span>Proses</span>
                        </a>
                        <a class="btn btn-success"  href="<?php echo site_url('master/halaman/setuju/' . $d['id']) ?>"><span>Setuju</span>
                        </a>
                    </td>
                </tr>
            </tbody>
            <?php $no++; }?>
        </table>
    </div>
</div>
</div>
</div>