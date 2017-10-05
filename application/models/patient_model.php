<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Patient_model extends CI_Model {

	 public function __construct(){
        parent::__construct();
    }
	
         
    function getAllPatients(){

       $this->db->select("patient_id,patient_name,patient_address,"
               . "patient_dob,patient_gender,patient_profile,patient_image,patient_type");
       $this->db->from("shine_hospital_patient");
       //$this->db->where('doc.doctor_id',$doc_id);
       //$this->db->group_by('doc.dept_id');
       $query = $this->db->get();

       return $query->result_array();

    }
    
     function getAllPatientNames(){
		 
	  $this->db->select("patient_id,patient_name");
	  $this->db->from('shine_hospital_patient');
	  $query = $this->db->get();
	  
	  return $query->result_array();
           
    }


            
    function save_patient_info(){
        $data['patient_name']       = $this->input->post('patient_name');
        $data['patient_address']    = $this->input->post('patient_addr');
        $data['patient_dob']        = date('Y-m-d', strtotime(str_replace('-', '/', $this->input->post('patient_bdate'))));
        $data['patient_gender']     = $this->input->post('patient_gender');
        $data['patient_profile']    = $this->input->post('patient_prof');
        $data['patient_type']       = $this->input->post('patient_type');
        
        
        $success = FALSE;
        
        $this->db->insert('shine_hospital_patient',$data);
        $patient_id  =   $this->db->insert_id();
        
        if($patient_id != ""){
                move_uploaded_file($_FILES["patient_image"]["tmp_name"], "uploads/patient_image/" . $patient_id . '.jpg');
                
                if($this->add_patient_db_image($patient_id)){
                    $success = TRUE;
                }
        }
       
        return $success;
    }
    
     function add_patient_db_image($patient_id){
        $this->db->where('patient_id',$patient_id);
        $data['patient_image'] = $patient_id . '.jpg';
        
        if($this->db->update('shine_hospital_patient',$data)){
            return TRUE;
        }
    }
    
     
    
    function set_patient_info($patient_id){
        $this->db->select("patient_id,patient_name,patient_address,patient_dob,"
                . "patient_gender,patient_profile,patient_image,patient_type");
        $this->db->from("shine_hospital_patient");
        $this->db->where('patient_id', $patient_id);
        $query = $this->db->get();   
        
        return $query->result_array();
        
    }
    
    function update_patient_info(){
        $data['patient_name']       = $this->input->post('patient_name');
        $data['patient_address']    = $this->input->post('patient_addr');
        $data['patient_dob']        = date('Y-m-d', strtotime(str_replace('-', '/', $this->input->post('patient_bdate'))));
        $data['patient_gender']     = $this->input->post('patient_gender');
        $data['patient_profile']    = $this->input->post('patient_prof');
        $data['patient_type']       = $this->input->post('patient_type');
        $patient_id                 = $this->input->post('patient_id');
        
         
        //move_uploaded_file($_FILES["doc_image"]["tmp_name"], "uploads/doctor_image/" . $doctor_id . '.jpg');
        
            $imgFile = $_FILES['patient_image']['name'];
            $tmp_dir = $_FILES['patient_image']['tmp_name'];
            $imgSize = $_FILES['patient_image']['size'];

            if($imgFile){
                $upload_dir = 'uploads/patient_image/'; // upload directory 
                $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
                $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
                $patientPic = $patient_id.".".$imgExt;
                
 
                
                if(in_array($imgExt, $valid_extensions)){   
                    if($imgSize < 5000000){
                        unlink($upload_dir.$doctorPic);
                        move_uploaded_file($tmp_dir,$upload_dir.$doctorPic);
                    }else{
                        $errMSG = "Sorry, your file is too large it should be less then 5MB";
                    }
                }else{
                    $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";  
                } 
            }else{
                // if no image selected the old image remain as it is.
                $this->db->select("patient_image");
                $this->db->from("shine_hospital_patient");
                $this->db->where('patient_id', $patient_id);
              
                $patientPic = $this->db->get()->row()->patient_image; // get old image from DB
               
                
            } 

       
        $this->db->where('patient_id',$patient_id);
        
        if($this->db->update('shine_hospital_patient',$data)){
            return TRUE;
        }else{
            return FALSE;
        }
        
        
    }
    
    function delete_patient_info($patient_id){
                
        if(NULL != $patient_id && $patient_id > 0 ){
            
            $upload_dir = 'uploads/patient_image/';
            
            $this->db->select("patient_image");
            $this->db->from("shine_hospital_patient");
            $this->db->where('patient_id', $patient_id);

            $patientPic = $this->db->get()->row()->patient_image; // get old image from DB
           
           
            unlink($upload_dir.$patientPic);
            $this->db->where('patient_id',$patient_id);
     
            if($this->db->delete('shine_hospital_patient')){
                return TRUE;
            }else{
                return FALSE;
            }
        
        }
    }
 
 
}
?>