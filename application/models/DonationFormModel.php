<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DonationFormModel extends CI_Model {

    // Insert donation data into database
    public function insert_donation($data) {
        return $this->db->insert('donor_registration_form', $data);
    }

    // Get all donations
    public function get_all_donations() {
        $query = $this->db->get('donor_registration_form');
        return $query->result();
    }

    // // Get donation by ID
    // public function get_donation_by_id($id) {
    //     $query = $this->db->get_where('donor_registration_form', array('id' => $id));
    //     return $query->row();
    // }

    // // Update donation data
    // public function update_donation($id, $data) {
    //     $this->db->where('id', $id);
    //     return $this->db->update('donor_registration_form', $data);
    // }

    // // Delete donation
    // public function delete_donation($id) {
    //     return $this->db->delete('donor_registration_form', array('id' => $id));
    // }
}