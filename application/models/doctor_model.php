<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Doctor_model extends CI_Model {

	 public function __construct(){
        parent::__construct();
    }
	
	/*
	 function DoctorModel(){
	  parent::Model();
	 }
	*/
    
         function getAllDepts(){
		 
	  $this->db->select("department_id,dept_name");
	  $this->db->from('shine_hospital_department');
	  $query = $this->db->get();
	  
	  return $query->result_array();
           
	 }
         
         function getAllDoctorNames(){
		 
	  $this->db->select("doctor_id,doc_name");
	  $this->db->from('shine_hospital_doctor');
	  $query = $this->db->get();
	  
	  return $query->result_array();
           
	 }
         
	 function getAllDoctors(){
		 
	    $this->db->select("doctor_id,doc_name,doc_address,doc_phone,doc_profile,dept_name,doc_image");
            $this->db->from("shine_hospital_doctor doc");
            $this->db->join("shine_hospital_department dept", "dept.department_id = doc.doc_department_id",'left');
            //$this->db->where('doc.doctor_id',$doc_id);
            //$this->db->group_by('doc.dept_id');
            $query = $this->db->get();
            
            return $query->result_array();
	  
	 }


            
    function save_doctor_info(){
        $data['doc_name'] 		= $this->input->post('doc_name');
        $data['doc_address'] 	= $this->input->post('doc_addr');
        $data['doc_phone']          = $this->input->post('doc_phone');
        $data['doc_profile'] 	= $this->input->post('doc_prof');
        $data['doc_department_id'] 	= $this->input->post('doc_dept');
        
        
        $success = FALSE;
        
        $this->db->insert('shine_hospital_doctor',$data);
        $doctor_id  =   $this->db->insert_id();
        
        if($doctor_id != ""){
                move_uploaded_file($_FILES["doc_image"]["tmp_name"], "uploads/doctor_image/" . $doctor_id . '.jpg');
                
                if($this->add_doctor_db_image($doctor_id)){
                    $success = TRUE;
                }
        }
       
        return $success;
    }
    
     function add_doctor_db_image($doctor_id){
        $this->db->where('doctor_id',$doctor_id);
        $data['doc_image'] = $doctor_id . '.jpg';
        
        if($this->db->update('shine_hospital_doctor',$data)){
            return TRUE;
        }
    }
    
    function edit_doctor_image($doctor_id){
        
          
        
    }
    
    
    function select_doctor_info()
    {
        return $this->db->get('shine_hospital_doctor')->result_array();
    }
    
    function set_doctor_info($doc_id){
        $this->db->select("doctor_id,doc_name,doc_address,doc_phone,doc_profile,doc_department_id,doc_image");
        $this->db->from("shine_hospital_doctor");
        $this->db->where('doctor_id', $doc_id);
        $query = $this->db->get();   
        
        return $query->result_array();
        
    }
    
    function update_doctor_info(){
        $data['doc_name'] 		= $this->input->post('doc_name');
        $data['doc_address'] 	= $this->input->post('doc_addr');
        $data['doc_phone']          = $this->input->post('doc_phone');
        $data['doc_profile'] 	= $this->input->post('doc_prof');
        $data['doc_department_id'] 	= $this->input->post('doc_dept');
        $doctor_id 	= $this->input->post('doc_id');
        
        
        //move_uploaded_file($_FILES["doc_image"]["tmp_name"], "uploads/doctor_image/" . $doctor_id . '.jpg');
        
            $imgFile = $_FILES['doc_image']['name'];
            $tmp_dir = $_FILES['doc_image']['tmp_name'];
            $imgSize = $_FILES['doc_image']['size'];

            if($imgFile){
                $upload_dir = 'uploads/doctor_image/'; // upload directory 
                $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
                $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
                $doctorPic = $doctor_id.".".$imgExt;
                
 
                
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
                $this->db->select("doc_image");
                $this->db->from("shine_hospital_doctor");
                $this->db->where('doctor_id', $doctor_id);
               
                $doctorPic = $this->db->get()->row()->doc_image; // get old image from DB
                
            } 

       
        $this->db->where('doctor_id',$doctor_id);
        if($this->db->update('shine_hospital_doctor',$data)){
            return TRUE;
        }else{
            return FALSE;
        }
        
        
    }
    
    function delete_doctor_info($doctor_id){
                
        if(NULL != $doctor_id && $doctor_id > 0 ){
            
            $upload_dir = 'uploads/doctor_image/';
            
            $this->db->select("doc_image");
            $this->db->from("shine_hospital_doctor");
            $this->db->where('doctor_id', $doctor_id);

            $doctorPic = $this->db->get()->row()->doc_image; // get old image from DB
           
           
            unlink($upload_dir.$doctorPic);
            $this->db->where('doctor_id',$doctor_id);
            //$this->db->delete('shine_hospital_doctor');
            
            if($this->db->delete('shine_hospital_doctor')){
                return TRUE;
            }else{
                return FALSE;
            }
        
        }
    }
 
 
}
?>