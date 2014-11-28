<!-- Page Title -->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="span12">
                <i class="icon-tasks page-title-icon"></i>
                <h2>Paket Wisata</h2>
                <p>Beragam Paket Wisata yang Kami tawarkan untuk liburan anda</p>
            </div>
        </div>
    </div>
</div>

<!-- Services Half Width Text -->
<div class="services-half-width container">
    <div class="row">
        <?php 
            $data   = (mysql_query("SELECT * FROM paket"));
            $p      = new pagingShowGaleri;
            $batas  = 16;
            $posisi = $p->cariPosisi($batas);
            $a      = mysql_query("SELECT * FROM paket WHERE status='Aktif' ORDER BY id DESC LIMIT $posisi, $batas");
            if(mysql_num_rows($a)==0){
                echo"<i>Tidak ada paket untuk ditampilkan.</i>";
            }else{
            while($r=mysql_fetch_array($a)){
        ?> 
        <div class="panel panel-primary span6">            
            <div class="services-half-width-text">
                <h4><?php echo $r['paket'] ?></h4>
                <p>
                    <ul>
                    <?php 
                        $fac = explode("\n", $r['fasilitas']);
                        foreach($fac as $lines){
                           ?>
                            <li><?php echo $lines ?></li>
                           <?php
                        }
                    ?>
                    </ul>
                </p>
                <table class="table span5">
                    <tr>
                        <th>Durasi</th><th>Ongkos (RM)</th>
                    </tr>
                    <tr>
                        <td><?php echo $r['durasi'] ?></td><td><?php echo $r['ongkos_bandung'] ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <?php } } ?>
    </div>
</div>

<!-- Call To Action -->
<div class="call-to-action container">
    <div class="row">
        <div class="call-to-action-text span12">
            <div class="ca-text">
                <p>Tertarik untuk menggunakan jasa CV <span class="violet">Yanks Tour and Transport</span>? Silahkan hubungi contact person kami dan dapatkan berbagai penawaran menarik!</p>
            </div>
            <div class="ca-button">
                <a href="kontak">Hubungi Kami</a>
            </div>
        </div>
    </div>
</div>