<!DOCTYPE html>
<html>
<?php    
    //Include
    include("lib/conn.php");
    include("lib/paginator.php");
    include("views/a_head.php");    
    session_start();
?>
    <body class="skin-blue">
<?php
        if(empty($_SESSION['name'])){
            header("location:404");
        }else{
            include("views/a_header.php");
             	
            	switch($_GET['page']){

                    case 'home'                 :   include("views/a_beranda.php");
                                                    break;
                    case 'paket'                :   include("views/a_paket.php");
                                                    break;
            		case 'editdeskripsi'		:	include("views/a_edit_deskripsi.php");
            							            break;
            		case 'editlokasi'	        :	include("views/a_edit_lokasi.php");
            			       			            break;
                    case 'lokasi'               :   include ("views/a_lokasi.php");
                                                    break;
                    case 'user'                 :   include ("views/a_user.php");
                                                    break;
                    case 'edituser'             :   include ("views/a_edit_user.php");
                                                    break;             
                    case 'galeri'               :   include ("views/a_galeri.php");
                                                    break;
                    case 'editgaleri'           :   include ("views/a_edit_galeri.php");
                                                    break;  
                    case 'readMsg'              :   include ("views/a_read.php");                                                       
                                                    break;         
                    case 'paket'                :   include ("views/a_paket.php");                                                                              
                                                    break;                                                      
            	    case 'editpaket'            :   include ("views/a_edit_paket.php");
                                                    break;
                    case 'cms'                  :   include("views/a_cms.php");
                                                    break;
                    case 'hotel'                :   include("views/a_hotel.php");
                                                    break;
                    case 'edithotel'            :   include("views/a_edit_hotel.php");
                                                    break;
                    case 'car'                  :   include("views/a_car.php");
                                                    break;
                    case 'editcar'              :   include("views/a_edit_car.php");
                                                    break;
                }	

            include("views/a_footer.php");
        }
?>
    </body>
</html>