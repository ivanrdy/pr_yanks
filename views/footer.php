<style>
    ul,li{list-style: none}
    a.mitra{opacity:0.6;-moz-filter: grayscale(100%);-webkit-filter: grayscale(100%)}
    a.mitra:hover{opacity:1;-moz-filter: none;-webkit-filter: none}
</style>

<footer>
    <div class="container">
    <?php

    $con = mysql_fetch_array(mysql_query("SELECT * FROM deskripsi"));

    ?>
        <div class="row">
            <div class="widget span3">
                <h4>Tentang Kami</h4>
                <p><?php echo $con['tentang_kami'] ?></p>
                <p><a href="kontak">Selengkapnya...</a></p>
            </div>
            <div class="widget span3">
                <h4>Mitra Kami</h4>
                <div>
                    <a class="mitra" href="http://sulampesona.com/"><img src="assets/img/sp2.png" alt="Sulam Pesona"></a>
                    <p>Pusat kain sulam ternama terletak di pusat perbelanjaan Pasar Baru Bandung</p>
                </div>
            </div>
            <div class="widget span3">
                <h4>Galeri</h4>
                <ul style="margin:16px 0 0 0">
                    <?php 
                        $data   = (mysql_query("SELECT * FROM galeri"));
                        $p      = new pagingShowGaleri;
                        $batas  = 12;
                        $posisi = $p->cariPosisi($batas);
                        $a      = mysql_query("SELECT * FROM galeri WHERE status='Aktif' ORDER BY nama_foto DESC LIMIT $posisi, $batas");
                        if(mysql_num_rows($a)==0){
                            echo"<i>Tidak ada galeri untuk ditampilkan.</i>";
                        }else{
                        while($r=mysql_fetch_array($a)){
                    ?>
                    <li style="width:50px;border:2px solid #eaeaea;display:inline-block">
                        <img src="assets/img/galeri/<?php echo $r['foto'] ?>" alt="">
                    </li>
                    <?php }} ?>
                </ul>
            </div>
            <?php

            $con = mysql_fetch_array(mysql_query("SELECT * FROM kontak"));

            ?>
            <div class="widget span3">
                <h4>Kontak Kami</h4>
                <p><i class="icon-map-marker"></i> Alamat: <?php echo $con['alamat'] ?></p>
                <p><i class="icon-phone"></i> Telepon: <?php echo $con['telpon_1'] ?></p>
                <p><i class="icon-user"></i> Whatsapp: <?php echo $con['telpon_2'] ?></p>
                <p><i class="icon-envelope-alt"></i> Email: <a href=""><?php echo $con['email'] ?></a></p>
            </div>
        </div>
        <div class="footer-border"></div>
        <div class="row">
            <div class="copyright span4">
                <p>&copy; CV Yanks Tours and Travel</p>
            </div>
            <div class="social span8">
                <a class="facebook" href=""></a>
                <a class="dribbble" href=""></a>
                <a class="twitter" href=""></a>
                <a class="pinterest" href=""></a>
            </div>
        </div>
    </div>
</footer>

<!-- Javascript -->
<script src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.flexslider.js"></script>
<script src="assets/js/jquery.tweet.js"></script>
<script src="assets/js/jflickrfeed.js"></script>
<!-- <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="assets/js/jquery.ui.map.min.js"></script> -->
<script src="assets/js/jquery.quicksand.js"></script>
<script src="assets/js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
<script src="assets/js/scripts.js"></script>

