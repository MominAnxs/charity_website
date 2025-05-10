<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DonationFormModel extends CI_Model {

    public function insert_donation($data) {
        // Insert the donation data into the database
        return $this->db->insert('registration_donation_form', $data);

    }
}