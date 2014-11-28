<?php 
    session_start();
    if(isset($_SESSION['name'])){
        header("location:beranda");
    }
?>
<html>
     <head>
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" href="assets/css/lumen.bootstrap.css">
        <link rel="stylesheet" href="assets/css/font-awesome.css">

        <link rel="icon" href="assets/img/icon.png"> 
        <style>
            body{
                background: url(assets/img/symphony.png);
            }                
        </style>
     </head>
    <body>
        <div class="container">
            <div class="row">
               <div class="col-sm-4 col-sm-push-4 text-center">
                   <img src="assets/img/logo.png" alt="" style="margin-top:30px">   
               </div>
            </div>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-push-4 text-center">
                        <div class="panel panel-primary">
                            <div class="panel-heading"><div class="panel-title"><i class="fa fa-user"></i> Login</div></div>
                            <div class="panel-body">
                                <form action="doLogin" method="post">
                                    <div class="form-group">
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-child"></i></div>
                                          <input class="form-control" type="text" name="u" placeholder="Nama Pengguna">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                          <input class="form-control" type="password" name="p" placeholder="Kata Kunci">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary col-sm-12 col-xs-12"><i class="fa fa-success"></i> Login</button>
                                </form>
                            </div>
                            <div class="panel-footer">
                                <p>Silakan login untuk melanjutkan, atau kembali ke halaman <a href="beranda">awal.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <p class="col-sm-4 col-sm-push-4 text-center">&copy; CV Yanks Tours & Transport - 2014 : Powered by ID.</p>
        </div>
    </body>         
 </html>