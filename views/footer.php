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
                <div class="show-tweets"><p>
               </p>
               </div>
            </div>
            <div class="widget span3">
                <h4>Galeri</h4>
                <ul class="flickr-feed"></ul>
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
<script src="assets/js/jquery-1.8.2.min.js"></script>
<script src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.flexslider.js"></script>
<script src="assets/js/jquery.tweet.js"></script>
<script src="assets/js/jflickrfeed.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="assets/js/jquery.ui.map.min.js"></script>
<script src="assets/js/jquery.quicksand.js"></script>
<script src="assets/js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
<script src="assets/js/scripts.js"></script>