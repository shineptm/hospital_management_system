<?php $this->load->view('themes/header'); ?>
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Patients</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">Hospital</a></li>
                            <li class="active">Patients</li>
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
                <div class="row el-element-overlay">
                    <?php 
                    if(isset($patients_array) && !empty($patients_array)) {
                        
                        foreach($patients_array as $patients) { 
                        
                    ?>
                    <div class="col-md-4 col-sm-4">
                        <div class="white-box">
                            <div class="row">
                                <span class="hintModal">
                                    <div id="profile" class="col-md-4 col-sm-4 text-center">
                                <img alt="IMAGE" src="<?php echo base_url();?>uploads/patient_image/<?php echo $patients['patient_image']; ?>" alt="user" 
                                    class="img-circle img-responsive">
                                    </div>
                                    <div class="hintModal_container">
                                        <big>Disease information: </big><br>
                                    <?php echo $patients['patient_profile']; ?> 
                                    </div> 
                                </span>

                                <div class="col-md-8 col-sm-8">
                                    <h3 class="box-title m-b-0">
                                        <?php echo $patients['patient_name']; ?>
                                    </h3> 
                                    <small>
                                    <?php echo ($patients['patient_gender'] == "1") ? "Male" : "Female" ; ?>
                                    </small>
                                    </br>
                                    <small>Date of Birth:
                                        <?php echo  date("j F Y", strtotime($patients['patient_dob'])) ; ?>
                                        
                                    </small>
                                    </br>
                                    
                                    <p>
                                    <address><small>Address: </small>
                                        <?php echo $patients['patient_address']; ?>
                                         </address> 
                                    </p>
                                      
                                </div>
                            </div>
                            <div class="box-title m-b-0" style="display:inline-block;float:right;">
                                <a style="color:#03a9f3" href="<?php echo site_url();?>/patients/patient/editPatient/<?php echo $patients['patient_id']; ?>" >Edit</a>
                                &nbsp; | &nbsp;
                                <a style="color:#d9534f" href="<?php echo site_url();?>/patients/patient/deletePatient/<?php echo $patients['patient_id']; ?>">Delete</a>
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
                <!-- /.row -->
                <!-- .row -->
              
                <!-- /.row -->
                <!-- .row -->
              
                <!-- /.row -->
                <!-- .right-sidebar -->
             
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
<?php $this->load->view('themes/footer'); ?>  