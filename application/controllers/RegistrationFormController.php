<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistrationFormController extends CI_Controller {
    public $RegistrationFormModel;
    public $DonationFormModel;
    public $upload;
    
    public function __construct() {
        parent::__construct();
        // Load any required models here
        $this->load->model('RegistrationFormModel');
        $this->load->model('DonationFormModel');
        $this->load->library('upload');
    }
    
    public function index() {
        $this->load->view('index');
    }
    
    public function submitVolunteerRegistration() {

        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
    
        // Check for existing email
        if ($this->RegistrationFormModel->volunteer_email_exists($email)) {
            echo json_encode([
                'status' => 'error',
                'field' => 'email',
                'message' => 'This email is already registered.'
            ]);
            return;
        }
    
        // Check for existing phone
        if ($this->RegistrationFormModel->volunteer_phone_exists($phone)) {
            echo json_encode([
                'status' => 'error',
                'field' => 'phone',
                'message' => 'This phone number is already registered.'
            ]);
            return;
        }

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
                $uploaded_files[$doc_img] = '';
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
            'photo'           => isset($uploaded_files['passport_photo']) ? $uploaded_files['passport_photo'] : '',
            'aadhaar_pan'     => isset($uploaded_files['aadhaar_pan']) ? $uploaded_files['aadhaar_pan'] : '',
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

    public function submitDonorRegistration() {
        if ($this->input->is_ajax_request()) {
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
    
            // 🔍 1. Check if email exists
            if ($this->DonationFormModel->email_exists($email)) {
                $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode([
                        'status' => 'error',
                        'field' => 'email',
                        'message' => 'This email is already registered.'
                    ]));
                return;
            }
    
            // 🔍 2. Check if phone exists
            if ($this->DonationFormModel->phone_exists($phone)) {
                $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode([
                        'status' => 'error',
                        'field' => 'phone',
                        'message' => 'This phone number is already registered.'
                    ]));
                return;
            }
    
            // ✅ 3. Proceed only if both email and phone are unique
            $donation_data = array(
                'donor_id'    => mt_rand(100000, 999999),
                'first_name'  => $this->input->post('first_name'),
                'last_name'   => $this->input->post('last_name'),
                'email'       => $email,
                'phone'       => $phone,
                'password'    => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'gender'      => $this->input->post('gender'),
                'form_type'   => 'registration',
                'added_on'    => date('d-m-Y'),
            );
    
            $result = $this->DonationFormModel->update_donor_if_null($email, $phone, $donation_data);
    
            if ($result) {
                $this->session->set_userdata([
                    'donor_logged_in' => true,
                    'donor_id'        => $donation_data['donor_id'],
                    'donor_email'     => $donation_data['email']
                ]);
    
                $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode([
                        'status' => 'success',
                        'message' => 'Donor registered successfully.'
                    ]));
                return;
            } else {
                $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode([
                        'status' => 'error',
                        'message' => 'Database error. Could not save data.'
                    ]));
                return;
            }
        } else {
            show_404();
        }
    }    
}