<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DonationFormModel extends CI_Model {

    public function update_donor_if_null($email, $phone, $new_data) {
        $this->db->where([
            'email' => $email,
            'phone' => $phone
        ]);
        $query = $this->db->get('registration_donation_form');
        $existing = $query->row();
    
        if ($existing) {
            $update_data = [];
    
            foreach ($new_data as $key => $value) {
                // Only add to update data if the existing field is NULL
                if (is_null($existing->$key) && !is_null($value)) {
                    $update_data[$key] = $value;
                }
            }
    
            if (!empty($update_data)) {
                $this->db->where([
                    'email' => $email,
                    'phone' => $phone
                ]);
                return $this->db->update('registration_donation_form', $update_data);
            }
    
            return true; // No update needed, everything already present
        } else {
            // Insert new donor
            return $this->db->insert('registration_donation_form', $new_data);
        }
    }

    public function email_exists($email) {
        return $this->db
                        ->where('email', $email)
                        ->get('registration_donation_form')
                        ->num_rows() > 0;
    }
    
    public function phone_exists($phone) {
        return $this->db
                        ->where('phone', $phone)
                        ->get('registration_donation_form')
                        ->num_rows() > 0;
    }
      
    
}