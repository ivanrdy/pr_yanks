<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="span12">
                <i class="icon-camera page-title-icon"></i>
                <h2>Lokasi Wisata</h2>
                <p>Tujuan Tempat Wisata yang Terkenal di Bandung</p>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio -->
<div class="portfolio portfolio-page container">
    <div class="row">
        <div class="portfolio-navigator span12">
            <h4 class="filter-portfolio">
                <a class="all" id="active-imgs" href="#">Lokasi Wisata</a>                
            </h4>
        </div>
    </div>

    <div class="row">

        <ul class="portfolio-img">
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
            <li data-id="p-1" data-type="web-design" class="span3">
                <div class="work">
                    <a href="assets/img/lokasi/<?php echo $r['gambar'] ?>" rel="#">
                        <img src="assets/img/lokasi/<?php echo $r['gambar'] ?>" alt="">
                    </a>
                    <h4><?php echo $r['nama'] ?></h4>
                    <p><?php echo $r['deskripsi'] ?>.</p>
                </div>
            </li>
        <?php }} ?>
        </ul>
        </div>
</div>
