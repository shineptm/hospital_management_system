<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Elite Hospital Admin Template - Hospital admin dashboard web app kit</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/bootstrap-extension.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo base_url(); ?>css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>css/style.min.css" rel="stylesheet">
                              
    <!-- color CSS -->
    <link href="<?php echo base_url(); ?>css/colors/megna.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

	<!-- jQuery -->
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>js/tether.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>js/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url(); ?>js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>js/waves.js"></script>
    <!--Morris JavaScript -->
    <script src="<?php echo base_url(); ?>js/raphael-min.js"></script>
    <script src="<?php echo base_url(); ?>js/morris.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="<?php echo base_url(); ?>js/jquery.sparkline.min.js"></script>
    <!-- jQuery peity -->
    <script src="<?php echo base_url(); ?>js/jquery.peity.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.peity.init.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>js/custom.min.js"></script>
    <script src="<?php echo base_url(); ?>js/dashboard1.js"></script>
    <!--Style Switcher -->
    <script src="<?php echo base_url(); ?>js/jQuery.style.switcher.js"></script>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <section id="wrapper" class="login-register">
        <div class="login-box login-sidebar">
            <div class="white-box">
                <form method="post" class="form-horizontal form-material" id="loginform" 
                      action="<?php echo site_url(); ?>/users/user/addNewUser">
                    <a href="javascript:void(0)" class="text-center db">
                        <img src="<?php echo base_url(); ?>images/eliteadmin-logo-dark.png" alt="Home" />
                        <br/><img src="<?php echo base_url(); ?>images/eliteadmin-text-dark.png" alt="Home" /></a>
                    
                                      
                    <h3 class="box-title m-t-40 m-b-0">Register Now</h3><small>Create your account and enjoy</small>
                      <?php                      
                        $msg = $this->session->flashdata('response');
                        ?>
                     
                    <div class="form-group m-t-20">
                         <?php  if(isset($msg) && !empty($msg)) {  ?>
                          <div class="text-primary m-l-5">
                              <?php echo $msg; ?>
                          </div>
                    <?php }?>
                        <div class="col-xs-12">
                            <input type="hidden" name="adduser" value="yes">
                            <input class="form-control" name="uname" type="text" required="" placeholder="Name"> </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" name="uemail" type="text" required="" placeholder="Email"> </div>
                    </div>
                     <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" name="username" type="text" required="" placeholder="Username"> </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" name="upassword" type="password" required="" placeholder="Password"> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" name="uconfpassword" type="password" required="" placeholder="Confirm Password"> </div>
                    </div>

                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Already have an account? <a href="<?php echo site_url(); ?>/users/user/login" class="text-primary m-l-5"><b>Sign In</b></a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
   
</body>

</html>