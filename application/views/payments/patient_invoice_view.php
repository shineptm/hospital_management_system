<?php $this->load->view('themes/header'); ?>
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Patient's Invoice</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                         <ol class="breadcrumb">
                            <li><a href="#">Hospital</a></li>
                            <li class="active">Patient's Invoice</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                 <?php if(isset($invoice_details) && !empty($invoice_details)) { ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3><b>INVOICE</b> <span class="pull-right"># <?php echo $invoice_details[0]['invoice_no']; ?></span></h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <div class="pull-left">
                                       <address>
                                        <h3> &nbsp;<b class="text-danger"><?php echo HOSPITAL_NAME ; ?></b></h3>
                                        <p class="text-muted m-l-5"> <?php echo HOSPITAL_ROAD ; ?><br/>
                                          <?php echo HOSPITAL_LOCATION ; ?> <br/>
                                          <?php echo HOSPITAL_CITY ; ?> <br/>
                                          <?php echo HOSPITAL_STATE ; ?></p>
                                        </address> 
                                    </div>
                                    
                                    <div class="pull-right text-right"> 
                                        <address>
                  <h3>To,</h3>
                  <h4 class="font-bold"><?php echo $invoice_details[0]['patient_name']; ?></h4>
                  <pre><?php echo $invoice_details[0]['patient_address']; ?></pre>
                  <p class="m-t-30"><b>Invoice Date :</b> <i class="fa fa-calendar"></i>
                     <?php 
                       $idate=date_create($invoice_details[0]['invoice_date']);
                       echo date_format($idate,"jS-M-Y");
                       
                     ?>
                  </p>
                  <p><b>Due Date :</b> <i class="fa fa-calendar"></i>
                     <?php 
                       $iduedate=date_create($invoice_details[0]['invoice_due_date']);
                       echo date_format($iduedate,"jS-M-Y");
                       
                     ?>
                  </p>
                  </address> </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="table-responsive m-t-40">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Item Name</th>
                                                    <th class="text-right">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>Consultation Charges</td>
                                                    <td class="text-right">
                                                        <?php echo $invoice_details[0]['pay_consult_charges']; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Pharmacy Charges</td>
                                                    <td class="text-right">
                                                        <?php echo $invoice_details[0]['pay_pharmacy_charges']; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Laboratory Charges</td>
                                                    <td class="text-right">
                                                        <?php echo $invoice_details[0]['pay_lab_charges']; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td>X-ray/ECG/SCAN Charges</td>
                                                    <td class="text-right">
                                                        <?php echo $invoice_details[0]['pay_xray_charges']; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td>Room Charges</td>
                                                    <td class="text-right">
                                                        <?php echo $invoice_details[0]['pay_room_charges']; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">5</td>
                                                    <td>Other Charges</td>
                                                    <td class="text-right">
                                                        <?php echo $invoice_details[0]['pay_other_charges']; ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="pull-right m-t-30 text-right">
                                        <p>Sub - Total amount: <?php echo $invoice_details[0]['total_amount']; ?></p>
                                        <?php 
                                        $amt = $invoice_details[0]['total_amount'];
                                        $total_amt = 0;
                                        if($amt > 0){
                                            $gst = 0.15 * $amt; 
                                            $total_amt = $amt + $gst;
                                        }
                                        ?>
                                        <p>GST (15%) : <?php echo $gst; ?> </p>
                                        <hr>
                                        <h3><b>Total :</b> Rs. <?php echo round($total_amt) ?></h3> </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="text-right">
                                        <button class="btn btn-danger" type="submit"> Proceed to payment </button>
                                        <button onClick="javascript:window.print();" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                 <?php } ?>
                <!-- .row -->
             
            </div>
            <!-- /.container-fluid -->
<?php $this->load->view('themes/footer'); ?>