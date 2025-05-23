<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AdminHomeController extends CI_Controller {

    public $upload;

    public function index() {
        $this->load->view('admin-dashboard');
    }

    public function appointment() {
        $this->load->view('admin-appointments');
    }

    public function volunteers() {
        $this->load->view('admin-volunteers');
    }

    public function campaigns() {
        $this->load->view('admin-campaigns');
    }

    public function donation() {
        $this->load->view('admin-donation');
    }

    public function donor() {
        $this->load->view('admin-donor');
    }

    public function profile() {
        $this->load->view('admin-profile');
    }

    public function login() {
        $this->load->view('admin-login');
    }
}
?>