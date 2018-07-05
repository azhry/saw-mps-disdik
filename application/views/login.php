
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
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url( 'assets' ) ?>/assets/images/favicon.png">
    <title>Sistem MPS Disdik</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url( 'assets' ) ?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url( 'assets' ) ?>/monster-lite/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?= base_url( 'assets' ) ?>/monster-lite/css/colors/blue.css" id="theme" rel="stylesheet">
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
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register">        
            <div class="login-box card">
            <div class="card-body container">
                <?= form_open( 'login', [ 'class' => 'form-horizontal form-material', 'id' => 'loginform' ] ) ?>
                    <h3 class="box-title m-b-20">Sign In</h3>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" name="nip" placeholder="NIP/NIS"> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="password" required="" placeholder="Password"> </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit" name="login" value="Log In">Log In</button>
                        </div>
                    </div>
                <?= form_close() ?>
            </div>
          </div>
        </div>
        
    </section>
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

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5aa544ed4b401e45400d9d65/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>