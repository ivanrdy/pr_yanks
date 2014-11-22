 <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Mobil
                <small>Panel Administrator</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="mint"><i class="fa fa-dashboard"></i> Beranda</a></li>
                <li><a href="mint-lokasi"></a>Mobil</li>
                <li class="active">Edit Mobil</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
            <div class="col-sm-12">
            <div class='col-md-4'>
            <?php

            $id = $_GET['id'];
            $q = mysql_query("SELECT * FROM car WHERE id = $id");
            $fetch = mysql_fetch_array($q);

            ?>
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"><i class="fa fa-plus-square-o"></i> Ubah Hotel</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-primary btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>                                        
                        </div>
                    </div>
                    <form role="form" action="ubahMobil-$id" enctype="multipart/form-data" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nama">Nama Mobil</label>
                            <input type='hidden' name='id' value='<?php echo $id; ?>'>
                            <input value="<?php echo $fetch['nama']; ?>" type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Hotel">
                        </div>
                         <div class="form-group">
                            <label for="nama">Harga Tour Bandung</label>
                            <input type='hidden' name='id' value='<?php echo $id; ?>'>
                            <input value="<?php echo $fetch['harga_bandung']; ?>" type="text" name="harga_bandung" class="form-control" id="exampleInputEmail1" placeholder="Harga Tour Bandung">
                        </div>
                         <div class="form-group">
                            <label for="nama">Harga Tour Jakarta</label>
                            <input type='hidden' name='id' value='<?php echo $id; ?>'>
                            <input value="<?php echo $fetch['harga_jakarta']; ?>" type="text" name="harga_jakarta" class="form-control" id="exampleInputEmail1" placeholder="Harga Tour Jakarta">
                        </div>
                         <div class="form-group">
                            <label for="nama">Harga Tour Bandung-Jakarta</label>
                            <input type='hidden' name='id' value='<?php echo $id; ?>'>
                            <input value="<?php echo $fetch['harga_bdg_jkt']; ?>" type="text" name="harga_bdg_jkt" class="form-control" id="exampleInputEmail1" placeholder="Harga Tour Bandung-Jakarta">
                        </div>                        
                        <div class="form-group">
                            <label for="gambar">Foto</label>
                            <input type="file" id="gambar" name="gambar" accept='image/*'>
                            <p class="help-block">Masukkan file gambar.</p>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Simpan</button>
                                       
                        <input type="reset" class="btn btn-default" value="Ulangi">
                    </div>
                    </form>
                </div><!-- /.box -->
            </div>
            <div class="col-md-8">
                <!-- Primary box -->
                <div class="box box-primary">
                    <div class="box-header">
                         <h3 class="box-title"><i class="fa fa-picture-o"></i>List Mobil</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-primary btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>                                        
                        </div>
                    </div>
                     <div class="box-body">
                        <div class="table-responsive">
                            <!-- THE MESSAGES -->
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Nama Mobil</th>                                       
                                    <th>Harga Tour Bandung</th>
                                    <th>Harga Tour Jakarta</th>
                                    <th>Harga Tour Bandung-Jakarta</th>
                                    <th>Status</th>
                                    <th colspan=3>Tindakan</th>
                                </tr>
                                </thead>
                                     <?php

                                    $data   = (mysql_query("SELECT * FROM car"));
                                   $p      = new pagingLokasi;
                                    $batas  = 10;
                                   $posisi = $p->cariPosisi($batas);
                                    $a      = mysql_query("SELECT * FROM car ORDER BY nama ASC LIMIT $posisi, $batas");
                                    if(mysql_num_rows($a)==0){
                                        echo"<tr><td>Mobil tidak ditemukan.</td></tr></tbody></table>";
                                    }else{
                                    while($b=mysql_fetch_array($a)){
                                    echo"
                                    <tr>                                                
                                        <td>$b[nama]</td> 
                                        <td>$b[harga_bandung]</td>
                                        <td>$b[harga_jakarta]</td>
                                        <td>$b[harga_bdg_jkt]</td>                                                                                   
                                        <td>$b[status]</td>                                              
                                        <td><a href='mint-edit-car-$b[id]'><i class='glyphicon glyphicon-edit'></i> Ubah</a></td>
                                        <td><a href='deleteMobil-$b[id]'><i class='glyphicon glyphicon-remove'></i> Hapus</a></td>";
                                        if($b['status']=='Aktif'){
                                            echo"<td><a href='ubahstatusmobil-$b[id]'><i class='glyphicon glyphicon-ban-circle'></i> Nonaktifkan</a></td>";
                                        }else{
                                            echo"<td><a href='ubahstatusmobil-$b[id]'><i class='glyphicon glyphicon-ok'></i> Aktifkan</a></td>";
                                        }
                                        echo"
                                    </tr>";
                                    }
                                    $jmldata    =   mysql_num_rows(mysql_query("SELECT * FROM car"));
                                       $jmlhalaman =   $p->jumlahHalaman($jmldata, $batas);
                                    $linkHalaman=   $p->navHalaman($_GET['hal'],$jmlhalaman);                              
                                     
                                    }
                            echo"     
                            </table>
                        </div><!-- /.table-responsive -->
                    </div><!-- /.box-body -->                                                      
                    <div class='box-footer clearfix'>";
                    
                    // displaying paginaiton.
                        echo "<ul class='pagination pagination-sm no-margin pull-right'>$linkHalaman</ul>";
                    ?>
                </div><!-- /.box -->
            </div><!-- /.col -->
        </section><!-- /.content -->
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->