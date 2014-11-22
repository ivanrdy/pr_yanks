<?php

class pagingLokasi{
    function cariPosisi($batas){
       if(empty($_GET['hal'])){
            $posisi=0;
            $_GET['hal']=1;
       }else{
            $posisi=($_GET['hal']-1)*$batas;
       }
       return $posisi;
     }
     function jumlahHalaman($jmldata, $batas){
        $jmlhalaman = ceil($jmldata/$batas);
        return $jmlhalaman;
     }
     function navHalaman($halaman_aktif, $jmlhalaman){
        $link_halaman="";
    
        for($i=1; $i<=$jmlhalaman; $i++){
           if($i == $halaman_aktif){
                $link_halaman .= "<li class='active'><a disabled=disabled>$i</a></li>";
           }else{
                $link_halaman .= "<li><a href=mint-lokasi-$i>$i</a></li>";
           }
                $link_halaman .= "";
        }
            return $link_halaman;
    }
}

class pagingUser{
    function cariPosisi($batas){
       if(empty($_GET['hal'])){
            $posisi=0;
            $_GET['hal']=1;
       }else{
            $posisi=($_GET['hal']-1)*$batas;
       }
       return $posisi;
     }
     function jumlahHalaman($jmldata, $batas){
        $jmlhalaman = ceil($jmldata/$batas);
        return $jmlhalaman;
     }
     function navHalaman($halaman_aktif, $jmlhalaman){
        $link_halaman="";
    
        for($i=1; $i<=$jmlhalaman; $i++){
           if($i == $halaman_aktif){
                $link_halaman .= "<li class='active'><a disabled=disabled>$i</a></li>";
           }else{
                $link_halaman .= "<li><a href=mint-user-$i>$i</a></li>";
           }
                $link_halaman .= "";
        }
            return $link_halaman;
    }
}

class pagingGaleri{
    function cariPosisi($batas){
       if(empty($_GET['hal'])){
            $posisi=0;
            $_GET['hal']=1;
       }else{
            $posisi=($_GET['hal']-1)*$batas;
       }
       return $posisi;
     }
     function jumlahHalaman($jmldata, $batas){
        $jmlhalaman = ceil($jmldata/$batas);
        return $jmlhalaman;
     }
     function navHalaman($halaman_aktif, $jmlhalaman){
        $link_halaman="";
    
        for($i=1; $i<=$jmlhalaman; $i++){
           if($i == $halaman_aktif){
                $link_halaman .= "<li class='active'><a disabled=disabled>$i</a></li>";
           }else{
                $link_halaman .= "<li><a href=mint-galeri-$i>$i</a></li>";
           }
                $link_halaman .= "";
        }
            return $link_halaman;
    }
}

class pagingShowGaleri{
    function cariPosisi($batas){
       if(empty($_GET['hal'])){
            $posisi=0;
            $_GET['hal']=1;
       }else{
            $posisi=($_GET['hal']-1)*$batas;
       }
       return $posisi;
     }
     function jumlahHalaman($jmldata, $batas){
        $jmlhalaman = ceil($jmldata/$batas);
        return $jmlhalaman;
     }
     function navHalaman($halaman_aktif, $jmlhalaman){
        $link_halaman="";
    
        for($i=1; $i<=$jmlhalaman; $i++){
           if($i == $halaman_aktif){
                $link_halaman .= "<li class='active'><a disabled=disabled>$i</a></li>";
           }else{
                $link_halaman .= "<li><a href=galeri-$i>$i</a></li>";
           }
                $link_halaman .= "";
        }
            return $link_halaman;
    }
}

class pagingShowLokasi{
    function cariPosisi($batas){
       if(empty($_GET['hal'])){
            $posisi=0;
            $_GET['hal']=1;
       }else{
            $posisi=($_GET['hal']-1)*$batas;
       }
       return $posisi;
     }
     function jumlahHalaman($jmldata, $batas){
        $jmlhalaman = ceil($jmldata/$batas);
        return $jmlhalaman;
     }
     function navHalaman($halaman_aktif, $jmlhalaman){
        $link_halaman="";
    
        for($i=1; $i<=$jmlhalaman; $i++){
           if($i == $halaman_aktif){
                $link_halaman .= "<li class='active'><a disabled=disabled>$i</a></li>";
           }else{
                $link_halaman .= "<li><a href=lokasi-$i>$i</a></li>";
           }
                $link_halaman .= "";
        }
            return $link_halaman;
    }
}

class pagingTesti{
    function cariPosisi($batas){
       if(empty($_GET['hal'])){
            $posisi=0;
            $_GET['hal']=1;
       }else{
            $posisi=($_GET['hal']-1)*$batas;
       }
       return $posisi;
     }
     function jumlahHalaman($jmldata, $batas){
        $jmlhalaman = ceil($jmldata/$batas);
        return $jmlhalaman;
     }
     function navHalaman($halaman_aktif, $jmlhalaman){
        $link_halaman="";
    
        for($i=1; $i<=$jmlhalaman; $i++){
           if($i == $halaman_aktif){
                $link_halaman .= "<li class='active'><a disabled=disabled>$i</a></li>";
           }else{
                $link_halaman .= "<li><a href=mint-testi-$i>$i</a></li>";
           }
                $link_halaman .= "";
        }
            return $link_halaman;
    }
}

class pagingTestiShow{
    function cariPosisi($batas){
       if(empty($_GET['hal'])){
            $posisi=0;
            $_GET['hal']=1;
       }else{
            $posisi=($_GET['hal']-1)*$batas;
       }
       return $posisi;
     }
     function jumlahHalaman($jmldata, $batas){
        $jmlhalaman = ceil($jmldata/$batas);
        return $jmlhalaman;
     }
     function navHalaman($halaman_aktif, $jmlhalaman){
        $link_halaman="";
    
        for($i=1; $i<=$jmlhalaman; $i++){
           if($i == $halaman_aktif){
                $link_halaman .= "<li class='active'><a disabled=disabled>$i</a></li>";
           }else{
                $link_halaman .= "<li><a href=testi-$i>$i</a></li>";
           }
                $link_halaman .= "";
        }
            return $link_halaman;
    }
}

class pagingPaket{
    function cariPosisi($batas){
       if(empty($_GET['hal'])){
            $posisi=0;
            $_GET['hal']=1;
       }else{
            $posisi=($_GET['hal']-1)*$batas;
       }
       return $posisi;
     }
     function jumlahHalaman($jmldata, $batas){
        $jmlhalaman = ceil($jmldata/$batas);
        return $jmlhalaman;
     }
     function navHalaman($halaman_aktif, $jmlhalaman){
        $link_halaman="";
    
        for($i=1; $i<=$jmlhalaman; $i++){
           if($i == $halaman_aktif){
                $link_halaman .= "<li class='active'><a disabled=disabled>$i</a></li>";
           }else{
                $link_halaman .= "<li><a href=mint-lokasi-$i>$i</a></li>";
           }
                $link_halaman .= "";
        }
            return $link_halaman;
    }
}
?>