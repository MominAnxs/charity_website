<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistrationFormController extends CI_Controller {
    public $RegistrationFormModel;
    public $upload;
    
    public function __construct() {
        parent::__construct();
        // Load any required models here
        $this->load->model('RegistrationFormModel');
        $this->load->library('upload');
    }
    
    public function index() {
        $this->load->view('registration-form');
    }
    
    public function submitRegistration() {
        // Upload and store file names
        $uploaded_files = [];
        
        // Configure upload settings
        $config['upload_path'] = FCPATH . 'uploaded_docs/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
        $config['max_size'] = 2048; // 2MB
        
        foreach (['passport_photo', 'aadhaar_pan'] as $doc_img) {
            $this->upload->initialize($config);
            
            if ($this->upload->do_upload($doc_img)) {
                $data = $this->upload->data();
                $uploaded_files[$doc_img] = $data['file_name'];
            } else {
                $uploaded_files[$doc_img] = ''; // Or handle error as per your logic
                // Optionally log the error
                // $error = $this->upload->display_errors();
                // log_message('error', 'File upload failed: ' . $error);
            }
        }
        
        // Now prepare the data
        $registration_data = array(
            'vol_id'          => mt_rand(100000, 999999),
            'first_name'      => $this->input->post('first_name'),
            'last_name'       => $this->input->post('last_name'),
            'email'           => $this->input->post('email'),
            'phone'           => $this->input->post('phone'),
            'gender'          => $this->input->post('gender'),
            'password'        => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'dob'             => $this->input->post('dob'),
            'address'         => $this->input->post('address'),
            'exp'             => $this->input->post('exp'),
            'added_on'        => date('d-m-Y'),
            'availibility'    => $this->input->post('availability'),
            'photo'  => isset($uploaded_files['passport_photo']) ? $uploaded_files['passport_photo'] : '',
            'aadhaar_pan'      => isset($uploaded_files['aadhaar_pan']) ? $uploaded_files['aadhaar_pan'] : '',
        );
        
        // Insert into database
        $success = $this->RegistrationFormModel->insert_registration($registration_data);
        
        // Return JSON response for AJAX
        if ($success) {
            echo json_encode(['status' => 'success', 'message' => 'Registration successful!']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Registration failed.']);
        }
    }
}