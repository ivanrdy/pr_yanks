<!-- Page Title -->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="span12">
                <i class="icon-user page-title-icon"></i>
                <h2>Kendaraan</h2>
            </div>
        </div>
    </div>
</div>
<!-- Meet Our Team -->
<div class="team container">
    <div class="team-title">
        <h3>Mobil dan Van</h3>
    </div>    
    <div class="row">
                <?php 
                    $data   = (mysql_query("SELECT * FROM car"));
                    $p      = new pagingShowGaleri;
                    $batas  = 16;
                    $posisi = $p->cariPosisi($batas);
                    $a      = mysql_query("SELECT * FROM car WHERE status='Aktif' ORDER BY nama DESC LIMIT $posisi, $batas");
                    if(mysql_num_rows($a)==0){
                        echo"<i>Tidak ada kendaraan untuk ditampilkan.</i>";
                    }else{
                    while($r=mysql_fetch_array($a)){
                ?> 
            <div class="team-text span3" style="overflow:hidden">
                <img src="assets/img/car/<?php echo $r['gambar'] ?>" style="background-position:center center;height:200px">
                <h4><?php echo $r['nama'] ?></h4>
                <h3><strong><?php echo $r['harga_bandung'] ?></strong></h3>
                <div class="social-links">
                   <!--  <a class="money" href=""></a>
                    <a class="twitter" href=""></a>
                    <a class="linkedin" href=""></a>
                    <a class="email" href=""></a> -->
                </div>
            </div>
        <?php } } ?>
    </div>
    <!-- About Us Text -->
    <div class="about-us container">
        <div class="row">
            <div class="about-us-text span12">
                <h4>*Catatan</h4>
                <p> 1. Ke Jakarta dikenakan tambahan sebesar <strong>Rp.250.000</strong><br>
                    2. Ke Tangkuban Parahu, Kawah Putih Ciwidey dan Ciater Hot Water Spring dikenakan tambahan sebesar <strong>Rp.50.000</strong> </p>
                
            </div>
        </div>
    </div>


</div>