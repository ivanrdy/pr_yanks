<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="span12">
                <i class="icon-camera page-title-icon"></i>
                <h2>Galeri</h2>
                <p>Beberapa momen kami bersama para pelanggan CV Yanks Tour and Transport</p>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio -->
<div class="portfolio portfolio-page container">
    <div class="row">
        <div class="portfolio-navigator span12">
            <h4 class="filter-portfolio">
                <a class="all" id="active-imgs" href="#">Galeri</a>            
            </h4>
        </div>
    </div>
    <div class="row">

          <ul class="portfolio-img">
      <?php 
                      $data   = (mysql_query("SELECT * FROM galeri"));
                      $p      = new pagingShowGaleri;
                      $batas  = 16;
                      $posisi = $p->cariPosisi($batas);
                      $a      = mysql_query("SELECT * FROM galeri WHERE status='Aktif' ORDER BY nama_foto DESC LIMIT $posisi, $batas");
                      if(mysql_num_rows($a)==0){
                          echo"<i>Tidak ada galeri untuk ditampilkan.</i>";
                      }else{
                      while($r=mysql_fetch_array($a)){
                  ?> 
              <li data-id="p-1" data-type="web-design" class="span3">
                  <div class="work">
                      <a href="assets/img/galeri/<?php echo $r['foto'] ?>" rel="#">
                          <img src="assets/img/galeri/<?php echo $r['foto'] ?>" alt="">
                      </a>
                      <h4><?php echo $r['nama_foto'] ?></h4>
                      <p><?php echo $r['deskripsi'] ?>.</p>
                  </div>
              </li>
          <?php }} ?>
          </ul>
          </div>
    </div>
</div>