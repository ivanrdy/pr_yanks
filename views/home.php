<div class="slider">
    <div class="container">
        <div class="row">
            <div class="span10 offset1">

                <div class="flexslider">
                
                    <ul class="slides">
                    <?php 
                                    $data   = (mysql_query("SELECT * FROM lokasi"));
                                    $p      = new pagingShowGaleri;
                                    $batas  = 16;
                                    $posisi = $p->cariPosisi($batas);
                                    $a      = mysql_query("SELECT * FROM lokasi WHERE status='Aktif' ORDER BY nama DESC LIMIT $posisi, $batas");
                                    if(mysql_num_rows($a)==0){
                                        echo"<i>Tidak ada lokasi untuk ditampilkan.</i>";
                                    }else{
                                    while($r=mysql_fetch_array($a)){
                                ?> 
                        <li data-thumb="assets/img/lokasi/<?php echo $r['gambar'] ?>">                                         
                         <img src="assets/img/lokasi/<?php echo $r['gambar'] ?>">
                            <p class="flex-caption"><?php echo $r['deskripsi'] ?>.</p>
                            <?php }} ?> 
                        </li> 

                    </ul>
                </div>

            </div>
           
        </div>

    </div>

</div>

<!-- Site Description -->
<div class="presentation container">
    <h2>Selamat Datan di CV <span class="violet">Yanks Tour and Transport</span>, agen travel terpercaya di kota Bandung.</h2>
    <p>Kami menyediakan berbagai paket wisata, hotel dan kendaraan untuk liburan anda</p>
</div>

<!-- Services -->
<div class="what-we-do container">
    <div class="row">
        <div class="service span3">
            <div class="icon-awesome">
                <i class="icon-eye-open"></i>
            </div>
            <h4>Pelayanan Terbaik</h4>
            <p>CV Yanks Tour and Transport memberikan pelayanan terbaik dan maksimal kepada para wisatawan yang ingin berlibur</p>
            <a href="kontak">Lihat Selengkapnya</a>
        </div>
        <div class="service span3">
            <div class="icon-awesome">
                <i class="icon-table"></i>
            </div>
            <h4>Berbagai Kendaraan untuk Perjalanan Anda</h4>
            <p>Kami menawarkan berbagai macam kendaraan berikut supir yang bisa anda gunakan untuk menjelajah kota Bandung selama berlibur</p>
            <a href="kendaraan">Lihat Selengkapnya</a>
        </div>
        <div class="service span3">
            <div class="icon-awesome">
                <i class="icon-magic"></i>
            </div>
            <h4>Harga yang Terjangkau</h4>
            <p>Tidak perlu pusing dengan harga yang mahal, CV Yanks Tour and Travel memberikan pelayanan prima dan beragam paket wisata dengan harga yang bersahabat</p>
            <a href="paket">Lihat Selengkapnya</a>
        </div>
        <div class="service span3">
            <div class="icon-awesome">
                <i class="icon-print"></i>
            </div>
            <h4>Berbagai Pilihan Destinasi Lokasi Wisata</h4>
            <p>Kami akan memandu anda untuk menikmati lokasi wisata terkenal di Bandung</p>
            <a href="lokasi">Lihat Selengkapnya</a>
        </div>
    </div>
</div>

<!-- Latest Work -->
<div class="portfolio container">
    <div class="portfolio-title">
        <h3>Hotel</h3>
    </div>
    <div class="row">
    <?php 
                    $data   = (mysql_query("SELECT * FROM hotel"));
                    $p      = new pagingShowGaleri;
                    $batas  = 16;
                    $posisi = $p->cariPosisi($batas);
                    $a      = mysql_query("SELECT * FROM hotel WHERE status='Aktif' ORDER BY nama DESC LIMIT $posisi, $batas");
                    if(mysql_num_rows($a)==0){
                        echo"<i>Tidak ada hotel untuk ditampilkan.</i>";
                    }else{
                    while($r=mysql_fetch_array($a)){
                ?> 
        <div class="work span3">
            <img src="assets/img/hotel/<?php echo $r['gambar'] ?>" alt="">
            <h4><?php echo $r['nama'] ?></h4>
            <p><?php echo $r['deskripsi'] ?></p>
            <!-- <div class="icon-awesome">
                <a href="assets/img/portfolio/work1.jpg" rel="prettyPhoto"><i class="icon-search"></i></a>
                <a href="portfolio.html"><i class="icon-link"></i></a>
            </div> -->
        </div>
        <?php }} ?>
       
        </div>
    </div>
</div>

<!-- <!-- Testimonials -->
<div class="testimonials container">
    <div class="testimonials-title">
    </div>
<!--     <div class="row">
        <div class="testimonial-list span12">
            <div class="tabbable tabs-below">
                <div class="tab-content">
                    <div class="tab-pane active" id="A">
                        <img src="assets/img/testimonials/1.jpg" title="" alt="">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur..."<br /><span class="violet">Lorem Ipsum, dolor.co.uk</span></p>
                    </div>
                    <div class="tab-pane" id="B">
                        <img src="assets/img/testimonials/2.jpg" title="" alt="">
                        <p>"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat..."<br /><span class="violet">Minim Veniam, nostrud.com</span></p>
                    </div>
                    <div class="tab-pane" id="C">
                        <img src="assets/img/testimonials/3.jpg" title="" alt="">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur..."<br /><span class="violet">Lorem Ipsum, dolor.co.uk</span></p>
                    </div>
                    <div class="tab-pane" id="D">
                        <img src="assets/img/testimonials/1.jpg" title="" alt="">
                        <p>"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat..."<br /><span class="violet">Minim Veniam, nostrud.com</span></p>
                    </div>
                </div>
               <ul class="nav nav-tabs">
                   <li class="active"><a href="#A" data-toggle="tab"></a></li>
                   <li class=""><a href="#B" data-toggle="tab"></a></li>
                   <li class=""><a href="#C" data-toggle="tab"></a></li>
                   <li class=""><a href="#D" data-toggle="tab"></a></li>
               </ul>
           </div>
        </div>
    </div> -->
</div>