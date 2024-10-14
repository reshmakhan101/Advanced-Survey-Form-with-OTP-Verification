<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Feedback_model');
        $this->load->library('form_validation');
         $this->load->library('session');
       
    }

   public function index() {

        $data['last_phone_number'] = $this->Feedback_model->get_last_phone_number(); // Fetch last phone number


        // Load the feedback form view with the phone number data
        $this->load->view('feedback_form', $data);
    }



    public function success() {
    $this->load->view('success'); // Load the success view to display a message
}

public function submit_phone() {


    $phone = $this->input->post('phone_number');

    // Check if the phone number already exists
    if ($this->Feedback_model->phone_exists($phone)) {
        // Phone number exists, retrieve the record
        $feedback = $this->Feedback_model->get_feedback_by_phone($phone);
        $this->session->set_userdata('feedback_id', $feedback->id);
        // Redirect or respond with success
        echo json_encode(['status' => 'success', 'id' => $feedback->id]);
    } else {
        // Insert new phone number
        $phone_data = array(
            'phone' => $phone,
        );
        $this->Feedback_model->insert_feedback($phone_data);
        $this->session->set_userdata('feedback_id', $this->db->insert_id()); // Store the ID of the new record
        // Respond with success
        echo json_encode(['status' => 'success', 'id' => $this->db->insert_id()]);
    }
}


    public function submit() {
        
        // Form validation rules
        $this->form_validation->set_rules('name', 'Name', 'required');
       
        $this->form_validation->set_rules('age', 'Age', 'required');
        
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('flat_no', 'Flat No', 'required|integer');
        $this->form_validation->set_rules('building', 'Building', 'required');
        $this->form_validation->set_rules('recommend', 'Recommendation', 'required|integer|greater_than_equal_to[0]|less_than_equal_to[10]');
        $this->form_validation->set_rules('internet_issue', 'Internet Issue', 'required');
        $this->form_validation->set_rules('prompt_action_rating', 'Prompt Action Rating', 'required');
        $this->form_validation->set_rules('guidance_rating', 'Guidance Rating', 'required');
        $this->form_validation->set_rules('home_visit_rating', 'Home Visit Rating', 'required');
        $this->form_validation->set_rules('timely_resolution_rating', 'Timely Resolution Rating', 'required');
        $this->form_validation->set_rules('handling_rating', 'Handling Rating', 'required');
        $this->form_validation->set_rules('valued_rating', 'Valued Service', 'required');

        $this->form_validation->set_rules('courteous_rating', 'Courteous Rating', 'required');
        $this->form_validation->set_rules('available_rating', 'Available Rating', 'required');
        $this->form_validation->set_rules('knowledge_rating', 'Knowledge Rating', 'required');
        $this->form_validation->set_rules('query_resolution_rating', 'Query Resolution Rating', 'required');
        $this->form_validation->set_rules('promises_fulfilled_rating', 'Promises Fulfilled Rating', 'required');
        $this->form_validation->set_rules('continue_service', 'Continue Service', 'required');
         $this->form_validation->set_rules('improvement', 'Improvement', 'required');

  
         if ($this->form_validation->run() == FALSE) {
             // On validation failure, fetch the phone number from the session
            $data['phone'] = $this->session->userdata('phone'); 
            $this->load->view('feedback_form', $data); 
        } else {
            // Prepare data for insertion
        //echo "123456"; exit;

            $phone = $this->input->post('phone_no');

            $phn_exist = $this->Feedback_model->phone_exists($phone);

            // echo $this ->db->last_query();

            // echo $phn_exist;

            //  exit;
            if($phn_exist == 1)
            {

                $data = [
                
                'name' => $this->input->post('name'),
                'phone' => $phone,
                'age' => $this->input->post('age'),
                'gender' => $this->input->post('gender'),
                'flat_no' => $this->input->post('flat_no'),
                'building' => $this->input->post('building'),
                'recommend' => $this->input->post('recommend'),
                'reason' => $this->input->post('reason'),
                'internet_issue' => $this->input->post('internet_issue'),
                'issue' => $this->input->post('issue'),
                'raised_complaint' => $this->input->post('raised_complaint'),
                'service_rating' => $this->input->post('service_rating'),
                'service_reason' => $this->input->post('service_reason'),
                'prompt_action_rating' => $this->input->post('prompt_action_rating'),
                'guidance_rating' => $this->input->post('guidance_rating'),
                'home_visit_rating' => $this->input->post('home_visit_rating'),
                'timely_resolution_rating' => $this->input->post('timely_resolution_rating'),
                'handling_rating' => $this->input->post('handling_rating'),
                'valued_rating' => $this->input->post('valued_rating'),
                'courteous_rating' => $this->input->post('courteous_rating'), 
                'available_rating' => $this->input->post('available_rating'), 
                'knowledge_rating' => $this->input->post('knowledge_rating'),
                'query_resolution_rating' => $this->input->post('query_resolution_rating'),
                'promises_fulfilled_rating' => $this->input->post('promises_fulfilled_rating'),
                'continue_service' => $this->input->post('continue_service'),
                'exit_reason' => $this->input->post('exit_reason'),
                'improvement' => $this->input->post('improvement'),
            
            ];

            //echo "<pre>";print_r($data);exit;
              
            // Insert into database
            $this->Feedback_model->update_feedback($phone, $data);

           // echo $this->db->last_query();
            redirect('feedback/success'); // Redirect after successful submission
            }
           
           
            
   
              
        
    }
 }
}



