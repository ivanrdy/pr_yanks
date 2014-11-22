            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Edit User
                        <small>Panel Administrator</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="mint"><i class="fa fa-dashboard"></i> Beranda</a></li>
                        <li><a href="mint-user"></a> User</li>
                        <li class="active">Edit User</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                    <div class="col-sm-12">
                    <div class='col-md-4'>
                    <?php

                    $id = $_GET['id'];
                    $q = mysql_query("SELECT * FROM user WHERE id = $id");
                    $fetch = mysql_fetch_array($q);

                    ?>
                        

                        <div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title"><i class="fa fa-plus-square-o"></i> Ubah User</h3>
                                <div class="box-tools pull-right">
                                    <button class="btn btn-primary btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>                                        
                                </div>
                            </div>
                            <form role="form" action="editUser" enctype="multipart/form-data" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="nama">Username</label>
                                    <input type='hidden' name='id' value='<?php echo $id; ?>'>
                                    <input value="<?php echo $fetch['username']; ?>" type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Silahkan Ganti Username">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type='hidden' name='id' value='<?php echo $id; ?>'>
                                    <input value="<?php echo $fetch['password']; ?>" type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Silahkan Ganti Password">
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
                                 <h3 class="box-title"><i class="fa fa-picture-o"></i>List User</h3>
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
                                            <th>Username</th>                                       
                                            <th>Nama</th>
                                            <th>Status</th>
                                            <th colspan=1>Tindakan</th>
                                        </tr>
                                        </thead>
                                             <?php

                                            $data   = (mysql_query("SELECT * FROM user"));
                                           $p      = new pagingUser;
                                            $batas  = 10;
                                           $posisi = $p->cariPosisi($batas);
                                            $a      = mysql_query("SELECT * FROM user ORDER BY username ASC LIMIT $posisi, $batas");
                                            if(mysql_num_rows($a)==0){
                                                echo"<tr><td>Lokasi tidak ditemukan.</td></tr></tbody></table>";
                                            }else{
                                            while($b=mysql_fetch_array($a)){
                                            echo"
                                            <tr>                                                
                                                <td>$b[username]</td>
                                                <td>$b[name]</td>                                                 
                                                <td>$b[status]</td>                                              
                                                <td><a href='mint-edit-user-$b[id]'><i class='glyphicon glyphicon-edit'></i> Ubah</a></td>
                                                <td><a href='hapususer-$b[id]'><i class='glyphicon glyphicon-remove'></i> Hapus</a></td>";
                                                if($b['status']=='Aktif'){
                                                    echo"<td><a href='ubahstatususer-$b[id]'><i class='glyphicon glyphicon-ban-circle'></i> Nonaktifkan</a></td>";
                                                }else{
                                                    echo"<td><a href='ubahstatususer-$b[id]'><i class='glyphicon glyphicon-ok'></i> Aktifkan</a></td>";
                                                }
                                                echo"
                                            </tr>";
                                            }
                                            $jmldata    =   mysql_num_rows(mysql_query("SELECT * FROM user"));
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
