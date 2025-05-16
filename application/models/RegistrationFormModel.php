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

}