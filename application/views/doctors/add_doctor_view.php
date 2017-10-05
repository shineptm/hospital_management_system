<?php $this->load->view('themes/header'); ?>

            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Add Doctor</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                         <ol class="breadcrumb">
                            <li><a href="index.html">Hospital</a></li>
                            <li class="active">Add Doctor</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Basic Information</h3>
                            <form class="form-material form-horizontal" 
                                  action="<?php echo site_url(); ?>/doctors/doctor/saveDoctor" method="post" enctype="multipart/form-data"> 
                                  
                                <div class="form-group">
                                    <label class="col-md-12" for="example-text">Name</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" id="doc_name" name="doc_name" class="form-control" placeholder="enter name"> </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-md-12">Address</label>
                                    <div class="col-md-12">
                                        <textarea id="doc_addr" name="doc_addr" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="example-text">Phone</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" id="doc_phone" name="doc_phone" class="form-control" placeholder="a valid phone number"> </div>
                                </div>
                                    <div class="form-group">
                                    <label class="col-md-12">Profile</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" id="doc_prof" name="doc_prof" rows="4"></textarea>
                                    </div>
                                </div>
                               <!--
                                <div class="form-group">
                                    <label class="col-md-12" for="bdate">Date of Birth</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" id="bdate" name="bdate" class="form-control datepicker"
                                               data-date-format="dd/mm/yyyy" placeholder="enter your birth date"> </div>
                                </div>
                               -->
                                <div class="form-group">
                                    <label class="col-sm-12">Department</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" name="doc_dept">
                                            <option>-- Select --</option>
                                            <?php foreach($dept_array as $dept) { ?>
                                                <option value="<?php echo $dept['department_id']; ?>"><?php echo $dept['dept_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Profile Image</label>
                                    <div class="col-sm-12">
                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> 
                                                <span class="fileinput-filename"></span></div> 
                                                <span class="input-group-addon btn btn-default btn-file"> 
                                                    <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                                <input type="file" name="doc_image" size="20"> </span> 
                                            <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                    </div>
                                </div>
                               
                               
                                <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                                <button onClick="window.location.href='<?php echo site_url();?>/users/user/dashboard';return false;"  
                                        type="button" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
                
                <!-- .right-sidebar -->
              
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
<?php $this->load->view('themes/footer'); ?>
       
