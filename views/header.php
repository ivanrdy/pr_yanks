<div class="container">
    <div class="header row">
        <div class="span12">
            <div class="navbar">
                <div class="navbar-inner">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <h1>
                        <a class="brand" href="beranda">CV Yanks Tours & Transport</a>
                    </h1>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                        <?php 
                            if($_GET['page']=='home'){
                                echo"<li  class='current-page'>";
                            }else{
                        ?>
                            <li>
                        <?php } ?>
                                <a href="beranda"><i class="fa fa-home"></i><br />Beranda</a>
                            </li>
                        <?php 
                            if($_GET['page']=='paket'){
                                echo"<li  class='current-page'>";
                            }else{
                        ?>   
                            <li>
                        <?php } ?>
                                <a href="paket"><i class="fa fa-th-list"></i><br />Paket Wisata</a>
                            </li>
                        <?php 
                            if($_GET['page']=='kendaraan'){
                                echo"<li  class='current-page'>";
                            }else{
                        ?>
                            <li>
                        <?php } ?>
                                <a href="kendaraan"><i class="fa fa-car"></i><br />Rental Mobil</a>
                            </li>
                        <?php 
                            if($_GET['page']=='lokasi'){
                                echo"<li  class='current-page'>";
                            }else{
                        ?>
                            <li>
                        <?php } ?>
                                <a href="lokasi"><i class="fa fa-location-arrow"></i><br />Lokasi Wisata</a>
                            </li>
                        <?php 
                            if($_GET['page']=='hotel'){
                                echo"<li  class='current-page'>";
                            }else{
                        ?>
                            <li>
                        <?php } ?>
                                <a href="hotel"><i class="fa fa-building-o"></i><br />Hotel</a>
                            </li>
                        <?php 
                            if($_GET['page']=='galeri'){
                                echo"<li  class='current-page'>";
                            }else{
                        ?>
                            <li>
                        <?php } ?>
                                <a href="galeri-1"><i class="fa fa-picture-o"></i><br />Galeri</a>
                            </li>
                        <?php 
                            if($_GET['page']=='kontak'){
                                echo"<li  class='current-page'>";
                            }else{
                        ?>
                            <li>
                        <?php } ?>
                                <a href="kontak"><i class="fa fa-envelope-o"></i><br />Kontak</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>