<!DOCTYPE html>
<html>
<?php    
    //Include
    include("lib/conn.php");
    include("lib/paginator.php");
    include("views/head.php");    
    session_start();
?>
    <body>
<?php
        include("views/header.php");
        	
        	switch($_GET['page']){

        		case 'home'		:	include("views/home.php");
        							break;
        		case 'paket'	:	include("views/paket.php");
        			       			break;
        		case 'kontak'	:	include("views/kontak.php");
        							break;
                case 'galeri'   :   include("views/galeri.php");
                                    break;
                case 'lokasi'   :   include("views/lokasi.php");
                                    break;
                case 'kendaraan':   include("views/kendaraan.php");
                                    break;
                case 'hotel'    :   include("views/hotel.php");
                                    break;
        		default 		:	include("views/home.php");

        	}	
        include("views/footer.php");
?>
    </body>
</html>