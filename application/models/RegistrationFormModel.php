<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistrationFormModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert_registration($data) {
        // Insert the donation data into the database
        return $this->db->insert('volunteer_registration', $data);

    }

    public function volunteer_email_exists($email) {
        return $this->db
                    ->where('email', $email)
                    ->get('volunteer_registration')
                    ->num_rows() > 0;
    }
    
    public function volunteer_phone_exists($phone) {
        return $this->db
                    ->where('phone', $phone)
                    ->get('volunteer_registration')
                    ->num_rows() > 0;
    }    

}