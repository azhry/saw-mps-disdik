<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url( 'assets' ) ?>/assets/images/kemdik.png">
    <title>Dinas Pendidikan Kota Jambi</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url( 'assets' ) ?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url( 'assets' ) ?>/monster-lite/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?= base_url( 'assets' ) ?>/monster-lite/css/colors/blue.css" id="theme" rel="stylesheet">

    <link href="<?= base_url( 'assets') ?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
   
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
            <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="login-register">        
            <div class="login-box card">
            <div class="card-body container">
                <div class="text-center login-logo">
                 <div class="container">
                    <p id="profile-name" class="profile-name-card"></p>
                    
                    <img src="<?php echo base_url ();?>assets/assets/images/gogo.png" width=100" height="70" >
                    <?= form_open( 'login', [ 'class' => 'form-horizontal form-material', 'id' => 'loginform' ] ) ?>
                    <br>
                    <h4 class="text-center">Dinas Pendidikan Kota Jambi</h4>
                    <h2 class="text-center login-title">Sign In</h2>
                    <br>
                    <div class="account-wall">
                    <div class="form-signin">
                        <div class="card">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" name="nip" placeholder="NIP/NIS" required autofocus> 
                        </div>

                    </div>
                    
                    
                    
                        <div class="card">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="password" required="" placeholder="Password"> 
                        </div>
                    </div>
                    </div>
                    <!--</div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">-->
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit" name="login" value="Log In">Log In</button>
                        </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
                </div>
                <?= form_close() ?>
            </div>
          </div>
      </div>
        
        
  
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url( 'assets' ) ?>/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <!-- <script src="<?= base_url( 'assets' ) ?>/assets/plugins/bootstrap/js/popper.min.js"></script> -->
    <script src="<?= base_url( 'assets' ) ?>/assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="<?= base_url( 'assets' ) ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url( 'assets' ) ?>/monster-lite/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url( 'assets' ) ?>/monster-lite/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url( 'assets' ) ?>/monster-lite/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?= base_url( 'assets' ) ?>/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url( 'assets' ) ?>/monster-lite/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?= base_url( 'assets' ) ?>/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

   
</body>

</html>