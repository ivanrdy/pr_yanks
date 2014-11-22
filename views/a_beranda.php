            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Beranda
                        <small>Panel administrator</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active"><i class="fa fa-dashboard"></i> Beranda</a></li>
                    </ol>                  
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="page-header">
                                Panel Admin Yanks Tour and Transport Travel&reg;
                                <small>Disini admin dapat me-<i>review</i> paket wisata dan galeri. Klik navigasi di sebelah kiri untuk lebih lengkapnya.</small>
                            </h4>
                            
                            <div class='col-sm-12' style='margin-bottom:10px'>                        
                                <a class="btn btn-app" href='mint-lokasi-1'>
                                    <i class="fa fa-location-arrow"></i> Lokasi
                                </a>                                                  
                                <a class="btn btn-app" href='mint-galeri-1'>
                                    <i class="fa fa-picture-o"></i> Galeri
                                </a>                        
                                <a class="btn btn-app" href='mint-car-1'>
                                    <i class="fa fa-compass"></i> Mobil
                                </a>     
                                <a class="btn btn-app" href='mint-hotel-1'>
                                    <i class="fa fa-briefcase"></i> Hotel
                                </a>                           
                                <a class="btn btn-app" href='mint-edit-deskripsi'>
                                    <i class="fa fa-phone-square"></i> Kontak dan Deskripsi
                                </a>
                            </div>
                        </div>
                     </div>    
                        
                    <div class="col-sm-12">
                        <!-- Primary box -->
                        <div class="box box-primary">
                            <div class="box-header">
                                 <h3 class="box-title"><i class="fa fa-picture-o"></i> List Paket Wisata Yanks Tour and Transport Travel</h3> 
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
                                            <th>Harga Ongkos Dari Bandung</th>
                                            <th>Harga Ongkos Dari Jakarta</th>
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
                                                <td><a href='mint-edit-paket-$b[id]'><i class='glyphicon glyphicon-edit'></i> Ubah</a></td>
                                                <td><a href='deletepaket-$b[id]'><i class='glyphicon glyphicon-remove'></i> Hapus</a></td>";
                                                if($b['status']=='Aktif'){
                                                    echo"<td><a href='ubahstatuspaket-$b[id]'><i class='glyphicon glyphicon-ban-circle'></i> Nonaktifkan</a></td>";
                                                }else{
                                                    echo"<td><a href='ubahstatuspaket-$b[id]'><i class='glyphicon glyphicon-ok'></i> Aktifkan</a></td>";
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
                        </div><!-- /.box -->
                        <div class="col-sm-12">
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
                    </div>                 
                </section><!-- /.content -->
            </aside><!-- /.right-side -->  