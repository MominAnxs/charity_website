<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class HomeController extends CI_Controller {

    public function index() {
        $this->load->view('index');
    }

    public function about_us() {
        $this->load->view('about_us');
    }

    public function campaigns() {
        $this->load->view('campaigns');
    }

    public function reports() {
        $this->load->view('reports');
    }

    public function contact_us() {
        $this->load->view('contact-us');
    }

    public function sign_up() {
        $this->load->view('sign-up');
    }  
    
    public function log_in() {
        $this->load->view('log-in');
    }  
    
    public function donate_now() {
        $this->load->view('donation-form.php');
    }    
    
    public function registration() {
        $this->load->view('registration-form.php');
    }

    public function our_services() {
        $this->load->view('our-services');
    }

    public function thank_you() {
        $this->load->view('thank-you');
    }
}
?>