<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment_model extends CI_Model {

	 public function __construct(){
        parent::__construct();
    }
	

    
        
         
    function getAllPayments(){

       $this->db->select("pay.payment_id, pay.payment_invoice_no as invoice_no, pat.patient_name, doc.doc_name,"
               . "pay.payment_invoice_date as invoice_date, pay.payment_invoice_due_date as invoice_due_date,"
               . "pay.payment_total_amount as total_amount");
       $this->db->from("shine_hospital_payment pay");
       $this->db->join("shine_hospital_doctor doc", "doc.doctor_id = pay.pay_doctor_id","INNER");
       $this->db->join("shine_hospital_patient pat", "pat.patient_id = pay.pay_patient_id","INNER");



       $query = $this->db->get();

       return $query->result_array();

    }


            
    function save_payment_info(){
        
        $data['payment_invoice_no']         = $this->input->post('invoiceno');
        $currDate =  date('Y-m-d'); 
        $data['payment_invoice_date']       = $currDate;		
        $data['payment_invoice_due_date']   = date('Y-m-d', strtotime(str_replace('-', '/', $this->input->post('payduedate'))));
        $data['pay_patient_id']             = $this->input->post('pname');
        $data['pay_doctor_id']              = $this->input->post('dname');
        $data['pay_consult_charges']        = $this->input->post('consult_chrg');
        $data['pay_pharmacy_charges']       = $this->input->post('pharmacy_chrg');
        $data['pay_lab_charges']            = $this->input->post('lab_chrg');
        $data['pay_xray_charges']           = $this->input->post('scan_chrg');
        $data['pay_room_charges']           = $this->input->post('proom_chrg');
        $data['pay_other_charges']          = $this->input->post('other_chrg');
        $data['payment_total_amount']       = $data['pay_consult_charges'] + $data['pay_pharmacy_charges'] 
                + $data['pay_lab_charges'] + $data['pay_xray_charges'] + $data['pay_room_charges'] + $data['pay_other_charges'];  
       
        $success = FALSE;
        
       //  echo '<pre>'; print_r($data); echo '</pre>';
       //  exit;
        
        if($this->db->insert('shine_hospital_payment',$data)){
               $success = TRUE;
            }
        
       
        return $success;
    }
    

    
    
    function select_doctor_info()
    {
        return $this->db->get('shine_hospital_doctor')->result_array();
    }
    
    function set_invoice_info($payment_id){
        $this->db->select("pay.payment_id, pay.payment_invoice_no as invoice_no, pat.patient_name,
        pat.patient_address, doc.doc_name, pay.payment_invoice_date as invoice_date, 
        pay.payment_invoice_due_date as invoice_due_date,pay.pay_consult_charges,
        pay.pay_pharmacy_charges, pay.pay_lab_charges, pay.pay_xray_charges, pay.pay_room_charges,
        pay.pay_other_charges, pay.payment_total_amount as total_amount");
        $this->db->from("shine_hospital_payment pay");
        $this->db->join("shine_hospital_doctor doc", "doc.doctor_id = pay.pay_doctor_id","INNER");
        $this->db->join("shine_hospital_patient pat", "pat.patient_id = pay.pay_patient_id","INNER");
        $this->db->where('pay.payment_id', $payment_id);
        $query = $this->db->get();   
        
       /* 
        select pay.payment_id, pay.payment_invoice_no as invoice_no, pat.patient_name, 
        pat.patient_address, doc.doc_name, pay.payment_invoice_date as invoice_date, 
        pay.payment_invoice_due_date as invoice_due_date,pay.pay_consult_charges,
        pay.pay_pharmacy_charges, pay.pay_lab_charges, pay.pay_xray_charges, pay.pay_room_charges,
        pay.pay_other_charges, pay.payment_total_amount as total_amount 
        from shine_hospital_payment pay 
        inner join shine_hospital_doctor doc on doc.doctor_id = pay.pay_doctor_id
        inner join shine_hospital_patient pat on pat.patient_id = pay.pay_patient_id
*/
        
        return $query->result_array();
        
    }
    
    
    function generateInvoiceNum(){
        
          $this->db->select("payment_id");
          $this->db->from("shine_hospital_payment");
          $query = $this->db->get();
          $num = $query->num_rows();
          $inv_num = "";
            if($num == 0){
                 $inv_num = "INV00001";               
            }elseif($num > 0){
               // $sort = "DESC";
               // $limit = 1;
               // $id = 0;
                //$this->db->select("CONCAT('INV', LPAD(payment_id + 1,5,0)) as invoice_num");
               // $this->db->from("shine_hospital_payment");
               // $this->db->order_by('payment_id', $sort);
               // $this->db->limit($limit,$id);
                
                $query = $this->db->query("select CONCAT('INV', LPAD(payment_id + 1, 5, 0)) as invoice_num 
                from shine_hospital_payment order by payment_id desc limit 0,1");
              //  echo $this->db->last_query();
                $inv_array = $query->result_array();
                $inv_num = $inv_array[0]['invoice_num'];
               //exit;
                //$inv_num = $this->db->get()->row()->invoice_num; 
                
            
            }
            
            return $inv_num;
        
    }
 
 
}
?>
