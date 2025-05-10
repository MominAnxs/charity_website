<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DonationFormController extends CI_Controller {
<<<<<<< HEAD

    public $DonationFormModel;

    public function __construct() {
        parent::__construct();
        $this->load->model('DonationFormModel'); // Make sure to load the model
    }

    public function submitDonation() {
        if ($this->input->is_ajax_request()) {
    
            // Check if it's a donation form or not
            $form_type = $this->input->post('form_type');  // 'donation' or 'registration'
    
            // Common fields
            $donation_data = array(
                'first_name'  => $this->input->post('first_name'),
                'last_name'   => $this->input->post('last_name'),
                'email'       => $this->input->post('email'),
                'phone'       => $this->input->post('phone'),
                'gender'      => $this->input->post('gender'),
                'password'    => $this->input->post('password'),
                'form_type'   => ($form_type === 'registration') ? 'registration' : 'donation',
                'added_on'    => date('d-m-Y'),
            );
    
            // If it's a donation form, add extra donation-related fields
            if ($form_type === 'donation') {
                $donation_data['donation_amount'] = $this->input->post('donation_amount');
                $donation_data['card_number']     = $this->input->post('card_number');
                $donation_data['exp_date']        = $this->input->post('exp_date');
                $donation_data['cvv_number']      = $this->input->post('cvv_number');
                $donation_data['ch_name']         = $this->input->post('ch_name');
                $anonymous = $this->input->post('anonymous');
                $donation_data['status'] = ($anonymous == 1) ? 1 : 0;
            }
    
            // Insert into DB
            $result = $this->DonationFormModel->insert_donation($donation_data);
    
            // Send proper JSON response
            $this->output
                 ->set_content_type('application/json')
                 ->set_output(json_encode([
                     'status' => $result ? 'success' : 'error',
                     'message' => $result 
                         ? ($form_type === 'donation' 
                             ? 'Donation submitted successfully!' 
                             : 'Registration submitted successfully!')
                         : 'There was an error submitting your form.'
                 ]));
            return;
        } else {
            show_404();
        }
    }
    
    
}
?>
=======
    
    public function __construct() {
        parent::__construct();
        // Load necessary models
        $this->load->model('DonationFormModel');
    }

    public function submitDonation() {
        // $data = array(
        //     'first_name' => $this->input->post('first_name'),
        //     'last_name' => $this->input->post('last_name'),
        //     'email' => $this->input->post('email'),
        //     'phone' => $this->input->post('phone'),
        //     'address' => $this->input->post('address'),
        //     'amount' => $this->input->post('amount'),
        //     'payment_method' => $this->input->post('payment_method'),
        //     'donation_date' => date('Y-m-d H:i:s')
        // );

        print_r ($this->input->post);

        $result = $this->DonationFormModel->saveDonation($data);
        
        if ($result) {
            $response = array('status' => 'success', 'message' => 'Donation submitted successfully');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to submit donation');
        }
        
        echo json_encode($response);
    }
}
>>>>>>> 3504d309ecaacbf31f05d21dc1c6c07a17258f75
