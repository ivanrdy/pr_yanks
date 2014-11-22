            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Edit Deskripsi
                        <small>Panel administrator</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="mint"><i class="fa fa-dashboard"></i> Beranda</a></li>
                        <li class="active">Edit Deskripsi</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class='col-md-12'>
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"><i class="fa fa-info"></i> Ubah Informasi Kontak TigaTours Travel</h3>
                                        <div class="box-tools pull-right">
                                        <button class="btn btn-primary btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>                                        
                                        </div>
                                </div>
                                <form role="form" action="ubahkontak" method="post">
                                <div class="box-body">
                                <table class='table'>
                                <?php

                                $q = mysql_fetch_array(mysql_query("SELECT * FROM kontak"));

                                ?>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label for="telepon"><i class='fa fa-phone'></i> Telepon 1</label>
                                                <input type="text" name="telepon_1" class="form-control" id="telepon1" placeholder="Telepon" value='<?php echo $q['telpon_1']; ?>'>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="telepon2"><i class='fa fa-phone'></i> Telepon 2 (Jika ada)</label>
                                                <input type="text" name="telepon_2" class="form-control" id="telepon2" placeholder="Telepon 2" value='<?php echo $q['telpon_2']; ?>'>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="email"><i class='fa fa-envelope'></i> E-mail</label>
                                                <input type="text" name="email" class="form-control" id="wa" placeholder="E-mail" value='<?php echo $q['email']; ?>'>
                                            </div>
                                             
                                        </td>                                        
                                    </tr>
                                    <tr>
                                        <td colspan=4>                                            
                                            <div class="form-group">
                                                <label for="alamat"><i class='fa fa-home'></i> Alamat</label>
                                                <textarea name='alamat' class='form-control full-width' placeholder="Alamat"><?php echo $q['alamat']; ?></textarea>
                                            </div>                                            
                                        </td>     
                                    </tr>
                                </table>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Simpan</button>
                                    <button type="reset" class="btn btn-warning">Ulangi</button>
                                </div>
                                </form>
                            </div>

                            <div class="box box-primary">
                                 <?php 
                                 $q = mysql_fetch_array(mysql_query("SELECT * FROM deskripsi"));
                                 ?>
                                <div class="box-header">
                                   <h3 class="box-title"><i class="fa fa-info"></i> Ubah Deskripsi Layanan TigaTours Travel</h3>
                                        <div class="box-tools pull-right">
                                        <button class="btn btn-primary btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>                                        
                                        </div>
                                </div>
                                <form role="form" action="ubahdeskripsi" enctype="multipart/form-data" method="post">
                                <div class="box-body">
                                    <table class='table'>
                                        <tr>
                                            <div class="form-group">
                                                <label for="deskripsi"><i class='fa fa-check'></i> Layanan TigaTours</label>
                                                <textarea name='layanan' class='form-control full-width' placeholder="Deskripsi TigaTours"><?php echo $q['layanan']; ?></textarea>
                                            </div>                                        
                                        </tr>
                                        <tr>
                                            <div class="form-group">
                                                <label for="keunggulan"><i class='fa fa-plus'></i> Keunggulan TigaTours</label>
                                                <textarea name='keunggulan' class='form-control full-width' placeholder="Keunggulan TigaTours"><?php echo $q['keunggulan']; ?></textarea>
                                            </div>
                                        </tr>
                                        <tr>
                                            <div class="form-group">
                                                <label for="layanan"><i class='fa fa-wrench'></i> Tentang TigaTours</label>
                                                <textarea name='tentang_kami' class='form-control full-width' placeholder="Layanan TigaTours"><?php echo $q['tentang_kami']; ?></textarea>
                                            </div>
                                        </tr>
                                    </table>
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Simpan</button> 
                                    <button type="reset" class="btn btn-warning">Ulangi</button>                    
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->    