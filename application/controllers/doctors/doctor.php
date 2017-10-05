<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Doctor extends CI_Controller {
	
	
	 public function __construct() {
		 
		parent::__construct();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->library("pagination");
			$this->load->helper('file'); 
			$this->load->database();
                        $this->load->model('doctor_model'); 
			
			
        }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 /*
	public function index(){
		$this->load->view('themes/header');
	}
          * 
	*/
        function addDoctor(){
            $data['dept_array'] = $this->get_allDepartments();
          //  echo '<pre>'; print_r($data); echo '</pre>';
            $this->load->view('doctors/add_doctor_view' , $data);
        
        }
        
        function saveDoctor(){
            
              if ($this->input->post('doc_name')) {
                $this->form_validation->set_rules('doc_name', 'Name', 'required');
		$this->form_validation->set_rules('doc_addr', 'Address','required');
                $this->form_validation->set_rules('doc_dept', 'Department','required');
              
                 if($this->form_validation->run() == FALSE){
                     $this->session->set_flashdata('response',"Please enter Name, Address and Department");
                      redirect('doctors/doctor/addDoctor', 'refresh');
                }else{
                   $result = $this->doctor_model->save_doctor_info() ;

                    if($result){
                        $this->session->set_flashdata('response',"Doctor details added successfully");
                        redirect('doctors/doctor/viewAllDoctors', 'refresh'); 
                      }
                }
                
              
              }
        
        }
        
        function viewAllDoctors(){
            $data['doctors_array'] = $this->doctor_model->getAllDoctors();
            //echo '<pre>'; print_r($data); echo '</pre>';
           
            $this->load->view('doctors/doctors_view', $data);

        }
        
     
        
        function editDoctor(){
          
            $doctor_id = $this->uri->segment(4);
            $data['doctor_details'] = $this->doctor_model->set_doctor_info($doctor_id);
            $data['dept_array'] = $this->get_allDepartments();
            
            $this->load->view('doctors/edit_doctor_view' , $data );

        }
        
         function updateDoctor(){
            
              $result = $this->doctor_model->update_doctor_info();
              if($result){
                  $this->session->set_flashdata('response',"Doctor updated successfully");
                  redirect('doctors/doctor/viewAllDoctors', 'refresh'); 
              }

            
            
         }
         
         function deleteDoctor(){
              $doctor_id = $this->uri->segment(4);
              $result = $this->doctor_model->delete_doctor_info($doctor_id) ;
              if($result){
                  $this->session->set_flashdata('response',"Doctor deleted successfully");
                  redirect('doctors/doctor/viewAllDoctors', 'refresh'); 
              }
             
         }
  
       
  function get_allDepartments() {
     // $this->load->model('Doctor_model');
      return $this->doctor_model->getAllDepts();
    
    }
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */