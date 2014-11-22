            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Paket
                        <small>Panel Administrator</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="mint"><i class="fa fa-dashboard"></i> Beranda</a></li>
                        <li class="active">Paket</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                    <div class="col-sm-12">
                        <div class='col-sm-4'>
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"><i class="fa fa-plus-square-o"></i> Tambah Paket</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-primary btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>                                        
                                    </div>
                                </div>
                                <form role="form" action="tambahPaket" method="post">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="nama">Paket</label>
                                        <input type="text" name="paket" class="form-control" id="exampleInputEmail1" placeholder="Silahkan Masukan Nama Paket">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Durasi</label><br>
                                        <input type="radio" name="durasi" class="form-control" id="exampleInputEmail1" value="3 Hari 2 Malam"> 3 Hari 2 Malam<br>
                                        <input type="radio" name="durasi" class="form-control" id="exampleInputEmail1" value="4 Hari 3 Malam"> 4 Hari 3 Malam<br>
                                        <input type="radio" name="durasi" class="form-control" id="exampleInputEmail1" value="5 Hari 4 Malam"> 5 Hari 4 Malam<br>
                                        <input type="radio" name="durasi" class="form-control" id="exampleInputEmail1" value="6 Hari 5 Malam"> 6 Hari 5 Malam<br>
                                        <input type="radio" name="durasi" class="form-control" id="exampleInputEmail1" value="7 Hari 6 Malam"> 7 Hari 6 Malam<br>
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="nama">Ongkos dari Bandung (Harga per seorang)</label>
                                        <input type="text" name="ongkos_bandung" class="form-control" id="exampleInputEmail1" placeholder="Ongkos dari Bandung">
                                    </div>
                                     <div class="form-group">
                                        <label for="nama">Ongkos dari Jakarta (Harga per seorang)</label>
                                        <input type="text" name="ongkos_jakarta" class="form-control" id="exampleInputEmail1" placeholder="Ongkos dari Jakarta">
                                    </div>   
                                     <div class="form-group">
                                        <label for="nama">Fasilitas</label><p class="help-block">Pisahkan tiap fasilitas dengan garis baru (Enter).</p>
                                        <textarea name="fasilitas" id="fasilitas" class="form-control" style="max-width:100%;max-height:200px" placeholder="Fasilitas. Pisahkan dengan menekan Enter." cols="30" rows="10"></textarea>
                                    </div>                                
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Simpan</button>
                                                   
                                    <input type="reset" class="btn btn-default" value="Ulangi">
                                </div>
                                </form>
                            </div><!-- /.box -->
                        </div>
                        <div class="col-sm-8">
                            <!-- Primary box -->
                            <div class="box box-primary">
                                <div class="box-header">
                                     <h3 class="box-title"><i class="fa fa-picture-o"></i> List Paket Wisata DwiBandara</h3>
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
                                                <th>Paket</th>                                   
                                                <th>Durasi</th> 
                                                <th>HTM Bandung</th>
                                                <th>HTM Jakarta</th>
                                                <th colspan=3>Tindakan</th>
                                            </tr>
                                            </thead>
                                                <?php

                                                $data   = (mysql_query("SELECT * FROM paket"));
                                                $p      = new pagingPaket;
                                                $batas  = 10;
                                                $posisi = $p->cariPosisi($batas);
                                                $a      = mysql_query("SELECT * FROM paket ORDER BY paket ASC LIMIT $posisi, $batas");
                                                if(mysql_num_rows($a)==0){
                                                    echo"<tr><td>Paket tidak ditemukan.</td></tr></tbody></table>";
                                                }else{
                                                while($b=mysql_fetch_array($a)){
                                                echo"
                                                <tr>                                                
                                                    <td>$b[paket]</td>   
                                                    <td>$b[durasi]</td>                                                                
                                                    <td>$b[ongkos_bandung]</td>
                                                    <td>$b[ongkos_jakarta]</td>                                             
                                                    <td><a href='mint-edit-paket-$b[id]' title data-toggle='tooltip' data-original-title='Ubah Paket'><i class='glyphicon glyphicon-edit'></i></a></td>
                                                    <td><a href='deletepaket-$b[id]' title data-toggle='tooltip' data-original-title='Hapus Paket'><i class='glyphicon glyphicon-remove'></i></a></td>";
                                                    if($b['status']=='Aktif'){
                                                        echo"<td><a href='ubahstatuspaket-$b[id]' title data-toggle='tooltip' data-original-title='Nonaktifkan Paket'><i class='glyphicon glyphicon-ban-circle'></i></a></td>";
                                                    }else{
                                                        echo"<td><a href='ubahstatuspaket-$b[id]' title data-toggle='tooltip' data-original-title='Aktifkan Paket'><i class='glyphicon glyphicon-ok'></i></a></td>";
                                                    }
                                                    echo"
                                                </tr>";
                                                }
                                                $jmldata    =   mysql_num_rows(mysql_query("SELECT * FROM paket"));
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
                    </div>
                    
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
