<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends CI_Controller {
	
	
	 public function __construct() {
		 
		parent::__construct();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->library("pagination");
			$this->load->helper('file'); 
			$this->load->database();
                        $this->load->model('payment_model'); 
                        $this->load->model('patient_model'); 
                        $this->load->model('doctor_model'); 
			
        }

	
        function addPayment(){
           $data['patient_array'] = $this->get_allPatientNames();
           $data['doctor_array'] = $this->get_allDoctorNames();
           $data['invoice'] = $this->get_InvoiceNumber();
           
        // echo '<pre>'; print_r($data); echo '</pre>';
         // exit;
          //  $this->load->view('doctors/add_doctor_view' , $data);
            $this->load->view('payments/add_payment_view' , $data);
            
            

        }
        
        function savePayment(){
            
              if ($this->input->post('invoiceno')) {
                $this->form_validation->set_rules('payduedate', 'Payment Due Date ', 'required');
				$this->form_validation->set_rules('pname', 'Patient Name', 'required');
				$this->form_validation->set_rules('dname', 'Doctor Name', 'required');
				$this->form_validation->set_rules('consult_chrg', 'Consultation Charges', 'required');
				
                 if($this->form_validation->run() == FALSE){
                     $this->session->set_flashdata('response',"Please enter valid data");
                      redirect('users/user/register/', 'refresh');
                }else{
                   $result = $this->payment_model->save_payment_info() ;

                    if($result){
                        $this->session->set_flashdata('response',"Payment details added successfully");
                        redirect('payments/payment/viewAllPayments', 'refresh'); 
                      }
                }
                
              
              }
        
        }
        
        function viewAllPayments(){
            $data['payment_array'] = $this->payment_model->getAllPayments();
            //echo '<pre>'; print_r($data); echo '</pre>';
         
            $this->load->view('payments/payments_view', $data);

        }
        
        
        
        function viewInvoice(){
          
            $payment_id = $this->uri->segment(4);
            $data['invoice_details'] = $this->payment_model->set_invoice_info($payment_id);
            
            //$this->load->view('doctors/edit_doctor_view' , $data );
          
            
            $this->load->view('payments/patient_invoice_view', $data);

        }
        
        function searchInvoice(){
          
           // $payment_id = $this->uri->segment(4);
            $data['invoice_details'] = $this->payment_model->set_invoice_info($payment_id);
            
           $this->load->view('payments/payments_search_view');
          
            
           // $this->load->view('payments/patient_invoice_view', $data);

        }
        

  
       
    function get_allPatientNames() {
        return $this->patient_model->getAllPatientNames();
    }
    
    function get_allDoctorNames() {
          return $this->doctor_model->getAllDoctorNames();
    
    }
    
        function get_InvoiceNumber() {
          return $this->payment_model->generateInvoiceNum();
    
    }
    
    //SELECT payment_id, CONCAT( 'INV', LPAD(payment_id,7,'0') ) FROM shine_hospital_payment;
    


	
}
