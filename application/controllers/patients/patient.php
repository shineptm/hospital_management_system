<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Patient extends CI_Controller {
	
	
	 public function __construct() {
		 
		parent::__construct();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->library("pagination");
			$this->load->helper('file'); 
			$this->load->database();
                        $this->load->model('patient_model'); 
			
			
        }

        function addPatient(){
           // $data['dept_array'] = $this->get_allDepartments();
          //  echo '<pre>'; print_r($data); echo '</pre>';
           // $this->load->view('patients/add_patient_view' , $data);
            $this->load->view('patients/add_patient_view');
        }
        
        function savePatient(){
            
              if ($this->input->post('patient_name')) {
                $this->form_validation->set_rules('patient_name', 'Name', 'required');
		$this->form_validation->set_rules('patient_addr', 'Address','required');
                $this->form_validation->set_rules('patient_bdate', 'Date of Birth','required');
                $this->form_validation->set_rules('patient_gender', 'Gender','required');
                $this->form_validation->set_rules('patient_type', 'Patient Type','required');
                $this->form_validation->set_rules('patient_prof', 'Patient Profile','required');
                
              
                 if($this->form_validation->run() == FALSE){
                     $this->session->set_flashdata('response',"Please enter required fields");
                      redirect('patients/patient/addPatient', 'refresh');
                }else{
                   $result = $this->patient_model->save_patient_info() ;

                    if($result){
                        $this->session->set_flashdata('response',"Patient details added successfully");
                        redirect('patients/patient/viewAllPatients', 'refresh'); 
                    }
                }
                
              
              }
        
        }
        
        function viewAllPatients(){
            $data['patients_array'] = $this->patient_model->getAllPatients();
            //echo '<pre>'; print_r($data); echo '</pre>';
             $this->load->view('patients/patients_view', $data);
            //$this->load->view('patients/patients_view');
        }
        
        
        function editPatient(){
          
            $patient_id = $this->uri->segment(4);
            $data['patient_details'] = $this->patient_model->set_patient_info($patient_id);
            
            $this->load->view('patients/edit_patient_view' , $data );
           
          

        }
        
         function updatePatient(){
            
              $result = $this->patient_model->update_patient_info() ;
              if($result){
                  $this->session->set_flashdata('response',"Patient updated successfully");
                  redirect('patients/patient/viewAllPatients', 'refresh'); 
              }

         }
         
         function deletePatient(){
              $patient_id = $this->uri->segment(4);
              $result = $this->patient_model->delete_patient_info($patient_id) ;
              
              if($result){
                  $this->session->set_flashdata('response',"Patient deleted successfully");
                  redirect('patients/patient/viewAllPatients', 'refresh'); 
              }
             
         }
  
       

	
}