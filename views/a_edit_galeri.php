            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Edit Galeri
                        <small>Panel Administrator</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="mint"><i class="fa fa-dashboard"></i> Beranda</a></li>
                        <li><a href="mint-galeri"></a> Galeri</li>
                        <li class="active">Edit Galeri</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                    <div class="col-sm-12">
                    <div class='col-md-4'>
                    <?php

                    $id = $_GET['id'];
                    $q = mysql_query("SELECT * FROM galeri WHERE id = $id");
                    $fetch = mysql_fetch_array($q);

                    ?>
                        <div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title"><i class="fa fa-plus-square-o"></i> Ubah Foto Galeri</h3>
                                <div class="box-tools pull-right">
                                    <button class="btn btn-primary btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>                                        
                                </div>
                            </div>
                            <form role="form" action="ubahGaleri" enctype="multipart/form-data" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="nama">Nama Foto</label>
                                    <input type='hidden' name='id' value='<?php echo $id; ?>'>
                                    <input value="<?php echo $fetch['nama_foto']; ?>" type="text" name="nama_foto" class="form-control" id="exampleInputEmail1" placeholder="Nama Foto">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Deskripsi</label>
                                    <textarea name='deskripsi' class='form-control full-width' placeholder="Deskripsi Foto"><?php echo $fetch['deskripsi']; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Foto</label>
                                    <input type="file" id="foto" name="foto" accept='image/*' required>
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
                                 <h3 class="box-title"><i class="fa fa-picture-o"></i>List Galeri Foto</h3>
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
                                            <th>Nama </th>                                       
                                            <th>Deskripsi</th>
                                            <th>Status</th>
                                            <th colspan=3>Tindakan</th>
                                        </tr>
                                        </thead>
                                             <?php

                                            $data   = (mysql_query("SELECT * FROM galeri"));
                                           $p      = new pagingGaleri;
                                            $batas  = 10;
                                           $posisi = $p->cariPosisi($batas);
                                            $a      = mysql_query("SELECT * FROM galeri ORDER BY nama_foto ASC LIMIT $posisi, $batas");
                                            if(mysql_num_rows($a)==0){
                                                echo"<tr><td>Galeri tidak ditemukan.</td></tr></tbody></table>";
                                            }else{
                                            while($b=mysql_fetch_array($a)){
                                            echo"
                                            <tr>                                                
                                                <td>$b[nama_foto]</td>
                                                <td>$b[deskripsi]</td>                                                 
                                                <td>$b[status]</td>                                              
                                                <td><a href='mint-edit-galeri-$b[id]'><i class='glyphicon glyphicon-edit'></i> Ubah</a></td>
                                                <td><a href='hapusgaleri-$b[id]'><i class='glyphicon glyphicon-remove'></i> Hapus</a></td>";
                                                if($b['status']=='Aktif'){
                                                    echo"<td><a href='ubahstatusgaleri-$b[id]'><i class='glyphicon glyphicon-ban-circle'></i> Nonaktifkan</a></td>";
                                                }else{
                                                    echo"<td><a href='ubahstatusgaleri-$b[id]'><i class='glyphicon glyphicon-ok'></i> Aktifkan</a></td>";
                                                }
                                                echo"
                                            </tr>";
                                            }
                                            $jmldata    =   mysql_num_rows(mysql_query("SELECT * FROM galeri"));
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
                            </div><!-- /.box-footer-->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
