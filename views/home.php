<div class="slider">
    <div class="container">
        <div class="row">
            <div class="span10 offset1">

                <div class="flexslider">
                
                    <ul class="slides">
                    <?php 
                                    $data   = (mysql_query("SELECT * FROM lokasi"));
                                    $p      = new pagingShowGaleri;
                                    $batas  = 4;
                                    $posisi = $p->cariPosisi($batas);
                                    $a      = mysql_query("SELECT * FROM lokasi WHERE status='Aktif' ORDER BY nama DESC LIMIT $posisi, $batas");
                                    if(mysql_num_rows($a)==0){
                                        echo"<i>Tidak ada lokasi untuk ditampilkan.</i>";
                                    }else{
                                    while($r=mysql_fetch_array($a)){
                                ?> 
                        <li data-thumb="assets/img/lokasi/<?php echo $r['gambar'] ?>" style="height:500px;">                                         
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
    <h2>Selamat Datang di CV <span class="violet">Yanks Tour and Transport</span>, agen travel terpercaya di kota Bandung.</h2>
    <p>Kami menyediakan berbagai paket wisata, hotel dan kendaraan untuk liburan anda</p>
</div>

<!-- Services -->
<div class="what-we-do container" style="margin-bottom: 50px">
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