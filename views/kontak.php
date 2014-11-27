<div class="page-title">
    <div class="container">
        <div class="row">
    

            <div class="span12">
                <i class="icon-envelope-alt page-title-icon"></i>
                <h2>Kontak Kami</h2>
                <p>Silahkan hubungi kami untuk reservasi dan mengetahui jasa CV Yanks Tour and Transport</p>
            </div>
        </div>
    </div>
</div>

<!-- Contact Us -->
<?php

$con = mysql_fetch_array(mysql_query("SELECT * FROM deskripsi"));

?>

<div class="contact-us container">
    <div class="row">
        <div class="contact-form span7">
            <h4>Tentang CV Yanks Tour and Transport</h4>
            <p><?php echo $con['tentang_kami'] ?></p>
            <h4>Layanan Kami</h4>
            <p><?php echo $con['layanan'] ?></p>
            <h4>Keunggulan Kami</h4>
            <p><?php echo $con['keunggulan'] ?></p>
        </div>
        <?php

        $con = mysql_fetch_array(mysql_query("SELECT * FROM kontak"));

        ?>
        <div class="contact-address span5">
            <h4>Lokasi Kami</h4>
            <div class="map"></div>
            <h4>Alamat</h4>
            <p><?php echo $con['alamat'] ?></p>
            <h4>Phone:</h4>
            <p> <?php echo $con['telpon_1'] ?></p>
            <h4>Whatsapp:</h4>
            <p> <?php echo $con['telpon_2'] ?></p>
            <h4>Email:</h4>
            <p> <?php echo $con['email'] ?></p>
        </div>
    </div>
</div>