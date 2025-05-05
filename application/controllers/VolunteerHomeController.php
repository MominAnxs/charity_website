<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class VolunteerHomeController extends CI_Controller {

    public function index() {
        $this->load->view('volunteer-dashboard');
    }

    public function appointment() {
        $this->load->view('volunteers-appointments');
    }

    public function d_history() {
        $this->load->view('volunteer-d-history');
    }

    public function profile() {
        $this->load->view('volunteer-profile');
    }
}
?>