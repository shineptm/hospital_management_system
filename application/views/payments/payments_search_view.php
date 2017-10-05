<?php $this->load->view('themes/header'); ?>

            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Payments</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">Hospital</a></li>
                            <li class="active">Payments</li>
                        </ol>
                    </div>
                    <?php $msg = $this->session->flashdata('response');  
                            if(isset($msg) && !empty($msg)) {
                            ?>
                            <div class="text-primary m-l-5">
                                <?php echo $msg; ?>
                            </div>
                            <?php } ?>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
               
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Hospital Payments Details</h3>
                            
                            <?php if(!isset($payment_array) && empty($payment_array)) { ?>
                             <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control"> 
                            <i class="fa fa-search"></i>
                            </form>
                            <?php } ?>
                            <hr>
                            
                            <?php if(isset($payment_array) && !empty($payment_array)) { ?>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Invoice No.</th>
                                            <th>Patient</th>
                                            <th>Doctor</th>
                                            <th>Invoice Date</th>
                                            <th>Invoice Due Date</th>
                                            <th>Total Amount</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($payment_array as $payments) { ?>
                                        <tr>
                                            <td><?php echo $payments['invoice_no']; ?></td>
                                            <td><?php echo $payments['patient_name']; ?></td>
                                            <td><?php echo $payments['doc_name']; ?></td>
                                            <td><?php 
                                            $idate=date_create($payments['invoice_date']);
                                            echo date_format($idate,"j-M-Y");
                                            ?></td>
                                            <td><?php 
                                            $iduedate=date_create($payments['invoice_due_date']);
                                            echo date_format($iduedate,"j-M-Y");
                                            ?></td>
                                            <td><?php
                                            echo number_format((float)$payments['total_amount'], 2, '.', '');
                                            ?></td>
                                            <td><a style="text-decoration: none;color:red;font-weight:bold"
                                                   href="<?php echo site_url()?>/payments/payment/viewInvoice/<?php echo $payments['payment_id']; ?>" target="_blank">View Invoice</a></td>
                                            <!--class="btn btn-danger m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light"-->
                                        </tr>
                                    <?php }  ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php } else { ?>
                             <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr align="center">
                                            <td>No records found.</td>
                                        </tr>
                                </table>
                             </div>
                             <?php }  ?>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
          
<?php $this->load->view('themes/footer'); ?>