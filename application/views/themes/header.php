<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>images/favicon.png">
    <title>Wockhardt Hospital Admin Dashboard</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url(); ?>css/sidebar-nav.min.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?php echo base_url(); ?>css/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo base_url(); ?>css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>css/style.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>js/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />


    <!-- color CSS -->
    <link href="<?php echo base_url(); ?>css/colors/megna.css" id="theme" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>js/popmodal/popModal.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>js/confirm/jquery-confirm.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    -->

</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="<?php echo site_url(); ?>/users/user/dashboard"><b>
                            <img src="<?php echo base_url(); ?>images/eliteadmin-logo.png" alt="home" /></b>
                        <span class="hidden-xs"><strong><?php echo HOSPITAL_NAME ; ?></strong></span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>

                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">
                             <b class="dropdown-toggle profile-pic">
                            <?php  echo $this->session->userdata('user_logged_name'); ?>
                            </b> 
                        </a> 
                   
                            <li>
                                <a href="<?php echo site_url(); ?>/users/user/logout">
                                    <i class="fa fa-power-off"></i>&nbsp; Logout</a>
                            </li>
                    </li> 
                   
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
                    </li>

                    <li class="nav-small-cap m-t-10">--- Main Menu </li>
                    <li> 
                        <a href="<?php echo site_url();?>/users/user/dashboard" class="waves-effect">
                            <i class="ti-dashboard p-r-10"></i> 
                            <span class="hide-menu">Dashboard</span>
                        </a> 
                    </li>
                    <!--
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-envelope p-r-10"></i> 
                            <span class="hide-menu"> Mailbox <span class="fa arrow"></span>
                                <span class="label label-rouded label-danger pull-right">6</span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="inbox.html">Inbox</a></li>
                            <li> <a href="inbox-detail.html">Inbox detail</a></li>
                            <li> <a href="compose.html">Compose mail</a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap m-t-10">--- Professional</li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="ti-calendar p-r-10"></i> <span class="hide-menu"> Appointment <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="doctor-schedule.html">Doctor Schedule</a> </li>
                            <li> <a href="book-appointment.html">Book Appointment</a> </li>
                        </ul>
                    </li>
                    -->
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-md p-r-10"></i> <span class="hide-menu"> Doctors <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo  site_url("doctors/doctor/viewAllDoctors"); ?>">All Doctors</a> </li>
                            <li><a href="<?php echo  site_url("doctors/doctor/addDoctor"); ?>">Add Doctor</a> </li>
                           
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-people p-r-10"></i> <span class="hide-menu"> Patients <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?php echo  site_url("patients/patient/viewAllPatients"); ?>">All Patients</a> </li>
                            <li> <a href="<?php echo  site_url("patients/patient/addPatient"); ?>">Add Patient</a> </li>
                            
                        </ul>
                    </li>
                    <!--
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-chart p-r-10"></i> <span class="hide-menu"> Reports <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="payment-report.html">Payment Report</a></li>
                            <li> <a href="income-report.html">Income Report</a></li>
                            <li> <a href="sales-report.html">Sales Report</a></li>
                        </ul>
                    </li>
                    -->
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-inr p-r-10"></i> <span class="hide-menu"> Payments <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?php echo  site_url("payments/payment/viewAllPayments"); ?>">Payments</a></li>
                            <li> <a href="<?php echo  site_url("payments/payment/addPayment"); ?>">Add Payment</a></li>
                            <li> <a href="<?php echo  site_url("payments/payment/viewInvoice"); ?>">Patient Invoice</a></li>
                        </ul>
                    </li>
                    
                   
                    <li><a href="<?php echo site_url(); ?>/users/user/logout" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>

                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->
		
        <!-- Page Content Begins -->
        <div id="page-wrapper">
		
