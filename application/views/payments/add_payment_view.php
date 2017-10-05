<?php $this->load->view('themes/header'); ?>
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Add Payment</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Hospital</a></li>
                            <li class="active">Add Payment</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Payment Information</h3>
                            <form action="<?php echo site_url(); ?>/payments/payment/savePayment" method="post" class="form-material form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-12" for="invoiceno">Invoice Number</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" id="invoiceno" name="invoiceno" value="<?php echo $invoice; ?>" class="form-control"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="payduedate">Payment Due Date</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" id="payduedate" name="payduedate" class="form-control mydatepicker">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="pname">Patient Name</span>
                                    </label>
                                    <div class="col-md-12">
                                    <select class="form-control" name="pname">
                                        <option value="0">-- Select --</option>
                                        <?php foreach($patient_array as $patients) { ?>
                                            <option value="<?php echo $patients['patient_id']; ?>"><?php echo $patients['patient_name']; ?></option>
                                        <?php } ?>
                                    </select>
                                     </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="dname">Doctor Name</span>
                                    </label>
                                    <div class="col-md-12">
                                    <select class="form-control" name="dname">
                                         <option value="0">-- Select --</option>
                                         <?php foreach($doctor_array as $doctors) { ?>
                                             <option value="<?php echo $doctors['doctor_id']; ?>"><?php echo $doctors['doc_name']; ?></option>
                                         <?php } ?>
                                     </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="consult_chrg">Consultation Charges</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" id="consult_chrg" name="consult_chrg" class="form-control"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="pharmacy_chrg">Pharmacy Charges</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" id="pharmacy_chrg" name="pharmacy_chrg" class="form-control"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="lab_chrg">Laboratory Charges</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" id="lab_chrg" name="lab_chrg" class="form-control"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="scan_chrg">X-Ray / ECG / Scan Charges</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" id="scan_chrg" name="scan_chrg" class="form-control"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="proom_chrg">Room Charges</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" id="proom_chrg" name="proom_chrg" class="form-control"> </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-md-12" for="other_chrg">Other Charges</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" id="other_chrg" name="other_chrg" class="form-control"> </div>
                                </div>
                               
                                <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                                <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- .right-sidebar -->

                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
<?php $this->load->view('themes/footer'); ?>
 <script type="text/javascript">
      
    $(document).ready(function(){
            $('#payduedate').datepicker();
			   
    });
 
    </script>