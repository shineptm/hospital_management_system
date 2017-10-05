<?php $this->load->view('themes/header'); ?>

            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Add Patient</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Hospital</a></li>
                            <li class="active">Add Patient</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">

                            <form action="<?php echo site_url(); ?>/patients/patient/savePatient" method="post" enctype="multipart/form-data" 
                                class="form-material form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-12" for="example-text">Name</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" id="patient_name" name="patient_name" class="form-control" placeholder="enter your name"> </div>
                                </div>
                                  <div class="form-group">
                                    <label class="col-md-12">Address</label>
                                    <div class="col-md-12">
                                        <textarea id="patient_addr" name="patient_addr" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-md-12" for="patient_bdate">Date of Birth</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" id="patient_bdate" name="patient_bdate" class="form-control mydatepicker" placeholder="enter your birth date"> </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-12">Gender</label>
                                    <div class="col-sm-12">
                                        <select name="patient_gender" class="form-control">
                                            <option>Select Gender</option>
                                            <option value="1">Male</option>
                                            <option value="0">Female</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-12">Patient Type</label>
                                    <div class="col-sm-12">
                                        <select name="patient_type" class="form-control">
                                            <option>Select Type</option>
                                            <option value="0">Out Patient</option>
                                            <option value="1">In Patient</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Profile Image</label>
                                    <div class="col-sm-12">
                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                            <input type="file" name="patient_image"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Disease information and conditions</label>
                                    <div class="col-md-12">
                                        <textarea id="patient_prof" name="patient_prof" class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                               
                                <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                                <button onClick="window.location.href='<?php echo site_url();?>/users/user/dashboard';return false;"  
                                        type="button" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
<?php $this->load->view('themes/footer'); ?>
 <script type="text/javascript">
      
    $(document).ready(function(){
        //$("#bdate").click(function(){
            $('#patient_bdate').datepicker();
            
       // });
        
    });
 
    </script>