<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DonationFormController extends CI_Controller {
    
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