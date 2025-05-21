<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_user_by_email($email) {
        return $this->db->where('email', $email)->get('registration_donation_form')->row();  // use your actual table
    }

    public function get_volunteer_by_email($email) {
        return $this->db->where('email', $email)->get('volunteer_registration')->row();  // use your actual table
    }
    
}