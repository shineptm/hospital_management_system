<?php $this->load->view('themes/header'); ?>
        <!-- Page Content -->
     
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Doctors</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">Hospital</a></li>
                            <li class="active">Doctors</li>
                        </ol>
                    </div>
                            <?php $msg = $this->session->flashdata('response');  
                            if(isset($msg) && !empty($msg)) {
                            ?>
                            <div class="text-primary m-l-5">
                                <?php echo $msg; ?>
                            </div>
                            <?php } ?>
                </div>
                <!-- .row -->
               
                <div class="row">
                    <!-- .col -->
                     <?php 
                      if(isset($doctors_array) && !empty($doctors_array)) {
                            foreach($doctors_array as $doctors) { 
                         
                         ?>
                    <div class="col-md-4 col-sm-4">
                        <div class="white-box">
                            <div class="row">
                                <span class="hintModal">
                                    <div id="profile" class="col-md-4 col-sm-4 text-center">
                                <img alt="IMAGE" src="<?php echo base_url();?>uploads/doctor_image/<?php echo $doctors['doc_image']; ?>" alt="user" 
                                    class="img-circle img-responsive">
                                    </div>
                                    <div class="hintModal_container">
                                    <?php echo $doctors['doc_profile']; ?> 
                                    </div> 
                                </span>

                                <div class="col-md-8 col-sm-8">
                                    <h3 class="box-title m-b-0">
                                        <?php echo $doctors['doc_name']; ?>
                                    </h3> 
                                    <small>
                                        <?php echo $doctors['dept_name']; ?>
                                    </small>
                                    <p> 
                                    <address>
                                        <?php echo $doctors['doc_address']; ?>
                                     <br/><br/>
                                    <abbr title="Phone">Ph: </abbr>
                                        <?php echo $doctors['doc_phone']; ?>
                                    </address> 
                                    </p>
                                </div>
                            </div>
                            <div class="box-title m-b-0" style="display:inline-block;float:right;">
                                <a style="color:#03a9f3" href="<?php echo site_url();?>/doctors/doctor/editDoctor/<?php echo $doctors['doctor_id']; ?>" >Edit</a>
                                &nbsp; | &nbsp;
                                <a style="color:#d9534f" href="<?php echo site_url();?>/doctors/doctor/deleteDoctor/<?php echo $doctors['doctor_id']; ?>">Delete</a>
                             </div>
                         </div>
                    </div>
                   <?php 
                        }
                    }else{ 
                    ?>
                     
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1">
                                     <h3 class="box-title">"No records found."</h3> 
                                </div>
                            </div>
                   
                    <?php 
                        }
                    ?>           
                </div>

                <!-- .right-sidebar -->
                
                <!-- /.right-sidebar -->
            </div>
<?php $this->load->view('themes/footer'); ?>