<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

   
    // Insert a new feedback record
   public function insert_feedback($phone_data) {
   return $this->db->insert('feedback', $phone_data);
   
   
}


// Update the existing feedback record based on phone number
public function update_feedback($phone, $data = array()) {
        $this->db->where('phone', $phone);
        return $this->db->update('feedback', $data);
    }


        public function get_last_phone_number() {
        // Fetch the last phone number from the 'users' table
        $this->db->select('phone'); // Adjust the column name as needed
        $this->db->from('feedback'); // Adjust the table name as needed
        $this->db->order_by('id', 'DESC'); // Assuming 'id' is the primary key
        $this->db->limit(1); // Limit to 1 record
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row()->phone; // Return the last phone number
        }
        return null; // Return null if no phone numbers found
    }

 
   // Method to check if a phone number already exists in the database
    public function phone_exists($phone) {
        $this->db->select('id');
        $this->db->where('phone', $phone);
        $query = $this->db->get('feedback');
        return $query->num_rows() > 0;
    }


}


    

    
    


    




